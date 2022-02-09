<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Signature extends Model
{
  protected $table = 'admin_signature';
  protected $primaryKey = 'id';

  protected $fillable= [
    'signature_name',
    'signature_position',
    'invoice_sign',
    'po_sign',
    'client_token'
  ];

  protected $hidden = [
    'client_token', 
    'created_at',
    'updated_at',
  ];

}
