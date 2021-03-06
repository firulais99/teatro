<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eventos extends Model{
   
	protected $table = 'Eventos';
	protected $fillable = ['nombre', 'nombre','fecha','hora','sinopsis','artistas','image'];

	public static function getEvento($id_evento){
		return self::find($id_evento);
	}

	public static function getHorariosEvento($id_evento){
		return self::join('Horarios_evento', 'Eventos.id', '=', 'Horarios_evento.id_evento')
			->join('Horarios', 'Horarios.id', '=', 'Horarios_evento.id_horario')
			->select('Horarios.hora', 'Horarios_evento.fecha', 'Horarios.id')
			->where('Eventos.id', '=', $id_evento)
			->orderBy('Horarios.hora', 'desc')
			->get();
	}

	public static function getAsientosReservados($id_evento, $id_horario){
		return self::join('Asientos_evento', 'Eventos.id', '=', 'Asientos_evento.id_evento')
			->join('Asientos', 'Asientos.id', '=', 'Asientos_evento.id_asiento')
			->select('Asientos.*')
			->where('Eventos.id', '=', $id_evento)
			->where('Asientos_evento.id_horario', '=', $id_horario)
			->get();
	}

	public static function getEventosMes(){ 
		return self::join('Horarios_evento', 'Horarios_evento.id_evento', '=', 'Eventos.id')
			->select('Eventos.*')
			->where('Horarios_evento.fecha', 'like', '%' . date('Y-m') . '-%');
	}
}
