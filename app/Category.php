<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //Create property protected

    //Llamamos la tabla de nuestra BD
    protected $table = 'categories';

    //Creamos una funcion donde nos haga la relacion de 1 a muchos con hasMany
    public function posts() {
        return $this->hasMany('App\Post');
    }
}
