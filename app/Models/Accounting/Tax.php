<?php

namespace App\Models\Accounting;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Tax extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public $timestamps = false;

    protected $table = 'accounting_tax';

    protected $primaryKey = 'id';

    protected $fillable = [
        'tax_code', 
        'tax_name', 
        'tax_rate', 
        'tax_coa_ar',
        'tax_coa_ap',
        'created_at',
    ];


    public function coaAR()
    {
        return $this->belongsTo('App\Models\Accounting\COA', 'tax_coa_ar');
    }    
    public function coaAP()
    {
        return $this->belongsTo('App\Models\Accounting\COA', 'tax_coa_ap');
    }

    public function billsTransaction()
    {
        return $this->hasMany('App\Models\Accounting\Transaction', 'transaction_tax_code', 'tax_rate');
    }
}
