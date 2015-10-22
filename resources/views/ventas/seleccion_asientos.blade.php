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
		<div class="panel-heading"><h3>Seleccione sus asientos.</h3></div>
		<div id="teatro"><div>
	</div>
</div>
<input type="hidden" name="id_evento" id="id_evento" value="{{$id_evento}}"/>
<input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
<script type="text/javascript">
	$(document).on('ready', function(){
		pintarEscenario();
		$('.asiento').on('click', seleccionarAsiento);
	});

	function pintarEscenario(){
		$.ajax({
			type: "POST",
			url: "/escenario",
			data: {
				id_horario: $('#horario').val(),
				id_evento: $('#id_evento').val(),
				_token: $('#_token').val()
			},
			dataType: "json",
			async: false,
			success: function(json){
				$('#teatro').html(json.escenario);
			}
		});
	}

	function seleccionarAsiento(){
		var asiento = '';
		var html = '';

		if($(this).hasClass('seleccionado')){
			asiento = $(this).find('.asiento_selected:first').val();
			$(this).removeClass('seleccionado');
			$('#asiento-' + asiento).parent().fadeOut();
			$('#asiento-' + asiento).parent().remove();
		}else{
			asiento = $(this).find('.asiento_selected:first').val();
			$(this).addClass('seleccionado');
			html = '<li class="list-group-item"><label>' + asiento + '</label><input type="hidden" name="asiento-' + asiento +  '" id="asiento-' + asiento + '" value="' + asiento + '"/></li>';
			$('#asientos_seleccionados').append(html);
		}
	}
</script>
@stop
