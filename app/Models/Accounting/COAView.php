<?php

namespace App\Models\Accounting;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class COAView extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public $timestamps = false;

    protected $table = 'accounting_coa_view';

    public $primaryKey = 'id';

    public $appends = [
        'disable_status'
    ];

    public function getDisableStatusAttribute()
    {
        if ($this->account_role == "Header") {
            return true;
        } else {
            return false;
        }
    }

    public function journal()
    {
        return $this->hasMany('App\Models\Accounting\Jurnal', 'no_akun');
    }

    public function sums($tanggal_awal, $tanggal_akhir)
    {
        return Jurnal::where('no_akun', $this->no_akun)->whereBetween('tgl_trans', [$tanggal_awal, $tanggal_akhir])->get();
    }
}
