<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skupina extends Model
{
    //
    protected $table = 'skupina';

    public function vrtic(){
        return $this->belongsTo('App\vrtic');
    }

    public function odgojiteljica(){
        return $this->hasMany('App\odgojiteljica');
    }

    public function dijete(){
        return $this->hasMany('App\dijete');
    }
}
