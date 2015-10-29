@extends('ventas.index')

@section('contenedor')
    <form action="/compra" method="post" id="formulario">
        <div class="secciones">
            <img class="img_evento img-thumbnail" src="/imgs/{{$evento->image}}" title="{{$evento->nombre}}"></img>
        </div>
        <div id="captcha" class="secciones panel panel-default tarjeta">
            <div class="panel-heading"><h3>Introdusca los siguientes datos.</h3></div>
            <div class="secciones col-md-5">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="" placeholder="Introdusca su nombre" required/>
                </div>
                <div class="form-group">
                    <label for="numero_tarjeta">Numero de Tarjeta</label>
                    <input type="text" name="numero_tarjeta" id="numero_tarjeta" class="form-control" value="" placeholder="Introdusca el numero de su tarjeta" required/>
                </div>
            </div>
            <div class="secciones col-md-5">
                <div class="form-group">
                    <label for="email">Correo Electronico</label>
                    <input type="email" name="email" id="email" class="form-control" value="" placeholder="Introdusca su correo electronico" required/>
                </div>
                <div class="form-group">
                    <label for="codigo_seguridad">Codigo de segurdad</label>
                    <input type="password" name="codigo_seguridad" id="codigo_seguridad" class="form-control col-md-2" value="" required/>
                </div>
            </div>
            <div class="secciones col-md-5">
                <div class="form-group">
                    <label>Fecha de Vencimiento</label>
                    <br/>
                    <table width="100%" cellspacing="1" cellpadding="1">
                        <tr>
                            <td><label>Mes</label></td>
                            <td><label>A&ntilde;o</label></td>
                        </tr>
                        <tr>
                            <td>
                                <select name="mes" id="mes" class="form-control">
                                    <option value="0">Mes</option>
                                    @foreach($meses as $key => $value)
                                        <option value="{{$key}}">{{$value}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <select name="anio" id="anio" class="form-control">
                                    <option value="0">A&ntilde;o</option>
                                    @for($i = date('Y', strtotime('+ 20 year')); $i >= 2015; $i--)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="secciones col-md-5">
                    <div class="panel panel-default">
                        <div class="form-group botones_compra">
                            <a href="/escenario" class="btn btn-default">Regresar <span class="glyphicon glyphicon-arrow-left"></span></a>
                            &nbsp;|&nbsp;
                            <a href="#" id="comprar" class="btn btn-primary">Comprar <span class="glyphicon glyphicon-credit-card"></span></a>
                        </div>
                    </div>
                </div>

            </div>
            <div id="captcha2" class="g-recaptcha" data-sitekey="6Lc13Q8TAAAAALaf6bN6wJCYahdkCG1cZf4aQ3cy"></div>

        </div>
        @foreach($asientos as $asiento)
            <input type="hidden" name="asientos[]" class="asientos" value="{{$asiento}}"/>
        @endforeach
        <input type="hidden" name="id_evento" value="{{$id_evento}}"/>
        <input type="hidden" name="id_horario" value="{{$id_horario}}"/>
        <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
    </form>
    <div class="modal fade" id="myModal">                                               "
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="titulo_modal"></h4>
                </div>
                <div class="modal-body" id="contenido_modal">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar <span class="glyphicon glyphicon-remove"></span></button>
                    <button type="button" class="btn btn-primary" id="realizar_compra">Comprar <span class="glyphicon glyphicon-credit-card"></span></button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <script type="text/javascript">
        $(document).on('ready', function(){
            $('#comprar').on('click', validarCompra);
            $('#realizar_compra').on('click', realizarCompra);
        });
        function realizarCompra(){
            $('#myModal').modal('hide');
            $('#formulario').submit();
        }
        function validarCompra(){
            var validado = true;
            var mensaje = '';
            var titulo = '';

            if($('#mes').val() == 0){
                mensaje += 'Debe escoger un mes\n';
                validado = false;
            }
            if($('#anio').val() == 0){
                mensaje += 'Debe escoger un mes\n';
                validado = false;
            }
            if(validado){
                $('#titulo_modal').html('');
                $('#contenido_modal').html('');
                titulo = 'Esta seguro de realizar esta compra';
                mensaje += '<div class="panel panel-default" style="height: 350px; overflow: auto;">';
                mensaje += '<div class="panel-heading">Asientos seleccionados.</div>';
                mensaje += '<ul class="list-group"">';
                $('.asientos').each(function(){
                    mensaje += '<li class="list-group-item">' + $(this).val() + '</li>';
                });
                mensaje += '</ul>';
                mensaje += '</div>';
                $('#titulo_modal').html(titulo);
                $('#contenido_modal').html(mensaje);
                $('#myModal').modal('show');
            }else{
                alert(mensaje);
            }
        }
    </script>
@stop