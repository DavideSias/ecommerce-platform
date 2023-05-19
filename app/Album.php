<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    public function item(){
        return $this->belongsTo('App/Item');
    }
}
