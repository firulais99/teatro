<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventoAsientoModel extends Model{

	protected $table = 'Asientos_evento';

    public static function guardar($id_asiento, $id_evento, $id_horario){
    	$ea = new Self();
    	$ea->id_asiento = $id_asiento;
    	$ea->id_evento = $id_evento;
    	$ea->id_horario = $id_horario;
    	$ea->created_at = date('Y-m-d H:i:s');
    	$ea->updated_at = date('Y-m-d H:i:s');
    	$ea->save();
    }
}
