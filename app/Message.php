<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $guarded = [];
    //eloquest protege la creacion de objetos de forma maxima 
    //y con esa linia de codigo protegemos la cantida q queromos es este ejemplo no vamos a proteger nada

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
