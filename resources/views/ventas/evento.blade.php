@extends('ventas.index')

@section('contenedor')
<div class="secciones">
	<img class="img_evento img-thumbnail" src="/imgs/{{$evento->image}}" title="{{$evento->nombre}}"></img>
</div>
<div class="secciones evento_info">
	<div class="panel panel-default">
	  	<div class="panel-heading"><h2>{{$evento->nombre}}</h2></div>
	  	<div class="panel-body">
	    	{{$evento->sinopsis}}
	  	</div>
	</div>
	<div class="panel panel-default">
	  	<div class="panel-heading"><h3>Elenco</h3></div>
	  	<div class="panel-body">
	    	{{$evento->elenco}}
	  	</div>
	</div>
	<div>
		<div class="secciones">
			<div class="panel panel-default">
			  	<div class="panel-heading">Horarios</div>
			  	<ul class="list-group">
			  		@foreach($horarios_evento as $horario)
			    		<li class="list-group-item">{{date('H:i:s', strtotime($horario->hora))}} - {{date('d', strtotime($horario->fecha))}}/{{$meses[date('m', strtotime($horario->fecha))]}}/{{date('Y', strtotime($horario->fecha))}}</li>
			    	@endforeach
			  	</ul>
			</div>
		</div>
		<div class="secciones">
			<div class="panel panel-default">
			  	<div class="panel-heading">Precio</div>
			  	<ul class="list-group">
			  		<li class="list-group-item">$500 mn</li>
			  	</ul>
			</div>
		</div>
		<div id="botones_div" class="panel panel-default secciones">
			<a href="/eventos" class="btn btn-default">Regresar <span class="glyphicon glyphicon-arrow-left"></span></a>
			<span>&nbsp;&nbsp;</span>
			<a href="/reservar/{{$evento->id}}" class="selecciones btn btn-primary">Comprar <span class="glyphicon glyphicon-shopping-cart"></span></a>
		</div>
	</div>
</div>
@stop