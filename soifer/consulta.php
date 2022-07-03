<?php

$host = "localhost";
$user = "root";
$clave = "";
$bd  = "phpdesdecero";

$conexion = mysqli_connect($host,$user,$clave,$bd);
if ($conexion -> connect_errno)
{
	die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
}

//////////////// VALORES INICIALES ///////////////////////

$tabla="";
$query="SELECT * FROM clientes ORDER BY id DESC LIMIT 20";


///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['clientes']))
{
	$q=$conexion->real_escape_string($_POST['clientes']);
	$query="SELECT * FROM clientes WHERE 
		id LIKE '%".$q."%' OR
		nombre LIKE '%".$q."%' OR
		dni LIKE '%".$q."%' OR
		fecha LIKE '%".$q."%' OR
		hora LIKE '%".$q."%' OR
		salida LIKE '%".$q."%'";
}

$buscarClientes=$conexion->query($query);
if ($buscarClientes->num_rows > 0)
{
	$tabla.= 
	'<table class="table">
		<tr class="bg-primary">
			<td>ID</td>
			<td>NOMBRE Y APELLIDO</td>
			<td>DNI</td>
			<td>DIA</td>
			<td>FECHA INGRESO</td>
			<td>FECHA EGRESO</td>
		</tr>';

	while($filaClientes= $buscarClientes->fetch_assoc())
	{
		$tabla.=
		'<tr>
			<td>'.$filaClientes['id'].'</td>
			<td>'.$filaClientes['nombre'].'</td>
			<td>'.$filaClientes['dni'].'</td>
			<td>'.$filaClientes['fecha'].'</td>
			<td>'.$filaClientes['hora'].'</td>
			<td>'.$filaClientes['salida'].'</td>
		 </tr>';
			
	}
	$tabla.='</table>';
	
} else
	{
		$tabla="No se encontraron coincidencias con sus criterios de búsqueda.";
	}


echo $tabla;
?>
