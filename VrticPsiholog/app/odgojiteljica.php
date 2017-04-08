<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class odgojiteljica extends Model
{
    //

    protected $table = 'odgojiteljica';

    public function skupina(){
        return $this->belongsTo('App\skupina');
    }
}
