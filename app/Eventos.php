<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
   
	protected $table = 'Eventos';
	protected $fillable = ['nombre', 'nombre','fecha','hora','sinopsis','artistas','image'];

	public static function getEvento($id_evento){
		return self::find($id_evento);
	}

	public static function getHorariosEvento($id_evento){
		return self::join('horarios_evento', 'eventos.id', '=', 'horarios_evento.id_evento')
			->join('horarios', 'horarios.id', '=', 'horarios_evento.id_horario')
			->select('horarios.hora')
			->where('eventos.id', '=', $id_evento)
			->orderBy('hora', 'desc')
			->get();
	}

	public static function getAsientosReservados($id_evento){
		return self::join('Asientos_evento', 'evento.id', '=', 'asientos_evento.id_evento')
			->join('asientos', 'asientos.id', '=', 'asientos_evento.id_asiento')
			->select('asientos.*')
			->where('eventos.id', '=', $id_evento)
			->get();
	}
}
