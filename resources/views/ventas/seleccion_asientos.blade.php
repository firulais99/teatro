@extends('ventas.index')

@section('contenedor')
<div class="secciones panel panel-default" id="left">
	<div class="secciones">
		<div>
			<img class="img_evento img-thumbnail" src="/imgs/{{$evento->image}}"></img>
		</div>
		<br/>
		<div class="form-group">
			<select id="horario" class="form-control">
				<option value="0">(Seleccione su horario)</option>
				@foreach($horarios as $horario)
					<option value="{{$horario->id}}">{{$horario->hora}}</option>
				@endforeach
			</select>
		</div>
	</div>
	<div class="secciones">
		<div id="seleccionados" class="panel panel-default">
		<div class="panel-heading">Asientos seleccionados.</div>
			<ul class="list-group" id="asientos_seleccionados"></ul>
		</div>
		<div id="precio_div" class="panel panel-default">
			<label>Total MN: $</label><label id="costo"></label>
		</div>
		<div id="botones_div" class="panel panel-default">
			<a href="/evento/{{$evento->id}}" class="btn btn-default">Regresar <span class="glyphicon glyphicon-arrow-left"></span></a>
			<span>&nbsp;&nbsp;</span>
			<button class="selecciones btn btn-primary">Comprar <span class="glyphicon glyphicon-shopping-cart"></span></button>
		</div>
	</div>
</div>
<div class="secciones" id="right">
	<div id="teatro"><div>
	<label>Ecenario</label></div>
</div>
@stop
