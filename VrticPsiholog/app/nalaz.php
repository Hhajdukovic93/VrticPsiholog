<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nalaz extends Model
{
    //

    protected $table = 'nalaz';

    public function poremecaj(){
        return $this->belongsTo('App\poremecaj');
    }

    public function dijete(){
        return $this->belongsTo('App\dijete');
    }

    public function psiholog(){
        return $this->belongsTo('App\psiholog');
    }
}
