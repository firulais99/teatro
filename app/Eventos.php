<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
   
protected $table = 'Eventos';
protected $fillable = ['nombre', 'nombre','fecha','hora','sinopsis','artistas','image'];
}
