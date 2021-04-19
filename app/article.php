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

    public function search($searchWords)
    {
        return $this->where(function ($query) use ($searchWords) {
            $query->where('title', 'like', '%' . $searchWords[0] . '%')
                ->orWhere('lang', 'like', '%' . $searchWords[0] . '%')
                ->orWhere('problem', 'like', '%' . $searchWords[0] . '%')
                ->orWhere('assistance', 'like', '%' . $searchWords[0] . '%');
        })
        ->where(function ($query) use ($searchWords) {
            if (isset($searchWords[1])) {
                $query->where('title', 'like', '%' . $searchWords[1] . '%')
                    ->orWhere('lang', 'like', '%' . $searchWords[1] . '%')
                    ->orWhere('problem', 'like', '%' . $searchWords[1] . '%')
                    ->orWhere('assistance', 'like', '%' . $searchWords[1] . '%');
            }
        })
        ->where(function ($query) use ($searchWords) {
            if (isset($searchWords[2])) {
                $query->where('title', 'like', '%' . $searchWords[2] . '%')
                    ->orWhere('lang', 'like', '%' . $searchWords[2] . '%')
                    ->orWhere('problem', 'like', '%' . $searchWords[2] . '%')
                    ->orWhere('assistance', 'like', '%' . $searchWords[2] . '%');
            }
        })->get();
    }

    public function get($editId)
    {
        return $this->find($editId);
    }

    public function create($request)
    {
        $this->fill($request)->save();
    }

    public function edit($updateId, $request)
    {
        $this->find($updateId)->fill($request)->save();
    }

    public function onesDelete($deleteId)
    {
        $this->find($deleteId)->delete();
    }
}
