<?php

namespace App\Models\Accounting;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class JournalDetail extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public $timestamps = false;

    protected $table = 'accounting_journal_detail';

    protected $primaryKey = 'id';

    protected $fillable = ['journal_id', 'account_id', 'debit', 'credit'];

    public $appends = ['full_account'];

    public function coa()
    {
        return $this->belongsTo('App\Models\Accounting\COA', 'account_id');
    }

    public function getFullAccountAttribute()
    {
        return $this->coa->account_no.' '.$this->coa->account_name;
    }

    public function master()
    {
        return $this->belongsTo('App\Models\Accounting\Journal', 'journal_id');
    }
}
