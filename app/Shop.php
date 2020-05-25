<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public function menus() {
        return $this->belongsToMany('App\Menu');
    }
}
