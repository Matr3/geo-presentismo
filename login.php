<?php 
	$host = 'localhost';
	$user = 'c2300479_gslogin';
	$password = 'Rolling2020';
	$db = 'c2300479_gslogin';

	$conection = @mysqli_connect($host,$user,$password,$db);

	if(!$conection){
		die("No hay conexion: ".mysqli_connect_error());
	}

    $usu = $_POST["usu"];
    $pass = $_POST["pass"];

    $query = mysqli_query($conection,"SELECT * FROM login WHERE usu = '".$usu."' and pass = '".$pass."'");
    $conx = mysqli_num_rows($query);

    if($conx == 1){
       header("Location: index1.php");
      // echo "Bienvenido: " .$usu;

    }else if ($conx == 0){
        //header("Location: index.php");
        //echo 'El usuario o la clave son incorrectos';
        $mensaje = "Usuario o Contraseña Incorrecta";
        echo "<script>";
        echo "alert('$mensaje');";  
        echo "window.location = 'https://geosolc.com.ar/index.html'";
        echo "</script>"; 
        //header("Location: index.html");
    }

?>