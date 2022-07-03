<?php
    header('Content-Type: text/html; charset=ISO-8859-1');
?>

<html lang="es">

	<head>
		<title>Novedades de los Objetivos</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<link href="css/estilos.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                <script src="js/peticionNov.js"></script>
                <script type="text/javascript">
                function printDiv(divName) {
                                            var printContents = document.getElementById(divName).innerHTML;
                                            var originalContents = document.body.innerHTML;

                                            document.body.innerHTML = printContents;

                                            window.print();

                                            document.body.innerHTML = originalContents;
                                            }
                </script>  
		<script type="text/javascript">

		function tiempoReal()
		{
			var tabla = $.ajax({
				url:'tablaNovedades.php',
				dataType:'text',
				async:false
			}).responseText;
                        var tabla1 = $.ajax({
				url:'js/peticionNov.js',
				dataType:'text'
			}).responseText;

                //document.getElementById("miTabla").innerHTML = tabla;
		}

                setInterval(tiempoReal, 1000);



		</script>
		
	</head>
<div id="printableArea">
 
		<header>
			<div class="alert alert-info">
			<h3>Novedades On Line</h3>
			</div>
		</header>
<table>
<td width="500px" height="30px" align="left" style="padding-bottom: 4%; padding-left: 10%">
<section>
<input type="text" name="busqueda" id="busqueda" placeholder="Buscar...">
</section>
</td>
<td height="30px" align="right" style="padding-bottom: 4%">
<input type="button" onclick="printDiv('printableArea')" value="Imprimir" />
</td>
</table>
<section id="tabla_resultado">
<!--===============================================================================================-->	
		     <!-- AQUI SE DESPLEGARA NUESTRA TABLA DE CONSULTA -->
		    </section>
		    

		
</div>
		<footer>
		</footer>
	</body>
</html>