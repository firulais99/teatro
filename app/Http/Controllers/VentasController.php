<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Eventos;

class VentasController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    private $meses = array(
            '01' => 'Enero',
            '02' => 'Febrero',
            '03' => 'Marzo',
            '04' => 'Abril',
            '05' => 'Mayo',
            '06' => 'Junio',
            '07' => 'Julio',
            '08' => 'Agosto',
            '09' => 'Septiembre',
            '10' => 'Octubre',
            '11' => 'Novienbre',
            '12' => 'Diciembre'
    );

    public function index(){
    	$meses = $this->meses;
        $eventos = Eventos::getEventosMes()->paginate(8);
        $titulo = 'Lista de Eventos';
        return view("ventas.eventos", compact('eventos', 'titulo', 'meses'));
    }

    public function verEvento($id_evento){
        $meses = $this->meses;
    	$evento = Eventos::getEvento($id_evento);
    	$horarios_evento = Eventos::getHorariosEvento($id_evento);
    	$titulo = $evento->nombre;
    	return view('ventas.evento', compact('evento', 'horarios_evento', 'titulo', 'meses'));
    }

    public function reservarAsientos($id_evento){
    	$evento = Eventos::getEvento($id_evento);
    	$horarios = Eventos::getHorariosEvento($id_evento);
        $titulo = $evento->nombre;
    	$titulo = 'Seleccion de asientos';
        return view('ventas.seleccion_asientos', compact('evento', 'horarios', 'id_evento', 'titulo'));
    }

    public function generarEcenario(Request $request){
    	$seccion1 = array(
    		array('BB', array(0,0,0,0,0,0,0,0,0,0,0,0)),
    		array('AA', array(0,0,0,0,0,0,0,32,31,30,29,0)),
    		array('Z', array(0,0,0,0,0,41,40,39,38,37,36,0)),
    		array('Y', array(0,0,0,46,45,44,43,42,41,40,39,38)),
    		array('X', array(50,49,48,47,46,45,44,43,42,41,40,39)),
    		array('W', array(48,47,46,45,44,43,42,41,40,39,38,37)),
    		array('V', array(0,0,0,0,0,0,0,0,0,0,0,0))
    	);
    	$seccion2 = array(
    		array('BB', array(0,0,0,24,23,22,21,20,19,18,17,16,15,14,13,12,11,10,9,8,7,6,5,4,3,2,1,0)),
    		array('AA', array(0,0,0,28,27,26,25,24,23,22,21,20,19,18,17,16,15,14,13,12,11,10,9,8,7,6,5,0)),
    		array('Z', array(35,34,33,32,31,30,29,28,27,26,25,24,23,22,21,20,19,18,17,16,15,14,13,12,11,10,9,8)),
    		array('Y', array(0,37,36,35,34,33,32,31,30,29,28,27,26,25,24,23,22,21,20,19,18,17,16,15,14,13,12,11)),
    		array('X', array(0,38,37,36,35,34,33,32,31,30,29,28,27,26,25,24,23,22,21,20,19,18,17,16,15,14,13,0)),
    		array('W', array(0,0,36,35,34,33,32,31,30,29,28,27,26,25,24,23,22,21,20,19,18,17,16,15,14,13,0,0)),
    		array('V', array(0,0,22,21,20,19,18,17,16,15,14,13,12,11,10,9,8,7,6,5,4,3,2,1,0,0,0,0))
    	);
    	$seccion3 = array(
    		array('BB', array(0,0,0,0,0,0,0,0,0,0,0,0)),
    		array('AA', array(0,0,0,4,3,2,1,0,0,0,0,0)),
    		array('Z', array(0,0,7,6,5,4,3,2,1,0,0,0)),
    		array('Y', array(0,10,9,8,7,6,5,4,3,2,1,0)),
    		array('X', array(12,11,10,9,8,7,6,5,4,3,2,1)),
    		array('W', array(12,11,10,9,8,7,6,5,4,3,2,1)),
    		array('V', array(0,0,0,0,0,0,0,0,0,0,0,0))
    	);
    	$seccion4 = array(
    		array('U', array(0,0,0,0,0,0,0,0,0,0,0)),
    		array('T', array(0,43,42,41,40,39,38,37,36,35,34)),
    		array('S', array(0,42,41,40,39,38,37,36,35,34,33)),
    		array('R', array(0,41,40,39,38,37,36,35,34,33,32)),
    		array('Q', array(0,40,39,38,37,36,35,34,33,32,31)),
    		array('P', array(0,40,39,38,37,36,35,34,33,32,31)),
    		array('O', array(0,39,38,37,36,35,34,33,32,31,30)),
    		array('N', array(38,37,36,35,34,33,32,31,30,29,28))
    	);
    	$seccion5 = array(
    		array('U', array(24,23,22,21,20,19,18,17,16,15,14,13,12,11,10,9,8,7,6,5,4,3,2,1)),
    		array('T', array(0,0,33,32,31,30,29,28,27,26,25,24,23,22,21,20,19,18,17,16,15,14,13,0)),
    		array('S', array(0,0,32,31,30,29,28,27,26,25,24,23,22,21,20,19,18,17,16,15,14,13,0,0)),
    		array('R', array(0,0,31,30,29,28,27,26,25,24,23,22,21,20,19,18,17,16,15,14,13,0,0,0)),
    		array('Q', array(0,0,0,30,29,28,27,26,25,24,23,22,21,20,19,18,17,16,15,14,13,0,0,0)),
    		array('P', array(0,0,0,0,30,29,28,27,26,25,24,23,22,21,20,19,18,17,16,15,14,0,0,0)),
    		array('O', array(0,0,0,0,29,28,27,26,25,24,23,22,21,20,19,18,17,16,15,14,0,0,0,0)),
    		array('N', array(0,0,0,0,027,26,25,24,23,22,21,20,19,18,17,16,15,14,0,0,0,0,0))
    	);
    	$seccion6 = array(
    		array('U', array(0,0,0,0,0,0,0,0,0,0,0,0,0)),
    		array('T', array(12,11,10,9,8,7,6,5,4,3,2,1,0)),
    		array('S', array(12,11,10,9,8,7,6,5,4,3,2,1,0)),
    		array('R', array(12,11,10,9,8,7,6,5,4,3,2,1,0)),
    		array('Q', array(12,11,10,9,8,7,6,5,4,3,2,1,0)),
    		array('P', array(13,12,11,10,9,8,7,6,5,4,3,2,1)),
    		array('O', array(13,12,11,10,9,8,7,6,5,4,3,2,1)),
    		array('N', array(13,12,11,10,9,8,7,6,5,4,3,2,1))
    	);
    	$asientos_reservados = Eventos::getAsientosReservados($request->input($id_evento));
    	$asientos = '<table>
    					<tr>
    						<td>' . $this->generarSeccion($asientos_reservados, $seccion1) . '</td>
    						<td>' . $this->generarNombreFila($seccion1) . '</td>
    						<td>' . $this->generarSeccion($asientos_reservados, $seccion2) . '</td>
    						<td>' . $this->generarNombreFila($seccion2) . '</td>
    						<td>' . $this->generarSeccion($asientos_reservados, $seccion3) . '</td>
    					</tr>
    					<tr>
    						<td colspan="5"></td>
    					</tr>
    					<tr>
    						<td>' . $this->generarSeccion($asientos_reservados, $seccion4) . '</td>
    						<td>' . $this->generarNombreFila($seccion4) . '</td>
    						<td>' . $this->generarSeccion($asientos_reservados, $seccion5) . '</td>
    						<td>' . $this->generarNombreFila($seccion5) . '</td>
    						<td>' . $this->generarSeccion($asientos_reservados, $seccion6) . '</td>
    					</tr>
    				</table>';

    	return response()->json(['escenario' => $asientos]);
    }

    public function generarNombreFila($seccion){
    	$tabla = '<table>';

    	foreach($seccion as $fila)
    		$tabla .= '<tr><td><strong>' . $fila[0] . '</strong></td></tr>';

    	$tabla .= '</table>';
    	return $tabla;
    }

    public function generarSeccion($asientos_reservados, $seccion){
    	$seccion = '<table>';
    	$size = 0;

    	foreach($seccion as $fila){
    		$size = count($fila[1]);
    		$seccion .= '<tr>';

    		for($i = 0; $i < $size; $i++){
    			$seccion = '<td>';

    			foreach($asientos_reservados as $reservado)
    				if(strcmp($recervado->fila, $fila[0]) == 0 && strcmp($recervado->numero, $fila[1][$i]) == 0)
    					$seccion .= '<div class="reservado">';
    				else
    					$seccion .= '<div class="libre">';

    			$seccion .= '<input type="hidden" id="' . $recervado->fila . '-' . $recervado->numero . ' " name="' . $recervado->fila . '-' . $recervado->numero . '" value="' . $recervado->fila . '-' . $recervado->numero . '"/></div></td>';
    		}

    		$seccion .= '</tr>';
    	}

    	$seccion .= '</table>';
    	return $seccion;
    }

    public function insercionesDatos(){
        $query = "insert into Teatros (nombre, domicilio, telefono, email, municipio) values('Cholitos theater', 'Schwarzstrasse 99', '7232323', 'cholitos_theater@cholitos.com', 'koeln')";
        \DB::statement($query);
        $query = "insert into Eventos (id_teatro, nombre, sinopsis, elenco, fecha, artista, image) values(1, 'Enrique Bunbury Unplugged', 'asfasfsdfsadfadfadsfasdfasdfasdfasdfsafasdfasdfasdfasdfasdfasdfasdfasdfadfasdfasdfasdfadfasdfasdfasdfasdfasdFasfasfsdfsadfadfadsfasdfasdfasdfasdfsafasdfasdfasdfasdfasdfasdfasdfasdfadfasdfasdfasdfadfasdfasdfasdfasdfasdF', 'Enrique Bunbury', '2015-10-09', 'Enrique Bunbury', 'bunbury.jpg')";

        for($i = 0; $i < 30; $i++)
            \DB::statement($query);

        $query = "insert into Horarios (hora) values('17:00:00')";
        \DB::statement($query);
       
        for($i = 0; $i < 30; $i++){
        	$query = "insert into Horarios_evento (id_evento, id_horario, fecha) values(" . ($i + 1) . ", 1, '2015-10-09')";
            \DB::statement($query);
        }
    }
}
