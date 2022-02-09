<?php

namespace App\Models\Accounting;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Transaction extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public $timestamps = false;

    protected $table = 'accounting_transaction';

    protected $primaryKey = 'id';

    protected $fillable = [
        'transaction_bills_id',
        'transaction_tax_id',
        'transaction_tax_code',
        'transaction_coa',
        'transaction_description',
        'transaction_total_amount',
        'created_at',
    ];

    public function bill()
    {
        return $this->belongsTo('App\Models\Accounting\Bills', 'transaction_bills_id');
    }

}
