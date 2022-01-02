<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{
    //
    public function Actualite()
    {
        return $this->belongsTo('App\Actualite');
    }

}
