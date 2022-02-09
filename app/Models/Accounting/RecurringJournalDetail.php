<?php

namespace App\Models\Accounting;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class RecurringJournalDetail extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public $timestamps = false;

    protected $table = 'accounting_recurring_journal_detail';

    protected $primaryKey = 'id';

    protected $fillable = ['recurring_id', 'account_id', 'debit', 'credit'];

    public function coa()
    {
        return $this->belongsTo('App\Models\Accounting\COA', 'account_id');
    }

    public function master()
    {
        return $this->belongsTo('App\Models\Accounting\Journal', 'recurring_id');
    }
}
