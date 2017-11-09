<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = [
        'tagno', 'user_id', 'name', 'regno', 'status'
    ];

}
