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


/////////////////////// CONSULTA A LA BASE DE DATOS ////////////////////////
//$resObj=$conexion->query("SELECT * FROM gpscliente1 ORDER BY servicio_id DESC");
$sql = "SELECT * FROM objetivo LEFT JOIN present ON objetivo.servicio_name = present.present_obj;";
$resObj=$conexion->query($sql);

///TABLA DONDE SE DESPLIEGAN LOS REGISTROS //////////////////////////////
echo '<table class="table" style="font-size:12px; margin-top:-1%;">

				<tr class="active">
                                        <th>Id</th>
                                        <th>Objetivo</th>
					<th>Coordinador</th>
					<th>Presentismo</th>
					<th>Fecha</th>
					<th>Hora</th>
				</tr>';

				while ($filaObj = $resObj->fetch_array(MYSQLI_BOTH) )
				{
                                echo'<tr>
                                <td>'.$filaObj['servicio_id'].'</td>
				<td>'.$filaObj['servicio_name'].'</td>
				<td>'.$filaObj['present_coord'].'</td>
                                <td>'.$filaObj['present_pres'].'</td>
				<td>'.$filaObj['present_fecha'].'</td>
				<td>'.$filaObj['present_hora'].'</td>
                                </tr>';						 
				}
				echo '</table>';
?>