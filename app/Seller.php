<?php

namespace App;

use App\Traits\Slugger;
use Illuminate\Database\Eloquent\Model;


class Seller extends Model
{
    use Slugger;
    public function user(){

        return $this->belongsTo('App\User');

    }

    public function items(){

        return $this->hasMany('App\Item');

    }

}
