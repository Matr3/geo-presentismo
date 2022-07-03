<?php
header("Refresh:1");
////////////////// CONEXION A LA BASE DE DATOS ////////////////////////////////////
	$host = 'localhost';
	$usuario = 'c2300479_gpsbd';
	$contraseña = 'Rolling2020';
	$base = 'c2300479_gpsbd';

$conexion= new mysqli($host, $usuario, $contraseña, $base);
if ($conexion -> connect_errno)
{
	die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> 
		mysqli_connect_error());
}
////Inicializas las variables


$tabla="";
/////////////////////// CONSULTA A LA BASE DE DATOS ////////////////////////
$query="SELECT * FROM gps1 ORDER BY id DESC";

///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['gps1']))
{
	$q=$conexion->real_escape_string($_POST['gps1']);
	$query="SELECT * FROM gps1 WHERE 
		id LIKE '%".$q."%' OR
		fecha LIKE '%".$q."%' OR
		hora LIKE '%".$q."%' OR
		obj LIKE '%".$q."%' OR
		coord LIKE '%".$q."%'";
}

///TABLA DONDE SE DESPLIEGAN LOS REGISTROS //////////////////////////////
$resObj=$conexion->query($query);
if ($resObj->num_rows > 0)
{
	$tabla.= '<table class="table" style="font-size:12px; margin-top:-1%;">
		<tr class="active">
                                        <th>Id</th>
                                        <th>Fecha</th>
					<th>Hora</th>
					<th>Servicio</th>
					<th>Coordinador</th>
				</tr>';

				while ($filaObj = $resObj->fetch_array(MYSQLI_BOTH))
				{
					$tabla.=
					        '<tr>
                                                 <td>'.$filaObj['id'].'</td>
                                                 <td>'.$filaObj['fecha'].'</td>
						 <td>'.$filaObj['hora'].'</td>
						 <td>'.$filaObj['obj'].'</td>
						 <td>'.$filaObj['coord'].'</td>
						 </tr>';
				}
				$tabla.='</table>';
} else{
		$tabla="No se encontraron coincidencias con sus criterios de búsqueda.";
	}


echo $tabla;

setInterval(tiempoReal, 1000);


?>