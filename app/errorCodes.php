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

}
