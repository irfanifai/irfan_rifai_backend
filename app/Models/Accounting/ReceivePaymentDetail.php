<?php

namespace App\Models\Accounting;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class ReceivePaymentDetail extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public $timestamps = false;

    protected $table = 'accounting_receive_payment_detail';

    protected $primaryKey = 'id';

    protected $fillable = [
        'receive_payment_id',
        'receive_payment_bill_id',
        'receive_payment_amount',
    ];

    public function receivePaymentDetail()
    {
        return $this->belongsTo('App\Models\Accounting\ReceivePayment', 'receive_payment_id');
    }

    public function bill()
    {
        return $this->belongsTo('App\Models\Accounting\Bills', 'receive_payment_bill_id');
    }




}
