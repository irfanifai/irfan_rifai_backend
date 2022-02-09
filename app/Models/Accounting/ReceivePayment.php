<?php

namespace App\Models\Accounting;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class ReceivePayment extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public $timestamps = false;

    protected $table = 'accounting_receive_payment';

    protected $primaryKey = 'id';

    protected $fillable = [
        'receive_payment_customer_id',
        'receive_payment_account_id',
        'receive_payment_no',
        'receive_payment_date',
        'receive_payment_amount',
        'receive_payment_journal_memo',
        'created_at'
    ];

    public function customer()
    {
        return $this->belongsTo('App\Models\Accounting\Customer', 'receive_payment_customer_id');
    }
    
    public function receivePaymentDetail()
    {
        return $this->hasMany('App\Models\Accounting\ReceivePaymentDetail', 'receive_payment_id', 'id')->with('bill');
    }

    public function accountType()
    {
        return $this->belongsTo('App\Models\Accounting\COA', 'receive_payment_account_id');
    }

    public function journal()
    {
        return $this->hasOne('App\Models\Accounting\Journal', 'journal_receive_payment_id','id');
    }

}
