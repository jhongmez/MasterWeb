<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Llamamos la table
    protected $table = 'posts';

    //Relacion entre user y category de muchos a uno
    public function user() {
        return $this->belongsTo('App\User');
    }
}
