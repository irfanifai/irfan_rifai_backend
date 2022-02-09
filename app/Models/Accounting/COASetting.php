<?php

namespace App\Models\Accounting;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class COASetting extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public $timestamps = false;

    protected $table = 'accounting_coa_setting';

    public $primaryKey = 'id';

    public $incrementing = false;

    protected $fillable = [
        'account_id',
        'link_type'
    ];

    public function master()
    {
        return $this->belongsTo('App\Models\Accounting\COA', 'account_id');
    }

    /**
    * List of types:
    * 1 -> Current Year Earning
    * 2 -> Retained Earning
    * 3 -> Historical Balancing
    */
}
