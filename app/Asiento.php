<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asiento extends Model{

	protected $table = 'Asientos';
    
    public static function buscarAsiento($fila, $numero){
    	return self::where('Asientos.fila', '=', $fila)
    		->where('Asientos.numero', '=', $numero)
    		->get()[0];
    }
}
