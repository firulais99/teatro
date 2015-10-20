<form>
	<div id="contenedor">
		<div class="secciones" id="left">
			<div>
				<div>
					<img src="#"></img>
				</div>
				<div class="form-group">
					<select id="horario">
						<option value="0">(Seleccione su horario)</option>
						@foreach($horarios as $horario)
							<option value="{{$horario->id}}">{{$horario->hora}}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div>
				<div class="panel panel-default">
				<div class="panel-heading">Asientos seleccionados.</div>
					<ul class="list-group" id="asientos_seleccionados"></ul>
				</div>
			</div>
		</div>
		<div class="secciones" id="right">
			<div id="teatro"><div>
			<label>Ecenario</label></div>
		</div>
	</div>
</form>