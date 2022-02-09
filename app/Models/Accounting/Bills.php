<?php

namespace App\Models\Accounting;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Bills extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public $timestamps = false;

    protected $table = 'accounting_bills';

    protected $primaryKey = 'id';

    protected $fillable = [
        'bills_customer_id',
        'bills_date',
        'bills_due_date',
        'bills_shipaddress',
        'bills_quotation_number',
        'bills_order_number',
        'bills_invoice_number',
        'bills_invoice_status',
        'bills_sub_total',
        'bills_tax_total',
        'bills_grand_total',
        'bills_paid_total',
        'created_at',
    ];

    public function customer()
    {
        return $this->belongsTo('App\Models\Accounting\Customer', 'bills_customer_id');
    }

    public function transaction()
    {
        return $this->hasMany('App\Models\Accounting\Transaction', 'transaction_bills_id');
    }

    public function receivePaymentDetail()
    {
        return $this->hasMany('App\Models\Accounting\ReceivePaymentDetail', 'receive_payment_bill_id', 'id');
    }

    public function journal()
    {
        return $this->hasOne('App\Models\Accounting\Journal', 'journal_bills_id','id');
    }

}
