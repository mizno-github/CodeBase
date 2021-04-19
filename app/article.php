<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    protected $table = 'articles';
    protected $fillable = [
        'id',
        'title', // コラムのタイトル
        'lang', // 言語
        'problem', // コラムの内容
        'assistance', // 検索補助
    ];
}
