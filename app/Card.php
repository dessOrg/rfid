<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Card;

class Card extends Model
{
    protected $fillable = [
        'tagno', 'user_id', 'status',
    ];

    // Define Relationship...

    public function user() {
        return $this->belongsTo('App\User');
    }

}
