<?php

namespace App\Models\Accounting;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Journal extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public $timestamps = false;

    protected $table = 'accounting_journal';

    protected $primaryKey = 'id';

    protected $fillable = ['journal_no', 'journal_date', 'journal_type', 'journal_description', 'journal_bills_id', 'journal_receive_payment_id'];

    public function detail()
    {
        return $this->hasMany('App\Models\Accounting\JournalDetail', 'journal_id', 'id');
    }

    /**
    * List of journal types:
    * 1. General Journal
    * 2. End of Financial Year Journal
    */
}
