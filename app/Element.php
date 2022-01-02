<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    /**
     * Trouver le module de l'element
     */
    public function module()
    {
        return $this->belongsTo('App\Module');
    }

    /**
     * Trouver le prof de l'element
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
