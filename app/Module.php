<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    /**
     * Trouver les semestres du module
     */
    public function semestre()
    {
        return $this->belongsTo('App\Semestre');
    }

    
    /**
     * Trouver le responsable du module
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }


    /**
     * Trouver les elements du module
     */
    public function elements()
    {
        return $this->hasMany('App\Element');
    }

    public function filieres()
    {
        return $this->belongsToMany('App\Filiere');
    }

}
