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

    public $timestamps = true;

    protected $primaryKey = 'id';

    protected $fillable= [
        'name',
        'username',
        'email',
        'password',
        'photo',
        'remember_token',
        'client_token',
    ];

    protected $hidden = [
        'password',
        'client_token',
        'remember_token',
        'id'
    ];
}
