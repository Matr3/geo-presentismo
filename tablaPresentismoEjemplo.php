<?php
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
$query="SELECT * FROM gpscliente1 Order By id DESC";
//$sql = "SELECT * FROM gpscliente1 Order By fecha DESC WHERE fecha=NOW()";
//$resObj=$conexion->query($sql);

///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['gpscliente1']))
{
	$q=$conexion->real_escape_string($_POST['gpscliente1']);
	$query="SELECT * FROM gpscliente1 WHERE 
		id LIKE '%".$q."%' OR
		obj LIKE '%".$q."%' OR
		coord LIKE '%".$q."%' OR
		vig LIKE '%".$q."%' OR
		fecha LIKE '%".$q."%' OR
		hora LIKE '%".$q."%'";
}
$resObj=$conexion->query($query);
if ($resObj->num_rows > 0)
{
	$tabla.= '<table class="table" style="font-size:12px; margin-top:-1%;">
		<tr class="active">
                                        <th>Id</th>
                                        <th>Objetivo</th>
					<th>Coordinador</th>
					<th>Vigiladores</th>
					<th>Fecha</th>
					<th>Hora</th>
				</tr>';

				while ($filaNov = $resObj->fetch_array(MYSQLI_BOTH))
				{
					$tabla.=
                                          '<tr>
                                                 <td>'.$filaNov['id'].'</td>
                                                 <td>'.$filaNov['obj'].'</td>
						 <td>'.$filaNov['coord'].'</td>
						 <td>'.$filaNov['vig'].'</td>
						 <td>'.$filaNov['fecha'].'</td>
						 <td>'.$filaNov['hora'].'</td>
						 </tr>';
				}
				$tabla.='</table>';
} else{
		$tabla="No se encontraron coincidencias con sus criterios de búsqueda.";
	}


echo $tabla;



?>