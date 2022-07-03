<!DOCTYPE HTML>
<head>
	<meta http-equiv=Content-Type content="text/html; charset=utf-8">
	<title></title>
<style>
body, html { height:100%;
	margin:0;
	padding:0;
	width:100%;
	background-color:silver;
}
 
.recuadro {
	border:1px solid black;
	width:49.5%;
	display:inline-block;
	height:49.5%;
	overflow:hidden;
}
#uno{
	background-color:gray;
	}
#dos{
	background-color:gray;
	}
#tres{
	background-color:gray;
	}
#cuatro{
	background-color:gray;
	}
</style>
</head>
<body>
	<div class='recuadro' id="uno">
		<iframe width="100%" height="100%" src="consulta_novedades.php" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class='recuadro' id="dos">
		<iframe width="100%" height="100%" src="" frameborder="0" allowfullscreen></iframe>
	</div>
	<br>
	<div class='recuadro' id="tres">
		<iframe width="100%" height="100%" src="consulta_instantanea.php" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class='recuadro' id="cuatro">
		<iframe width="100%" height="100%" src="map/index.php" frameborder="0" allowfullscreen></iframe>
	</div>
</body>
</html>