//EN ESTA FUNCION SE UTILIZA PARA CARGAR LOS DATOS DE LA TABLA A LAS 
//CAJAS DE TEXTO DE EL MENU EDITAR!!!
function agregaformTutores(datos){

	d=datos.split('||');

	$('#txt_Clave_Modificaciones').val(d[0]);
	$('#txt_Nombre_Modificaciones').val(d[1]);
	$('#txt_Apellido_Paterno_Modificaciones').val(d[2]);
	$('#txt_Apellido_Materno_Modificaciones').val(d[3]);
	$('#txt_Grado_Modificaciones').val(d[4]);
	$('#txt_Telefono_Modificaciones').val(d[5]);
	
	
}
function agregardatosMateria(txt_Clave_Tutor,txt_Nombre_Tutor,txt_Apellido_Paterno_Tutor,txt_Apellido_Materno_Tutor,txt_Grado_Tutor,txt_Telefono_Tutor){
cadena="txt_Clave_Tutor=" + txt_Clave_Tutor + 
			"&txt_Nombre_Tutor=" + txt_Nombre_Tutor +
            "&txt_Apellido_Paterno_Tutor=" + txt_Apellido_Paterno_Tutor +
            "&txt_Apellido_Materno_Tutor=" + txt_Apellido_Materno_Tutor +
            "&txt_Grado_Tutor=" + txt_Grado_Tutor +
			"&txt_Telefono_Tutor=" + txt_Telefono_Tutor;

	$.ajax({
		type:"POST",
		url:"php/agregarDatosMateria.php",
		data:cadena,
		success:function(r){
            if(r==1){
				$('#tablamaterias').load('componentes/tablamaterias.php');
				 $('#buscadorMaterias').load('componentes/buscadorMaterias.php');
				alertify.success("EL TUTOR SE HA AGREGADO CON EXITO");
                
			}else{
				alertify.error("Fallo Agregar tutor");
               
			}
		}
	});
}
function actualizaDatosMateria(){


	txt_Clave_Modificaciones=$('#txt_Clave_Modificaciones').val();
	txt_Nombre_Modificaciones=$('#txt_Nombre_Modificaciones').val();
	txt_Apellido_Paterno_Modificaciones=$('#txt_Apellido_Paterno_Modificaciones').val();
	txt_Apellido_Materno_Modificaciones=$('#txt_Apellido_Materno_Modificaciones').val();
	txt_Grado_Modificaciones=$('#txt_Grado_Modificaciones').val();
	txt_Telefono_Modificaciones=$('#txt_Telefono_Modificaciones').val();
	

	cadena= "txt_Clave_Modificaciones=" + txt_Clave_Modificaciones +
			"&txt_Nombre_Modificaciones=" + txt_Nombre_Modificaciones + 
			"&txt_Apellido_Paterno_Modificaciones=" + txt_Apellido_Paterno_Modificaciones +
			"&txt_Apellido_Materno_Modificaciones=" + txt_Apellido_Materno_Modificaciones +
			"&txt_Grado_Modificaciones=" + txt_Grado_Modificaciones +
			"&txt_Telefono_Modificaciones=" + txt_Telefono_Modificaciones;

	$.ajax({
		type:"POST",
		url:"php/actualizaDatosMateria.php",
		data:cadena,
		success:function(R){
            if(R==1){
				$('#tablamaterias').load('componentes/tablamaterias.php');
				alertify.success("EL TUTOR SE HA ACTUALIZADO CON EXITO :)");
			}else{
				alertify.error("FALLÓ LA ACTUALIZACIÓN :(");
			}
		}
	});

}
function preguntarSiNoTutor(clave_tutor){
	alertify.confirm('Eliminar Datos', '¿ESTAS SEGURO QUE DESEAS ELIMINAR A ESTE TUTOR?', 
					function(){ eliminarDatosTutor(clave_tutor) }
                , function(){ alertify.error('OPERACIÓN CANCELADA')});
}
//ESTA FUNCION ES UTILIZADA PARA ELIMINAR ALGUN TUTOR DE LA TABLA 
function eliminarDatosTutor(clave_tutor){
cadena="clave_tutor=" + clave_tutor;
	$.ajax({
			type:"POST",
			url:"php/eliminarDatosTutores.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tablamaterias').load('componentes/tablamaterias.php');
					alertify.success("EL ALUMNO SE HA ELIMINADO CON EXITO!");
				}else{
                    alertify.success(r);
					alertify.error("FALLÓ LA ELIMINACIÓN :(");
				}
			}
		});
}