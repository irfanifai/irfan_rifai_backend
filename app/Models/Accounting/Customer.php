<?php

namespace App\Models\Accounting;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Customer extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public $timestamps = false;

    protected $table = 'accounting_customer';

    protected $primaryKey = 'id';

    protected $fillable = [
        'customer_type', 
        'customer_name', 
        'customer_address', 
        'customer_province',
        'customer_postalcode',
        'customer_email',
        'customer_contactname',
        'customer_contactphone',
        'customer_contactname2',
        'customer_contactphone2',
        'created_at'
    ];

    public function bills()
    {
        return $this->hasMany('App\Models\Accounting\Bills', 'bills_customer_id','id')->with('receivePaymentDetail');
    }

    public function activeBills()
    {
        return $this->hasMany('App\Models\Accounting\Bills', 'bills_customer_id','id')->where(function ($query) {
            return $query->where('bills_invoice_status', 3)->orWhere('bills_invoice_status', 4);
        })->with('receivePaymentDetail');
    }


    //CEK ENDING BALLANCE
    public function receivepayments()
    {
        return $this->hasMany('App\Models\Accounting\ReceivePayment', 'receive_payment_customer_id','id')->with('receivePaymentDetail');
    }

}
