@extends('ventas.index')

@section('contenedor')
<form action="/venta/{{$id_evento}}" method="post">
	<div class="secciones panel panel-default" id="left">
		<div class="secciones">
			<div>
				<img class="img_evento img-thumbnail" src="/imgs/{{$evento->image}}"></img>
			</div>
			<br/>
			<div class="form-group">
				<select id="horario" name="id_horario" class="form-control">
					<option value="0">(Seleccione su horario)</option>
					@foreach($horarios as $horario)
						<option value="{{$horario->id}}">{{$horario->hora}}</option>
					@endforeach
				</select>
			</div>
		</div>
		<div class="secciones">
			<div id="seleccionados" class="panel panel-default">
				<div class="panel-heading">Asientos seleccionados.<button type="button" class="close" id="quitar_asientos" title="Quitar Asientos" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>
				<ul class="list-group" id="asientos_seleccionados"></ul>
			</div>
			<div id="precio_div" class="panel panel-default">
				<label>Total MN: $</label><label id="costo"></label>
			</div>
			<div id="botones_div" class="panel panel-default">
				<a href="/evento/{{$evento->id}}" class="btn btn-default">Regresar <span class="glyphicon glyphicon-arrow-left"></span></a>
				<span>&nbsp;&nbsp;</span>
				<button type="submit" class="selecciones btn btn-primary">Comprar <span class="glyphicon glyphicon-shopping-cart"></span></button>
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
</form>
<script type="text/javascript">
	$(document).on('ready', function(){
		$('#horario').on('change',pintarEscenario);
		$('#quitar_asientos').on('click', quitarAsientos);
	});

	function quitarAsientos(){
		$('#asientos_seleccionados').html('');
		$('.seleccionado').removeClass('seleccionado');
	}

	function pintarEscenario(){
		if($('#horario').val() == 0)
			$('#teatro').html('');
		else{
			$.ajax({
				type: "POST",
				url: "/escenario",
				data: {
					id_horario: $('#horario').val(),
					id_evento: $('#id_evento').val(),
					_token: $('#_token').val()
				},
				dataType: "json",
				async: true,
				success: function(json){
					$('#teatro').html(json.escenario);
					$('.asiento').on('click', seleccionarAsiento);
				}
			});
		}
	}

	function seleccionarAsiento(){
		var asiento = '';
		var html = '';

		if(!$(this).hasClass('reservado')){	
			if($(this).hasClass('seleccionado')){
				asiento = $(this).find('.asiento_selected:first').val();
				$(this).removeClass('seleccionado');
				$('#asiento-' + asiento).parent().fadeOut();
				$('#asiento-' + asiento).parent().remove();
			}else{
				asiento = $(this).find('.asiento_selected:first').val();
				$(this).addClass('seleccionado');
				html = '<li class="list-group-item"><label>' + asiento + '</label><input type="hidden" class="asiento_clase" name="asientos[]" id="asiento-' + asiento + '" value="' + asiento + '"/><button type="button" class="close quitar_asiento" title="Quitar Asiento" aria-label="Close"><span aria-hidden="true">&times;</span></button></li>';
				$('#asientos_seleccionados').append(html);
				$('.quitar_asiento').on('click', quitarAsiento);
			}
		}
	}

	function quitarAsiento(){
		var asiento = $(this).parent().find('.asiento_clase:first').val();
		$(this).parent().remove();
		$('#' + asiento).parent().removeClass('seleccionado');
	}
</script>
@stop
