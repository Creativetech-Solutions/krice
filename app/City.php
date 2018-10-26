<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function area(){
    	return $this->hasMany('App\Area');
    }
}
