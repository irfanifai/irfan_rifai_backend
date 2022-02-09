<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\User;

class News extends Model
{
    protected $table = 'admin_news';

    public $timestamps = true;

    protected $primaryKey = 'id';

    protected $fillable= [
        'news_title',
        'news_content',
        'news_username',
        'photo',
        'created_at'
    ];

    protected $hidden = [
        'updated_at',
    ];

    public function user() {
        return $this->hasOne(User::class,'username','news_username');
    }
}
