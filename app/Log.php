<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = ['card_id', 'status',];

    // Define Relationship...
    //

    public function card() {
        return $this->belongsTo('App\Card');
    }
}
