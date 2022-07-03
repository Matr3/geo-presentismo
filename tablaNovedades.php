<?php
header('Content-Type: text/html; charset=ISO-8859-1');
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
$query="SELECT * FROM nov ORDER BY id DESC";


///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['nov']))
{
	$q=$conexion->real_escape_string($_POST['nov']);
	$query="SELECT * FROM nov WHERE 
		id LIKE '%".$q."%' OR
		fecha LIKE '%".$q."%' OR
		hora LIKE '%".$q."%' OR
		obj LIKE '%".$q."%' OR
		coord LIKE '%".$q."%' OR
		nov LIKE '%".$q."%'";
}
///TABLA DONDE SE DESPLIEGAN LOS REGISTROS //////////////////////////////
$resNov=$conexion->query($query);
if ($resNov->num_rows > 0)
{
	$tabla.= '<table class="table" style="font-size:12px; margin-top:-1%;">
		<tr class="active">
                                        <th>Id</th>
                                        <th>Fecha</th>
					<th>Hora</th>
					<th>Servicio</th>
					<th>Coordinador</th>
					<th>Novedad</th>
				</tr>';

				while ($filaNov = $resNov->fetch_array(MYSQLI_BOTH))
				{
					$tabla.=
                                           '<tr>
                                                 <td>'.$filaNov['id'].'</td>
                                                 <td>'.$filaNov['fecha'].'</td>
						 <td>'.$filaNov['hora'].'</td>
						 <td>'.$filaNov['obj'].'</td>
						 <td>'.$filaNov['coord'].'</td>
						 <td>'.$filaNov['nov'].'</td>
						 </tr>';
				}
				$tabla.='</table>';
} else{
		$tabla="No se encontraron coincidencias con sus criterios de búsqueda.";
	}


echo $tabla;
?>