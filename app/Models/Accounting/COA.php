<?php

namespace App\Models\Accounting;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class COA extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public $timestamps = false;

    protected $table = 'accounting_coa';

    protected $primaryKey = 'id';

    protected $fillable = [
        'account_role',
        'account_no',
        'account_name',
        'account_type',
        'account_level',
        'account_head',
        'account_position',
        'account_opening_balance',
        'account_ending_balance',
    ];

    /**
    * Get child account by level.
    *
    * @return \App\Models\Accounting\COA
    */
    public function getChildByLevel($start_level, $end_level = null)
    {
        if (! isset($end_level)) {
            $end_level = $start_level;
        }

        return COA::where('account_head', $this->id)->whereBetween('account_level', [$start_level, $end_level])->orderBy('account_no')->get();
    }

    /**
    * Get parent account.
    *
    * @return \App\Models\Accounting\COA
    */
    public function getParent()
    {
        return COA::where('id', $this->account_head)->first();
    }

    /**
    * Get ending balance for COA list.
    *
    * @return integer
    */
    public function getEndingBalance()
    {
        $current_year_earning = COASetting::where('link_type', '1')->first()->account_id ?? 0;
        $historical_balancing = COASetting::where('link_type', '3')->first()->account_id ?? 0;
        
        if ($this->account_role == "Header") {
            if ($this->account_level == 1) {
                $level_2 = $this->where('account_head', $this->id)->pluck('id')->all();
                $level_3 = $this->whereIn('account_head', $level_2)->pluck('id')->all();
                $level_4 = $this->whereIn('account_head', $level_3)->pluck('id')->all();
            } elseif ($this->account_level == 2) {
                $level_2 = [];
                $level_3 = $this->where('account_head', $this->id)->pluck('id')->all();
                $level_4 = $this->whereIn('account_head', $level_3)->pluck('id')->all();
            } else {
                $level_2 = [];
                $level_3 = [];
                $level_4 = $this->where('account_head', $this->id)->pluck('id')->all();
            }

            $details = array_unique(array_merge($level_2, $level_3, $level_4));
            $opening_balance = $this->whereIn('id', $details)->sum('account_opening_balance');
            $details[] = $this->id;
            $journals = JournalDetail::whereIn('account_id', $details)->get();

            if ($this->account_position == 'Debit') {
                $ending_balance = $opening_balance + $journals->sum('debit') - $journals->sum('credit');
            } else {
                $ending_balance = $opening_balance + $journals->sum('credit') - $journals->sum('debit');
            }
        } else {
            $journals = JournalDetail::where('account_id', $this->id)->get();
            $details = [$this->id];

            if ($this->account_position == 'Debit') {
                $ending_balance = $this->account_opening_balance + $journals->sum('debit') - $journals->sum('credit');
            } else {
                $ending_balance = $this->account_opening_balance + $journals->sum('credit') - $journals->sum('debit');
            }
        }

        if (in_array($current_year_earning, $details)) {
            $incomes = COA::whereIn('account_type', ['Income', 'Other Income'])->get();
            $expenses = COA::whereIn('account_type', ['Cost of Sales', 'Expense', 'Other Expense'])->get();
            $journals = Journal::pluck('id')->all();

            $profit = JournalDetail::whereIn('journal_id', $journals)->whereIn('account_id', $incomes->pluck('id')->all())->get();
            $loss = JournalDetail::whereIn('journal_id', $journals)->whereIn('account_id', $expenses->pluck('id')->all())->get();

            $ending_balance += ($incomes->sum('account_opening_balance') + $profit->sum('credit') - $profit->sum('debit')) - ($expenses->sum('account_opening_balance') + $loss->sum('debit') - $loss->sum('credit'));
        } elseif (in_array($historical_balancing, $details)) {
            $ending_balance += COA::where('account_position', 'Credit')->sum('account_opening_balance') - COA::where('account_position', 'Debit')->sum('account_opening_balance');
        }

        return $ending_balance;
    }

    /**
    * Get journal list from date range.
    *
    * @param  string  $date_start
    * @param  string  $date_end
    * @param  bool  $child
    * @return \App\Models\Accounting\JournalDetail
    */
    public function getJournalList($date_start, $date_end, $child = null)
    {
        $journals = Journal::whereBetween('journal_date', [date('Y-m-d', strtotime($date_start)), date('Y-m-d', strtotime($date_end))])->orderBy('journal_date')->pluck('id')->all();

        if (count($journals)) { // In case there is no journal on selected date.
            $orderRaw = 'field (journal_id, '.implode(", ", $journals).')';
        } else {
            $orderRaw = 'journal_id';
        }

        if (isset($child)) {
            $id_coas = COA::where('account_head', $this->id)->where('account_level', '>', $this->account_level)->where('account_role', 'Detail')->orderBy('account_no')->pluck('id')->all();
            array_push($id_coas, $this->id);

            return JournalDetail::whereIn('account_id', $id_coas)->whereIn('journal_id', $journals)->orderByRaw($orderRaw)->get();
        } else {
            return JournalDetail::where('account_id', $this->id)->whereIn('journal_id', $journals)->orderByRaw($orderRaw)->get();
        }
    }

    public function getJournalListProfitLoss($date_start, $date_end, $child = null)
    {
        $journals = Journal::where('journal_type', '!=', 2)->whereBetween('journal_date', [date('Y-m-d', strtotime($date_start)), date('Y-m-d', strtotime($date_end))])->orderBy('journal_date')->pluck('id')->all();

        if (count($journals)) { // In case there is no journal on selected date.
            $orderRaw = 'field (journal_id, '.implode(", ", $journals).')';
        } else {
            $orderRaw = 'journal_id';
        }

        if (isset($child)) {
            $id_coas = COA::where('account_head', $this->id)->where('account_level', '>', $this->account_level)->where('account_role', 'Detail')->orderBy('account_no')->pluck('id')->all();
            array_push($id_coas, $this->id);

            return JournalDetail::whereIn('account_id', $id_coas)->whereIn('journal_id', $journals)->orderByRaw($orderRaw)->get();
        } else {
            return JournalDetail::where('account_id', $this->id)->whereIn('journal_id', $journals)->orderByRaw($orderRaw)->get();
        }
    }

    /**
    * Eloquent one to many response.
    *
    * @return \App\Models\Accounting\JournalDetail
    */
    public function journal()
    {
        return $this->hasMany('App\Models\Accounting\JournalDetail', 'account_id');
    }

    /**
    * Eloquent belongs to response.
    *
    * @return \App\Models\Accounting\COASetting
    */
    public function link()
    {
        return $this->hasOne('App\Models\Accounting\COASetting', 'account_id');
    }
}
