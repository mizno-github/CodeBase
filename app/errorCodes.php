<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class errorcodes extends Model
{
    protected $fillable = [
        'id',
        'title',
        'errorCode',
        'detailed',
        'solution',
        'assistance',
        'lang',
    ];

    public function search($searchWords)
    {
        return $this->where(function ($query) use ($searchWords) {
            $query->where('title', 'like', '%' . $searchWords[0] . '%')
                ->orWhere('errorCode', 'like', '%' . $searchWords[0] . '%')
                ->orWhere('lang', 'like', '%' . $searchWords[0] . '%')
                ->orWhere('solution', 'like', '%' . $searchWords[0] . '%')
                ->orWhere('detailed', 'like', '%' . $searchWords[0] . '%')
                ->orWhere('assistance', 'like', '%' . $searchWords[0] . '%');
        })
        ->where(function ($query) use ($searchWords) {
            if (isset($searchWords[1])) {
                $query->where('title', 'like', '%' . $searchWords[1] . '%')
                    ->orWhere('errorCode', 'like', '%' . $searchWords[1] . '%')
                    ->orWhere('lang', 'like', '%' . $searchWords[1] . '%')
                    ->orWhere('solution', 'like', '%' . $searchWords[1] . '%')
                    ->orWhere('detailed', 'like', '%' . $searchWords[1] . '%')
                    ->orWhere('assistance', 'like', '%' . $searchWords[1] . '%');
            }
        })
        ->where(function ($query) use ($searchWords) {
            if (isset($searchWords[2])) {
                $query->where('title', 'like', '%' . $searchWords[2] . '%')
                    ->orWhere('errorCode', 'like', '%' . $searchWords[2] . '%')
                    ->orWhere('lang', 'like', '%' . $searchWords[2] . '%')
                    ->orWhere('solution', 'like', '%' . $searchWords[2] . '%')
                    ->orWhere('detailed', 'like', '%' . $searchWords[2] . '%')
                    ->orWhere('assistance', 'like', '%' . $searchWords[2] . '%');
            }
        })->get();
    }
}
