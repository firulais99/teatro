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
	<div class="panel panel-default" id="panel_escenario">
		<div id="teatro"><div>
		<br/>
		<div id="escenario"><h2>Escenario</h2></div>
	</div>
</div>
<input type="hidden" name="id_evento" id="id_evento" value="{{$id_evento}}"/>
<script type="text/javascript">
	$(document).on('ready', function(){
		pintarEscenario();
	});

	function pintarEscenario(){
		$.post(
			'http://localhost:8000/esenario',
			{
				horario: $('#horario').val(),
				id_evento: $('#id_evento').val()
			},
			function(json){
				$('#teatro').html(json.escenario);
			},
			'json'
		);
	}
</script>
@stop
