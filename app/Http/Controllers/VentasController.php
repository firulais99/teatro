<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Eventos;

class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(){
        return view("ventas.seccion1");
    }

    public function reservarAsientos($id_evento){
    	$evento = Eventos::getEvento($id_evento);
    	$horarios = Eventos::getHorariosEvento($id_evento);
        return view('ventas.seleccion_asiento', compact('evento', 'horarios', 'id_evento'));
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
    						<td>' . $this->pintaNombreFila($seccion1) . '</td>
    						<td>' . $this->generarSeccion($asientos_reservados, $seccion2) . '</td>
    						<td>' . $this->pintaNombreFila($seccion2) . '</td>
    						<td>' . $this->generarSeccion($asientos_reservados, $seccion3) . '</td>
    					</tr>
    					<tr>
    						<td colspan="5"></td>
    					</tr>
    					<tr>
    						<td>' . $this->generarSeccion($asientos_reservados, $seccion4) . '</td>
    						<td>' . $this->pintaNombreFila($seccion4) . '</td>
    						<td>' . $this->generarSeccion($asientos_reservados, $seccion5) . '</td>
    						<td>' . $this->pintaNombreFila($seccion5) . '</td>
    						<td>' . $this->generarSeccion($asientos_reservados, $seccion6) . '</td>
    					</tr>
    				</table>';

    	return response()->json(['ecenario' => $asientos]);
    }

    public function pintaNombreFila($seccion){
    	$tabla = '<table>';

    	foreach($seccion as $fila)
    		$tabla .= '<tr><td><strong>' . $fila[0] . '</strong></td></tr>';

    	$tabla .= '</table>';
    	return $tabla;
    }

    public function pintarSeccion($asientos_reservados, $seccion){
    	$seccion = '<table>';
    	$size = 0;

    	foreach($seccion as $fila){
    		$size = count($fila[1]);
    		$seccion .= '<tr>';

    		for($i = 0; $i < $size; $i++){
    			$seccion = '<td>';

    			foreach($asientos_reservados as $reservado){
    				if(strcmp($recervado->fila, $fila[0]) == 0 && strcmp($recervado->numero, fila[1][$i]) == 0){
    					$seccion .= '<div class="reservado">';
    				}else
    					$seccion .= '<div class="libre">';
    			}

    			$seccion .= '<input type="hidden" id="' . $recervado->fila . '-' . $recervado->numero . ' " name="' . $recervado->fila . '-' . $recervado->numero . '" value="' . $recervado->fila . '-' . $recervado->numero . '"/></div></td>';
    		}

    		$seccion .= '</tr>';
    	}

    	$seccion .= '</table>';
    	return $seccion;
    }
}
