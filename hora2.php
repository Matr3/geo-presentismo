<?php
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

?>