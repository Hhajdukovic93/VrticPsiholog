<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class psiholog extends Model
{
    //

    protected $table = 'psiholog';

    public function nalaz(){
        return $this->hasMany('App\nalaz');
    }
}
