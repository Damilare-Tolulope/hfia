<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Minister extends Model
{
   protected $fillable = [
        'name', 'email', 'password',
    ];
}
