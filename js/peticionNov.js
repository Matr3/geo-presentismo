$(obtener_registros());

function obtener_registros(nov)
{
	$.ajax({
		url : 'tablaNovedades.php',
		type : 'POST',
		dataType : 'html',
		data : { nov: nov },
		})

	.done(function(resultado){
		$("#tabla_resultado").html(resultado);
	})
}

setInterval(obtener_registros, 1000);

$(document).on('keyup', '#busqueda', function()
{
	var valorBusqueda=$(this).val();
	if (valorBusqueda!="")
	{
		obtener_registros(valorBusqueda);
	}
	else
		{
			obtener_registros();
		}
});