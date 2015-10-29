<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class altaeventos extends Model
{
    protected $table = 'Eventos';
	protected $fillable = ['id_teatro','nombre','sinopsis','elenco','fecha','artistas','image'];
}
public static function getaltaEvento(){


		

	}