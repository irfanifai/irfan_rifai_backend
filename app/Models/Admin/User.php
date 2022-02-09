<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Admin\User;

class User extends Authenticatable
{

  protected $table = 'users';
  public $timestamps = false;
  protected $primaryKey = 'id';
  protected $fillable= [
    'name',
    'username',
    'email', 
    'password',
    'phone',  
    'tr_chief', 
    'tr_tro', 
    'tr_cs', 
    'tr_receptionist', 
    'ga_chief', 
    'ga_housekeeping',
    'ga_landscape', 
    'ga_parking', 
    'ga_pestcontrol', 
    'ga_hse', 
    'ga_security', 
    'ga_storekeeper', 
    'ga_po', 
    'eng_chief', 
    'eng_civilsection', 
    'eng_plumbing', 
    'eng_technical', 
    'fin_chief', 
    'fin_staff', 
    'accounting', 
    'acc_laporan',
    'acc_coa', 
    'acc_transaksi', 
    'admin', 
    'admin_user', 
    'admin_export', 
    'developer', 
    'tb', 
    'photo',
    'remember_token',
    'client_token',
    'oc_chief'
 ];

  protected $hidden = [
    'password',     
    'client_token',    
    'remember_token',
    'id'
  ];
}
