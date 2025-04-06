<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = [
        'title',
        'deps',
        'image'
    ];

    function user (){
        return $this->belongsTo(User::class);
    }
}

