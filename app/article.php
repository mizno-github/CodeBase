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

    function get($editId)
    {
        return $this->find($editId);
    }

    function create($request)
    {
        $this->fill($request)->save();
    }

    function edit($updateId, $request)
    {
        $this->find($updateId)->fill($request)->save();
    }

    function onesDelete($deleteId)
    {
        $this->find($deleteId)->delete();
    }
}
