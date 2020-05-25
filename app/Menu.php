<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function shops() {
        return $this->belongsToMany('App\Shop');
    }
}
