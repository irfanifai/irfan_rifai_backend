<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Bank;

class Bank extends Model
{
  protected $table = 'admin_bank';
  protected $primaryKey = 'id';
  protected $fillable= [
    'bank_name', 
    'bank_cabang', 
    'bank_rekening', 
    'bank_rekening_name', 
    'invoice_bank',
    'client_token',
  ];
  protected $hidden = [
    'client_token', 
    'created_at',
    'updated_at',
  ];
}
