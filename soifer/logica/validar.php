<?php
if(isset($_POST['submit'])) {
	if(empty($nombre)) {
	echo "<p class='error'>* Agrega el Nombre y Apellido </p>";
	}
	if(empty($dni)) {
	echo "<p class='error'>* Agrega el DNI </p>";
	}
	if(empty($nombre)) {
	echo "<p class='error'>* Agrega el Nombre y Apellido </p>";
	}
	if(empty($fecha)) {
	echo "<p class='error'>* Agrega el Dia de Ingreso </p>";
	}
	if(empty($hora)) {
	echo "<p class='error'>* Agrega la Hora de Ingreso</p>";
	}
	
	}
?>