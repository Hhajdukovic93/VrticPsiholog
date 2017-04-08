<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dijete extends Model
{


    protected $table = 'dijete';

    public function skupina(){
        return $this->belongsTo('App\skupina');
    }

    public function poremecaj(){
        return $this->belongsToMany('App\poremecaj', 'dijete_poremecaj', 'dijete_id', 'poremecaj_id');
    }

    public function nalaz(){
        return $this->hasMany('App\nalaz');
    }
}
