<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class errorCode extends Model
{
    protected $table = 'errorCodes';
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
