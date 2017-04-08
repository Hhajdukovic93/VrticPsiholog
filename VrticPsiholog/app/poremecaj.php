<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class poremecaj extends Model
{
    //

    protected $table = 'poremecaj';

    public function dijete(){
        return $this->belongsToMany('App\dijete','dijete_poremecaj', 'dijete_id', 'poremecaj_id');
    }

    public function nalaz(){
        return $this->hasMany('App\nalaz');
    }
}
