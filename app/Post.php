<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // 資料表名稱
    protected $table = 'post';
    // 主鍵名稱
    protected $primaryKey = 'id';
    // 可以大量指定異動的欄位（Mass Assignment）
    protected $fillable = [
        'name', 'content', 'email', 'created_at', 'updated_at'
    ];
}
