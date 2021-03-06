<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    use HasFactory;
    // table名を指定
    protected $table = 'memo';

    // カラムを指定
    protected $fillable = [
        'id', 'title', 'content'
    ];
 
    // created_atを使わない場合はfalseを指定する。
    public $timestamps = false;
}
