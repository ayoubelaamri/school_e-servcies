<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
     public function semestres()
    {
        return $this->hasMany('App\Semestre');
    }

    public function modules()
    {
        return $this->belongsToMany('App\Module');
    }
}
