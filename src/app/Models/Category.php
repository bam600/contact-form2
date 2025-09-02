<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// 問い合わせの種類が格納されているテーブル
class Category extends Model
{ 
         protected $fillable = [
         'id',
         'content',
     ];
}
