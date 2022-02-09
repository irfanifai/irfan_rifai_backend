<?php

namespace App\Models\Accounting;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class RecurringJournal extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public $timestamps = false;

    protected $table = 'accounting_recurring_journal';

    protected $primaryKey = 'id';

    protected $fillable = ['recurring_name', 'created_at'];

    public function detail()
    {
        return $this->hasMany('App\Models\Accounting\RecurringJournalDetail', 'recurring_id', 'id');
    }
}
