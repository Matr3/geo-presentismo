<?php
	
	session_start();
	
	if(!isset($_SESSION['id'])){
		header("Location: index.php");
	}
	
	$nombre = $_SESSION['nombre'];
	$tipo_usuario = $_SESSION['tipo_usuario'];
		
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        
        <title>GeoSolucionar.</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        
<script type="text/javascript">
	function HoraActual(hora, minuto, segundo){
		segundo = segundo + 1;
		if(segundo == 60) {
			minuto = minuto + 1;
			segundo = 0;
			if(minuto == 60) {
				minuto = 0;
				hora = hora + 1;
				if(hora == 24) {
					hora = 0;
				}
			}
		}
		if(hora < 10) hora = '0' + hora;
		if(minuto < 10) minuto = '0' + minuto;
		if(segundo < 10) segundo = '0' + segundo;
		HoraCompleta= hora + " : " + minuto + " : " + segundo;
		document.getElementById('contenedor_reloj').innerHTML = HoraCompleta;
		setTimeout("HoraActual("+hora+", "+minuto+", "+segundo+")", 1000);
	} 
	</script>  



	</head>
    <body class="sb-nav-fixed" onload="HoraActual(<?php echo date("H").", ".date("i").", ".date("s"); ?>)">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="principal.php">GeoSolucionar</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button><!-- Navbar Search-->
            <!--<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
				<input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
				<div class="input-group-append">
				<button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
				</div>
                </div>
			</form>-->
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
               <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $nombre; ?><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Configuración</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Salir</a>
					</div>
				</li>
			</ul>
		</nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="principal.php"><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>Dashboard</a>
							
							<?php if($tipo_usuario == 1) { ?>
								
								
										
							<?php } ?>
							
							<div class="sb-sidenav-menu-heading">Planillas</div>
						<a class="nav-link" href="principal_novedades.php"><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>Novedades On Line</a>
                                                <a class="nav-link" href="principal_prescoord.php"><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>Presentismo Coord. </a>
                                                <a class="nav-link" href="principal_presentismo.php"><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>Presentismo</a>
                                                        <div class="sb-sidenav-menu-heading">Ingresar Datos</div>
                                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Novedad On Line</button>
                                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Presentismo Coord.</button>
                                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Presentismo</button>
                                                        <div class="sb-sidenav-menu-heading">Modificar Datos</div>
                                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal6">Agregar Coord.</button>
                                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal5">Agregar Obj.</button>
                                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal7">Modificar Obj. Coord.</button>
                                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Turnos de Obj.</button>
                                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal4">Crear Geocerca</button>

					</div>
                    </div>
                    <div class="sb-sidenav-footer">
<div id="contenedor_reloj">

</div>
                        <div class="small">Logged in as:</div>
                        Start Geosolc
                    </div>
				</nav>
			</div>
            <div id="layoutSidenav_content">
                <main>
