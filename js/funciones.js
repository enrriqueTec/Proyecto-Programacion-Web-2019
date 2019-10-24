
function agregardatosMateria(txt_clave_tutor,txt_Nombre_tutor,txt_primerAp_tutor,txt_segundoAp_tutor,txt_gradoAcademico,txt_numero_Tutor){
cadena="txt_clave_tutor=" + txt_clave_tutor + 
			"&txt_Nombre_tutor=" + txt_Nombre_tutor +
            "&txt_primerAp_tutor=" + txt_primerAp_tutor +
            "&txt_segundoAp_tutor=" + txt_segundoAp_tutor +
            "&txt_gradoAcademico=" + txt_gradoAcademico +
			"&txt_numero_Tutor=" + txt_numero_Tutor;

	$.ajax({
		type:"POST",
		url:"php/agregarDatosMateria.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tablamaterias').load('componentes/tablamaterias.php');
				 $('#buscadorMaterias').load('componentes/buscadorMaterias.php');
				alertify.success("EL TUTOR SE HA AGREGADO CON EXITO :)");
			}else{
				alertify.error("Fallo el servNumeroControlor :(");
			}
		}
	});
}
//FUNCION UTILIZADA PAAR MOSTRAR LOS DATOS DEL ALUMNO AGRGADO Y MANDAR UN MENSAJE!!
function agregardatos(txt_Num_Control,txt_Nombre,txt_Apellido_Paterno,txt_Apellido_Materno,txt_Edad,txt_Semestre,txt_Carrera){

	nc="txt_Num_Control";
    n="txt_Nombre";
    pa="txt_Apellido_Paterno";
    sa="txt_Apellido_Materno";
    ed="txt_Edad";
    se="txt_Semestre";
    ca="txt_Carrera";
   
   
   
    cadena="txt_Num_Control=" + txt_Num_Control + 
			"&txt_Nombre=" + txt_Nombre +
			"&txt_Apellido_Paterno=" + txt_Apellido_Paterno +
			"&txt_Apellido_Materno=" + txt_Apellido_Materno +
			"&txt_Edad=" + txt_Edad +
			"&txt_Semestre=" + txt_Semestre +
			"&txt_Carrera=" + txt_Carrera;

	$.ajax({
		type:"POST",
		url:"php/agregarDatos.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				 $('#buscador').load('componentes/buscador.php');
				alertify.success("EL ALUMNO SE HA AGREGADO CON EXITO :)");
			}else{
				alertify.error("Fallo Agregar alumno :(");
			}
		}
	});

}
//EN ESTA FUNCION SE UTILIZA PARA CARGAR LOS DATOS DE LA TABLA A LAS 
//CAJAS DE TEXTO DE EL MENU EDITAR!!!
function agregaform(datos){

	d=datos.split('||');

	$('#txt_Num_Control_Modificaciones').val(d[0]);
	$('#txt_Nombre_Modificaciones').val(d[1]);
	$('#txt_Apellido_Paterno_Modificaciones').val(d[2]);
	$('#txt_Apellido_Materno_Modificaciones').val(d[3]);
	$('#txt_Edad_Modificaciones').val(d[4]);
	$('#txt_Semestre_Modificaciones').val(d[5]);
	$('#txt_Carrera_Modificaciones').val(d[6]);
	
}
//EN ESTA FUNCION SE UTLIZA PARA MODIFICAR LOS DATOS DE LOS ALUMANOS!!!
function actualizaDatos(){


	txt_Num_Control_Modificaciones=$('#txt_Num_Control_Modificaciones').val();
	txt_Nombre_Modificaciones=$('#txt_Nombre_Modificaciones').val();
	txt_Apellido_Paterno_Modificaciones=$('#txt_Apellido_Paterno_Modificaciones').val();
	txt_Apellido_Materno_Modificaciones=$('#txt_Apellido_Materno_Modificaciones').val();
	txt_Edad_Modificaciones=$('#txt_Edad_Modificaciones').val();
	txt_Semestre_Modificaciones=$('#txt_Semestre_Modificaciones').val();
	txt_Carrera_Modificaciones=$('#txt_Carrera_Modificaciones').val();

	cadena= "txt_Num_Control_Modificaciones=" + txt_Num_Control_Modificaciones +
			"&txt_Nombre_Modificaciones=" + txt_Nombre_Modificaciones + 
			"&txt_Apellido_Paterno_Modificaciones=" + txt_Apellido_Paterno_Modificaciones +
			"&txt_Apellido_Materno_Modificaciones=" + txt_Apellido_Materno_Modificaciones +
			"&txt_Edad_Modificaciones=" + txt_Edad_Modificaciones +
			"&txt_Semestre_Modificaciones=" + txt_Semestre_Modificaciones +
			"&txt_Carrera_Modificaciones=" + txt_Carrera_Modificaciones;

	$.ajax({
		type:"POST",
		url:"php/actualizaDatos.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				alertify.success("EL ALUMNO SE HA ACTUALIZADO CON EXITO :)");
			}else{
				alertify.error("FALLÓ LA ACTUALIZACIÓN :(");
			}
		}
	});

}
//ESTA FUNCION SE UTILIZA PARA MANDAR UN MENSAJE Y PREGUNTAR SI REALMENTE SE QUIERE ELIMINAR AL ALUMNO!!
function preguntarSiNo(NumeroControl){
	alertify.confirm('Eliminar Datos', '¿ESTAS SEGURO QUE DESEAS ELIMINAR A ESTE ALUMNO?', 
					function(){ eliminarDatos(NumeroControl) }
                , function(){ alertify.error('OPERACIÓN CANCELADA')});
}
//ESTA FUNCION ES UTILIZADA PARA ELIMINAR ALGUN ALUMNO DE LA TABLA 
function eliminarDatos(NumeroControl){

	cadena="NumeroControl=" + NumeroControl;

		$.ajax({
			type:"POST",
			url:"php/eliminarDatos.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('componentes/tabla.php');
					alertify.success("EL ALUMNO SE HA ELIMINADO CON EXITO!");
				}else{
					alertify.error("FALLÓ LA ELIMINACIÓN :(");
				}
			}
		});
}