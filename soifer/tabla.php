<?php 
	$conexion=mysqli_connect('localhost','root','','phpdesdecero');
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Listado de Personal</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<!-- ESTILOS -->
	
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/popup.css">
		<style type="text/css">
	body {
	background-image: url(imagen/imagen.jpg);
	text-align: center;
		}
    		</style>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">	
<!--===============================================================================================-->
<!-- SCRIPTS JS-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="js/peticion.js"></script>	
		
	
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
	
				<table width="1170" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td>&nbsp;</td>
		
      <td>&nbsp;</td>
		
      <td>&nbsp;</td>
		
    </tr>
    <tr>
      <td height="50" bgcolor="#222222"><a href="index.html">
         <button class="button" style="color: #00ad5f">| Ingresar Personal |</button>
       </a></td>
		
      <td height="50" bgcolor="#222222">
      	 <div class="button" style="color: #00ad5f">| Imprimir Lista |</div>
       </td>
		
      <td height="50" bgcolor="#222222">
		  <div class="contenedor">
		
          <button id="btn-abrir-popup" class="btn-abrir-popup" style="color: #00ad5f">| Ingresar Salida |</button>
		  

		  
		  </div>
		  
      </td>
		
    </tr>
  </tbody>
</table>

	

	<div style="background-color:#b8b8b8">			
	<section>
			<input type="text" name="busqueda" id="busqueda" placeholder="Buscar...">
		</section>

		<section id="tabla_resultado">
<!--===============================================================================================-->	
		<!-- AQUI SE DESPLEGARA NUESTRA TABLA DE CONSULTA -->
		</section

			
			</div>
		</div>
	

</div>
	</div>

<div class="overlay" id="overlay">
			<div class="popup" id="popup" >
				<a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup">X</a>
				

					<center>
                    <h3>Salida Personal</h3><hr>
                        <form  method="POST" name="form-work" action="logica/update.php">
                    
                                <fieldset>
                                
								
								
									
                                  <div class="form-group">
                                    <div class="col-md-7">
                                      <label for="id" style="color: #00ad5f">ID</label>
										<input id="id" type="number" name="id" required>
                                      <label for="salida" style="color: #00ad5f">SALIDA</label>
										<input id="salida" type="time" name="salida" required>
                                     </div> 
                                    </div>
									
								
                                  
								  
                                    <div class="form-group">
                                      <input type="submit" class="btn-submit" value="Modificar">
                                    </div>
									
									
                                </fieldset> 
                              </form><hr>
					 
			<h4>Creado por Marcelo Tremari</h4>
              </center>
			  
			</div>
			
		</div>


<!--===============================================================================================-->
<!-- SCRIPTS JS-->
		<script src="js/main.js"></script>
		<script src="js/popup.js"></script>
	

</body>
</html>