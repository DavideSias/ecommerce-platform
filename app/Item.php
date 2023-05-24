<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function seller(){
        return $this->belongsTo('App\Seller');
    }

    public function albums(){

        return $this->hasMany('App\Album');

    }

    public function categories(){

        return $this->belongsToMany('App\Category');

    }

    public function orders(){

        return $this->belongsToMany('App\Order');

    }
}
