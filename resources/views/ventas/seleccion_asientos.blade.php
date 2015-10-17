<div id="contenedor">
	<div id="left"></div>
	<div id="right">
		<div id="teatro">
			<table>
				<tr>
					<td>
						<table>
							@foreach($seccion1 as $fila)
								<tr>
									@for($i = 0; $i < count($fila[1]); $i++)
										@if($fila[1][$i] != 0)
											<td>
											@foreach($asientos_reservados as $reservado)
												@if(strcmp($reservado->fila, $fila[0]) == 0 && strcmp($fila[1][$i], $reserado->numero) == 0)
													<div class="reservado">
													<?php break; ?>
												@else
													<div class="libre">
												@endif

											@endforeach
												{{$fila[1][$i]}}
												<input type="hidden" id="{{$fila[0]}}-{{$fila[1][$i]}}" value="{{$fila[0]}}-{{$fila[1][$i]}}">
												</div>
											</td>
										@else
											<td></td>
										@endif
									@endfor
								</tr>
							@endforeach
						</table>
					</td>
					<td>
						<table>
							@foreach($seccion1 as $fila)
								<strong>{{$fila[0]}}</strong>
							@endforeach
						</table>
					</td>
					<td>
						<table>
							@foreach($seccion2 as $fila)
								<tr>
									@for($i = 0; $i < count($fila[1]); $i++)
										@if($fila[1][$i] != 0)
											<td>
											@foreach($asientos_reservados as $reservado)
												@if(strcmp($reservado->fila, $fila[0]) == 0 && strcmp($fila[1][$i], $reserado->numero) == 0)
													<div class="reservado">
													<?php break; ?>
												@else
													<div class="libre">
												@endif

											@endforeach
												{{$fila[1][$i]}}
												<input type="hidden" id="{{$fila[0]}}-{{$fila[1][$i]}}" value="{{$fila[0]}}-{{$fila[1][$i]}}">
												</div>
											</td>
										@else
											<td></td>
										@endif
									@endfor
								</tr>
							@endforeach
						</table>
					</td>
					<td>
						<table>
							@foreach($seccion2 as $fila)
								<strong>{{$fila[0]}}</strong>
							@endforeach
						</table>
					</td>
					<td>
						<table>
							@foreach($seccion3 as $fila)
								<tr>
									@for($i = 0; $i < count($fila[1]); $i++)
										@if($fila[1][$i] != 0)
											<td>
											@foreach($asientos_reservados as $reservado)
												@if(strcmp($reservado->fila, $fila[0]) == 0 && strcmp($fila[1][$i], $reserado->numero) == 0)
													<div class="reservado">
													<?php break; ?>
												@else
													<div class="libre">
												@endif

											@endforeach
												{{$fila[1][$i]}}
												<input type="hidden" id="{{$fila[0]}}-{{$fila[1][$i]}}" value="{{$fila[0]}}-{{$fila[1][$i]}}">
												</div>
											</td>
										@else
											<td></td>
										@endif
									@endfor
								</tr>
							@endforeach
						</table>
					</td>
				</tr>
				<tr>
					<td colspan="5"></td>
				</tr>
				<tr>
					<td>
						<table>
							@foreach($seccion4 as $fila)
								<tr>
									@for($i = 0; $i < count($fila[1]); $i++)
										@if($fila[1][$i] != 0)
											<td>
											@foreach($asientos_reservados as $reservado)
												@if(strcmp($reservado->fila, $fila[0]) == 0 && strcmp($fila[1][$i], $reserado->numero) == 0)
													<div class="reservado">
													<?php break; ?>
												@else
													<div class="libre">
												@endif

											@endforeach
												{{$fila[1][$i]}}
												<input type="hidden" id="{{$fila[0]}}-{{$fila[1][$i]}}" value="{{$fila[0]}}-{{$fila[1][$i]}}">
												</div>
											</td>
										@else
											<td></td>
										@endif
									@endfor
								</tr>
							@endforeach
						</table>
					</td>
					<td>
						<table>
							@foreach($seccion4 as $fila)
								<strong>{{$fila[0]}}</strong>
							@endforeach
						</table>
					</td>
					<td>
						<table>
							@foreach($seccion5 as $fila)
								<tr>
									@for($i = 0; $i < count($fila[1]); $i++)
										@if($fila[1][$i] != 0)
											<td>
											@foreach($asientos_reservados as $reservado)
												@if(strcmp($reservado->fila, $fila[0]) == 0 && strcmp($fila[1][$i], $reserado->numero) == 0)
													<div class="reservado">
													<?php break; ?>
												@else
													<div class="libre">
												@endif

											@endforeach
												{{$fila[1][$i]}}
												<input type="hidden" id="{{$fila[0]}}-{{$fila[1][$i]}}" value="{{$fila[0]}}-{{$fila[1][$i]}}">
												</div>
											</td>
										@else
											<td></td>
										@endif
									@endfor
								</tr>
							@endforeach
						</table>
					</td>
					<td>
						<table>
							@foreach($seccion5 as $fila)
								<strong>{{$fila[0]}}</strong>
							@endforeach
						</table>
					</td>
					<td>
						<table>
							@foreach($seccion6 as $fila)
								<tr>
									@for($i = 0; $i < count($fila[1]); $i++)
										@if($fila[1][$i] != 0)
											<td>
											@foreach($asientos_reservados as $reservado)
												@if(strcmp($reservado->fila, $fila[0]) == 0 && strcmp($fila[1][$i], $reserado->numero) == 0)
													<div class="reservado">
													<?php break; ?>
												@else
													<div class="libre">
												@endif

											@endforeach
												{{$fila[1][$i]}}
												<input type="hidden" id="{{$fila[0]}}-{{$fila[1][$i]}}" value="{{$fila[0]}}-{{$fila[1][$i]}}">
												</div>
											</td>
										@else
											<td></td>
										@endif
									@endfor
								</tr>
							@endforeach
						</table>
					</td>
				</tr>
			</table>
		</div>
		<div><label>Ecenario</label></div>
	</div>
</div>