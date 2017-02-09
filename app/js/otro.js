function cerrar(){
	location.href=urlbase+'Login/Logout';
}

function guardar(campo) {
	
	if(campo.nombres.value==""){
		alert("INGRESE NOMBRE");		
		$("#nombres").focus(); return 0;
	}
	if(campo.apellidos.value==""){
		alert("INGRESE APELLIDO");
		$("#apellidos").focus(); return 0;
	}
	$.ajax({
		type: "POST",
		data: $("#insertar_personal").serialize(),
		url: urlbase+'Personas/nuevo',
		success: function(data){
			if(data=="I"){
				 alert("DATOS INSERTADOS");
			}else{
				if(data=='EI'){					
					alert("ERROR AL INSERTAR");
				}else{
					if(data=='M'){
						alert("SE MODIFICO CORRECTAMENTE");						
					}else{
						alert("NO SE MODIFICO CORRECTAMENTE");						
					}
				}				
			}
			setTimeout("actualizar()",500); 
		}
	})
}

function editar(id){
	$.ajax({
		type: "POST",
		data: "id="+id,
		url: urlbase+'Personas/VerEditar',
		success: function(data){
			datos=eval(data);
			$("#codigo").val(datos[0]["codigo"]);
			$("#nombres").val(datos[0]["nombre"]);
			$("#apellidos").val(datos[0]["apellido"]);
		}
	})
}

function eliminar(id){

	if(window.confirm("SEGURO QUE QUIERE ELIMINAR")){
		$.ajax({
			type: "POST",
			data: "id="+id,
			url: urlbase+'Personas/eliminar',
			success: function(data){
				if(data=='E'){
					alert("eliminado");
				}else{
					alert("eeror al elimanar");
				}
				setTimeout("actualizar()",500);
			}

		})
	}
}



function actualizar(){
	location.href=window.location;
}