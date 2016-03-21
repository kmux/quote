<?php

namespace Quote;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = [
        'username',
        'title'
    ];
}