<table class="table" height="800px">
<tr>
<td class="table_cell"><iframe width="100%" height="100%" src="consulta_instantanea.php" allowfullscreen></iframe></td>
</tr>
</table>
<iframe frameBorder="0" height="100px" width="500px" src="hora.php"></iframe>

                                               <div id="myModal" class="modal fade" role="dialog">
                                                     <div class="modal-dialog">
                                                          <div class="modal-content">
                                                               <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">Novedad On Line</h4>
                                                               </div>
                                                               <div class="modal-body">
                                                                        <div class="group">
                                                                           <form action="logica/guardar.php" method="POST">
                                                                           <h2><em>Novedades On line</em></h2>  
                                                                           <div class="form-group"><div class="casilla">
                                                                           <label for="fecha">Fecha <span><em>(requerido)</em></span></label>
                                                                           <input type="date" name="fecha" class="form-input" required/> 
                                                                           </div></div>
                                                                           <div class="form-group"><div class="casilla">
                                                                           <label for="hora">Hora <span><em>(requerido)</em></span></label>
                                                                           <input type="time" name="hora" class="form-input" required/> 
                                                                           </div></div> 
                                                                           <div class="form-group"><div class="casilla">
                                                                           <label for="coord">Coordinador</label>
                                                                           <select name="coord">
                                                                                  <option value="0">Seleccione:</option>
                                                                                  <?php
                                                                                  $mysqli = new mysqli('localhost', 'c2300479_coord', 'Rolling2020', 'c2300479_coord'); 
                                                                                  $query = $mysqli->query("SELECT * FROM coordinadores");
                                                                                  while ($valores=mysqli_fetch_array($query)) {
                                                                                  echo'<option value="'.$valores[coordinador_name].'">'.$valores[coordinador_name].'</option>';
                                                                                  }
                                                                                  ?>
                                                                           </select>
                                                                           </div></div> 
                                                                           <div class="form-group"><div class="casilla">
                                                                           <label for="obj">Objetivo</label>
                                                                           <select name="obj">
                                                                                  <option value="0">Seleccione:</option>
                                                                                  <?php
                                                                                  $mysqli = new mysqli('localhost', 'c2300479_coord', 'Rolling2020', 'c2300479_coord'); 
                                                                                  $query = $mysqli->query("SELECT * FROM objetivo");
                                                                                  while ($valores=mysqli_fetch_array($query)) {
                                                                                  echo'<option value="'.$valores[servicio_name].'">'.$valores[servicio_name].'</option>';
                                                                                  }
                                                                                  ?>
                                                                           </select>
                                                                           </div></div> 
                                                                           <div class="form-group"><div class="casilla">
                                                                           <label for="coord">Novedad</label>
                                                                           <textarea type="text" name="nov" rows="6" col="250" placeholder="Escriba Novedad" style="width: 100%"></textarea>
                                                                           </div> </div>     

                                                               <center> <input class="form-btn" name="submit" type="submit" value="Guardar" /></center>
                                                               </p>
                                                               </form>
                                                               </div>
                                                               </div>
                                                               <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                               </div>
                                                           </div>

                                                      </div>
                                                </div>


                                                <div id="myModal1" class="modal fade" role="dialog">
                                                     <div class="modal-dialog">
                                                          <div class="modal-content">
                                                               <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">Presentismo Coord.</h4>
                                                               </div>
                                                               <div class="modal-body">
                                                                    <div class="group">
                                                                           <form action="logica/guardarPC.php" method="POST">
                                                                           <h2><em>Recorrida de Coordinador</em></h2>  
                                                                           <div class="form-group"><div class="casilla">
                                                                           <label for="fecha">Fecha <span><em>(requerido)</em></span></label>
                                                                           <input type="date" name="fecha" class="form-input" required/>  
                                                                           </div></div>
                                                                           <div class="form-group"><div class="casilla">
                                                                           <label for="hora">Hora <span><em>(requerido)</em></span></label>
                                                                           <input type="time" name="hora" class="form-input" required/> 
                                                                           </div></div> 
                                                                           <div class="form-group"><div class="casilla">
                                                                           <label for="coord">Coordinador</label>
                                                                           <select name="coord">
                                                                                  <option value="0">Seleccione:</option>
                                                                                  <?php
                                                                                  $mysqli = new mysqli('localhost', 'c2300479_coord', 'Rolling2020', 'c2300479_coord'); 
                                                                                  $query = $mysqli->query("SELECT * FROM coordinadores");
                                                                                  while ($valores=mysqli_fetch_array($query)) {
                                                                                  echo'<option value="'.$valores[coordinador_name].'">'.$valores[coordinador_name].'</option>';
                                                                                  }
                                                                                  ?>
                                                                           </select>
                                                                           </div></div> 
                                                                           <div class="form-group"><div class="casilla">
                                                                           <label for="obj">Objetivo</label>
                                                                           <select name="obj">
                                                                                  <option value="0">Seleccione:</option>
                                                                                  <?php
                                                                                  $mysqli = new mysqli('localhost', 'c2300479_coord', 'Rolling2020', 'c2300479_coord'); 
                                                                                  $query = $mysqli->query("SELECT * FROM objetivo");
                                                                                  while ($valores=mysqli_fetch_array($query)) {
                                                                                  echo'<option value="'.$valores[servicio_name].'">'.$valores[servicio_name].'</option>';
                                                                                  }
                                                                                  ?>
                                                                           </select>
                                                                           </div></div> 
                                                                               

                                                               <center> <input class="form-btn" name="submit" type="submit" value="Guardar" /></center>
                                                               </p>
                                                               </form>
                                                               </div>
                                                               </div>
                                                               <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                               </div>
                                                           </div>

                                                      </div>
                                                </div>
                                               <div id="myModal2" class="modal fade" role="dialog">
                                                     <div class="modal-dialog">
                                                          <div class="modal-content">
                                                               <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">Presentismo</h4>
                                                               </div>
                                                               <div class="modal-body">
                                                                    <div class="group">
                                                                           <form action="logica/guardarPV.php" method="POST">
                                                                           <h2><em>Presentismo</em></h2>  
                                                                           <div class="form-group"><div class="casilla">
                                                                           <label for="fecha">Fecha <span><em>(requerido)</em></span></label>
                                                                           <input type="date" name="fecha" class="form-input" required/>  
                                                                           </div></div>
                                                                           <div class="form-group"><div class="casilla">
                                                                           <label for="hora">Hora <span><em>(requerido)</em></span></label>
                                                                           <input type="time" name="hora" class="form-input" required/> 
                                                                           </div></div> 
                                                                           <div class="form-group"><div class="casilla">
                                                                           <label for="coord">Coordinador</label>
                                                                           <select name="coord">
                                                                                  <option value="0">Seleccione:</option>
                                                                                  <?php
                                                                                  $mysqli = new mysqli('localhost', 'c2300479_coord', 'Rolling2020', 'c2300479_coord'); 
                                                                                  $query = $mysqli->query("SELECT * FROM coordinadores");
                                                                                  while ($valores=mysqli_fetch_array($query)) {
                                                                                  echo'<option value="'.$valores[coordinador_name].'">'.$valores[coordinador_name].'</option>';
                                                                                  }
                                                                                  ?>
                                                                           </select>
                                                                           </div></div> 
                                                                           <div class="form-group"><div class="casilla">
                                                                           <label for="obj">Objetivo</label>
                                                                           <select name="obj">
                                                                                  <option value="0">Seleccione:</option>
                                                                                  <?php
                                                                                  $mysqli = new mysqli('localhost', 'c2300479_coord', 'Rolling2020', 'c2300479_coord'); 
                                                                                  $query = $mysqli->query("SELECT * FROM objetivo");
                                                                                  while ($valores=mysqli_fetch_array($query)) {
                                                                                  echo'<option value="'.$valores[servicio_name].'">'.$valores[servicio_name].'</option>';
                                                                                  }
                                                                                  ?>
                                                                           </select>
                                                                           </div></div> 
                                                                           <div class="form-group"><div class="casilla">
                                                                           <label for="vig">Presentismo del Vig.</label>
                                                                           <textarea type="text" name="vig" rows="6" col="250" placeholder="Escriba Apellido y nombre de los Vigiladores." style="width: 100%"></textarea>
                                                                           </div> </div>     

                                                               <center> <input class="form-btn" name="submit" type="submit" value="Guardar" /></center>
                                                               </p>
                                                               </form>
                                                               </div>
                                                               </div>
                                                               <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                               </div>
                                                           </div>

                                                      </div>
                                                </div>
                                                <div id="myModal3" class="modal fade" role="dialog">
                                                     <div class="modal-dialog">
                                                          <div class="modal-content">
                                                               <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">Horario de Obj.</h4>
                                                               </div>
                                                               <div class="modal-body">
                                                                    <div class="group">
                                                                           <form action="logica/guardarHO1.php" method="POST">
                                                                           <h2><em>Turnos de Objetivo</em></h2>
                                                                           <div class="form-group"><div class="casilla">
                                                                           <label for="servicio_name">Objetivo</label>
                                                                           <select name="servicio_name">
                                                                                  <option value="0">Seleccione:</option>
                                                                                  <?php
                                                                                  $mysqli = new mysqli('localhost', 'c2300479_coord', 'Rolling2020', 'c2300479_coord'); 
                                                                                  $query = $mysqli->query("SELECT * FROM objetivo");
                                                                                  while ($valores=mysqli_fetch_array($query)) {
                                                                                  echo'<option value="'.$valores[servicio_name].'">'.$valores[servicio_name].'</option>';
                                                                                  }
                                                                                  ?>
                                                                           </select>
                                                                           </div></div>
                                                                           <div class="form-group"><div class="casilla">
                                                                           <label for="L"> Lu <input type="checkbox" name="L[]" value="L" /></label>
                                                                           <label for="L1"> T1 </label>
                                                                           <input type="time" name="L1" class="form-input"/>
                                                                           <label for="L2"> T2 </label>
                                                                           <input type="time" name="L2" class="form-input"/>
                                                                           <label for="L3"> T3 </label>
                                                                           <input type="time" name="L3" class="form-input"/> 
                                                                           </div></div>
                                                                           <div class="form-group"><div class="casilla">
                                                                           <label for="M"> Ma <input type="checkbox" name="M[]" value="M" /></label>
                                                                           <label for="M1"> T1 </label>
                                                                           <input type="time" name="M1" class="form-input"/>
                                                                           <label for="M2"> T2 </label>
                                                                           <input type="time" name="M2" class="form-input"/>
                                                                           <label for="M3"> T3 </label>
                                                                           <input type="time" name="M3" class="form-input"/> 
                                                                           </div></div>   
                                                                           <div class="form-group"><div class="casilla">
                                                                           <label for="X"> Mi <input type="checkbox" name="X[]" value="X" /></label>
                                                                           <label for="X1"> T1 </label>
                                                                           <input type="time" name="X1" class="form-input"/>
                                                                           <label for="X2"> T2 </label>
                                                                           <input type="time" name="X2" class="form-input"/>
                                                                           <label for="X3"> T3 </label>
                                                                           <input type="time" name="X3" class="form-input"/> 
                                                                           </div></div>
                                                                           <div class="form-group"><div class="casilla">
                                                                           <label for="J"> Ju <input type="checkbox" name="J[]" value="J" /></label>
                                                                           <label for="J1"> T1 </label>
                                                                           <input type="time" name="J1" class="form-input"/>
                                                                           <label for="J2"> T2 </label>
                                                                           <input type="time" name="J2" class="form-input"/>
                                                                           <label for="J3"> T3 </label>
                                                                           <input type="time" name="J3" class="form-input"/> 
                                                                           </div></div>                                                            
                                                                           <div class="form-group"><div class="casilla">
                                                                           <label for="V"> Vi <input type="checkbox" name="V[]" value="V" /></label>
                                                                           <label for="V1"> T1 </label>
                                                                           <input type="time" name="V1" class="form-input"/>
                                                                           <label for="V2"> T2 </label>
                                                                           <input type="time" name="V2" class="form-input"/>
                                                                           <label for="V3"> T3 </label>
                                                                           <input type="time" name="V3" class="form-input"/> 
                                                                           </div></div>
                                                                           <div class="form-group"><div class="casilla">
                                                                           <label for="S"> Sa <input type="checkbox" name="S[]" value="S" /></label>
                                                                           <label for="S1"> T1 </label>
                                                                           <input type="time" name="S1" class="form-input"/>
                                                                           <label for="S2"> T2 </label>
                                                                           <input type="time" name="S2" class="form-input"/>
                                                                           <label for="S3"> T3 </label>
                                                                           <input type="time" name="S3" class="form-input"/> 
                                                                           </div></div>
                                                                           <div class="form-group"><div class="casilla">
                                                                           <label for="D"> Do <input type="checkbox" name="D[]" value="D" /></label>
                                                                           <label for="D1"> T1 </label>
                                                                           <input type="time" name="D1" class="form-input"/>
                                                                           <label for="D2"> T2 </label>
                                                                           <input type="time" name="D2" class="form-input"/>
                                                                           <label for="D3"> T3 </label>
                                                                           <input type="time" name="D3" class="form-input"/> 
                                                                           </div></div>
                                                                               

                                                               <center> <input class="form-btn" name="submit" type="submit" value="Guardar" /></center>
                                                               </p>
                                                               </form>
                                                               </div>
                                                               </div>
                                                               <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                               </div>
                                                           </div>

                                                      </div>
                                                </div>
                                                <div id="myModal4" class="modal fade" role="dialog">
                                                     <div class="modal-dialog">
                                                          <div class="modal-content">
                                                               <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">Crear Geocerca</h4>
                                                               </div>
                                                               <div class="modal-body">
                                                                    <div class="group">
                                                                           <form action="logica/guardarGD.php" method="POST">
                                                                           <h2><em>Crear Geocerca</em></h2>  

                                                                           <div class="form-group"><div class="casilla">
                                                                           <label for="nombreCliente">Nombre del Objetivo <span><em>(requerido)</em></span></label>
                                                                           <input type="text" name="nombreCliente" class="form-input" required/>  
                                                                           </div></div>
                                                                           <div class="form-group"><div class="casilla">
                                                                           <label for="direccionCliente">Direccion del Objetivo <span><em>(requerido)</em></span></label>
                                                                           <input type="text" name="direccionCliente" class="form-input" required/> 
                                                                           </div></div> 
                                                                           <div class="form-group"><div class="casilla">
                                                                           <label for="latCliente">Latitud: <span><em>(requerido)</em></span></label>
                                                                           <input type="text" name="latCliente" class="form-input" required/> 
                                                                           </div></div> 
                                                                           <div class="form-group"><div class="casilla">
                                                                           <label for="lngCliente">Longitud: <span><em>(requerido)</em></span></label>
                                                                           <input type="text" name="lngCliente" class="form-input" required/> 
                                                                           </div></div> 
                                                                           <div class="form-group"><div class="casilla">
                                                                           <label for="dist">Geocerca <span><em>(requerido)</em></span></label>
                                                                           <input type="text" name="dist" class="form-input" required/> 
                                                                           </div></div>     

                                                               <center> <input class="form-btn" name="submit" type="submit" value="Guardar" /></center>
                                                               </p>
                                                               </form>
                                                               </div>
                                                               </div>
                                                               <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                               </div>
                                                           </div>

                                                      </div>
                                                </div>
                                                <div id="myModal5" class="modal fade" role="dialog">
                                                     <div class="modal-dialog">
                                                          <div class="modal-content">
                                                               <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">Objetivo</h4>
                                                               </div>
                                                               <div class="modal-body">
                                                                    <div class="group">
                                                                           <form action="logica/guardarObj.php" method="POST">
                                                                           <h2><em>Objetivo</em></h2>  
                                                                           <div class="form-group"><div class="casilla">
                                                                           <label for="coord">Coordinador</label>
                                                                           <select name="coord">
                                                                                  <option value="0">Seleccione:</option>
                                                                                  <?php
                                                                                  $mysqli = new mysqli('localhost', 'c2300479_coord', 'Rolling2020', 'c2300479_coord'); 
                                                                                  $query = $mysqli->query("SELECT * FROM coordinadores");
                                                                                  while ($valores=mysqli_fetch_array($query)) {
                                                                                  echo'<option value="'.$valores[coordinador_name].'">'.$valores[coordinador_name].'</option>';
                                                                                  }
                                                                                  ?>
                                                                           </select>
                                                                           </div></div> 
                                                                            <div class="form-group"><div class="casilla">
                                                                           <label for="obj">Objetivo Nuevo</label>
                                                                           <textarea type="text" name="obj" rows="6" col="250" placeholder="Escriba el Nombre del Objetivo." style="width: 100%"></textarea>
                                                                           </div> </div>     

                                                               <center> <input class="form-btn" name="submit" type="submit" value="Guardar" /></center>
                                                               </p>
                                                               </form>
                                                               </div>
                                                               </div>
                                                               <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                               </div>
                                                           </div>

                                                      </div>
                                                </div>
                                               <div id="myModal6" class="modal fade" role="dialog">
                                                     <div class="modal-dialog">
                                                          <div class="modal-content">
                                                               <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">Agregar Coord.</h4>
                                                               </div>
                                                               <div class="modal-body">
                                                                    <div class="group">
                                                                           <form action="logica/guardarCoord.php" method="POST">
                                                                           <h2><em>Agregar Coordinador</em></h2>  
                                                                            <div class="form-group"><div class="casilla">
                                                                           <label for="coord">Coordinador Nuevo</label>
                                                                           <textarea type="text" name="coord" rows="6" col="250" placeholder="Escriba Coordinador." style="width: 100%"></textarea>
                                                                           </div> </div>
                                                                               

                                                               <center> <input class="form-btn" name="submit" type="submit" value="Guardar" /></center>
                                                               </p>
                                                               </form>
                                                               </div>
                                                               </div>
                                                               <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                               </div>
                                                           </div>

                                                      </div>
                                                </div>
                                                <div id="myModal7" class="modal fade" role="dialog">
                                                     <div class="modal-dialog">
                                                          <div class="modal-content">
                                                               <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">Cambiar Coord. de Objetivo</h4>
                                                               </div>
                                                               <div class="modal-body">
                                                                    <div class="group">
                                                                           <form action="logica/guardarCO.php" method="POST">
                                                                           <h2><em>Cambiar Coord. de Objetivo</em></h2>  
                                                                           <div class="form-group"><div class="casilla">
                                                                           <label for="coord">Coordinador</label>
                                                                           <select name="coord">
                                                                                  <option value="0">Seleccione:</option>
                                                                                  <?php
                                                                                  $mysqli = new mysqli('localhost', 'c2300479_coord', 'Rolling2020', 'c2300479_coord'); 
                                                                                  $query = $mysqli->query("SELECT * FROM coordinadores");
                                                                                  while ($valores=mysqli_fetch_array($query)) {
                                                                                  echo'<option value="'.$valores[coordinador_name].'">'.$valores[coordinador_name].'</option>';
                                                                                  }
                                                                                  ?>
                                                                           </select>
                                                                           </div></div> 
                                                                           <div class="form-group"><div class="casilla">
                                                                           <label for="obj">Objetivo</label>
                                                                           <select name="obj">
                                                                                  <option value="0">Seleccione:</option>
                                                                                  <?php
                                                                                  $mysqli = new mysqli('localhost', 'c2300479_coord', 'Rolling2020', 'c2300479_coord'); 
                                                                                  $query = $mysqli->query("SELECT * FROM objetivo");
                                                                                  while ($valores=mysqli_fetch_array($query)) {
                                                                                  echo'<option value="'.$valores[servicio_name].'">'.$valores[servicio_name].'</option>';
                                                                                  }
                                                                                  ?>
                                                                           </select>
                                                                           </div></div>   

                                                               <center> <input class="form-btn" name="submit" type="submit" value="Guardar" /></center>
                                                               </p>
                                                               </form>
                                                               </div>
                                                               </div>
                                                               <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                               </div>
                                                           </div>

                                                      </div>
                                                </div>

                 

				</main>
                
			</div>
		</div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
        <script src="js/peticion.js"></script>

<?php
//require('hora.php');
require('tablaPresentismoHora.php');
?>

       </body>
</html>