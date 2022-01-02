<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semestre extends Model
{
     public function modules()
    {
        return $this->hasMany('App\Module');
    }
}
