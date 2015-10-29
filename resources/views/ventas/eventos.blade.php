@extends('ventas.index')

@section('contenedor')
<h2 id="cabezera">Cartelera Del Mes De {{$meses[date('m')]}}.</h2>
<section class="secciones" id="oeste">
	<a class="twitter-timeline" href="https://twitter.com/firulaiis99" data-widget-id="656553409223352320">Tweets por el @firulaiis99.</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</section>
<div id="centro" class="lista_eventos secciones panel panel-default">
	@foreach($eventos as $evento)
		<div class="listado_eventos panel-body">
			<a href="/evento/{{$evento->id}}">
				<img src="/imgs/{{$evento->image}}" class="img-thumbnail img_eventos" title="{{$evento->artista}}"></img>
			</a>
			<a href="/evento/{{$evento->id}}" class="btn btn-default">Reservar&nbsp;&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>
	@endforeach
	<hr/>
	<div class="lista_eventos paginador">
	{!!$eventos->render()!!}
	</div>
</div>
<section id="este" class="secciones"></section>
@stop