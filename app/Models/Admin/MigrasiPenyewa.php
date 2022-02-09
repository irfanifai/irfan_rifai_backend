<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\MigrasiPenyewa;

class MigrasiPenyewa extends Model
{
  protected $table = 'biodatas';
  public $timestamps = false;
  protected $fillable= ['id', 'nama_pt', 'alamat_pt1', 'blok', 'rt', 'rw', 'no', 'kel', 'kec', 'kota', 'prov', 'kodepos', 'alamat_pt2', 'notelp_pt1', 'nama_pj', 'notelp_pj', 'nama_tenant', 'nm_bank', 'no_rek', 'jenis_id', 'no_ident', 'npwp', 'no_akun'];
  // protected $hidden = ['id'];
}
