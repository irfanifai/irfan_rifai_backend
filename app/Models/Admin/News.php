<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\User;

class News extends Model
{
  protected $table = 'admin_news';
  public $timestamps = false;
  protected $primaryKey = 'id';
  protected $fillable= [
    'news_title', 
    'news_content', 
    'news_username', 
    'client_token', 
    'created_at'
  ];

  protected $hidden = [
    'client_token', 
    'updated_at',
  ];


  public function user() {
    return $this->hasOne(User::class,'username','news_username');
  }


}
