function BorrarVoto(idParametro)
{
	//alert(idParametro);
		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"BorrarVoto",
			id:idParametro	
		}
	});
	funcionAjax.done(function(retorno){
		Mostrar("MostrarGrilla");
		$("#informe").html("cantidad de eliminados "+ retorno);	
		
	});
	funcionAjax.fail(function(retorno){	
		$("#informe").html(retorno.responseText);	
	});	
}

function EditarVoto(idParametro)
{
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"TraerVoto",
			id:idParametro	
		}
	});
	funcionAjax.done(function(retorno){
		var Voto =JSON.parse(retorno);	
		$("#id").val(Voto.id);
		$("#provincia").val(Voto.provincia);
		$("#presidenciable").val(Voto.presidenciable);
		$("#sexo").val(Voto.sexo);
		$("#dni").val(Voto.dni);
	});
	funcionAjax.fail(function(retorno){	
		$("#informe").html(retorno.responseText);	
	});	
	Mostrar("MostrarFormAlta");
}

function GuardarVoto()
{
		var id=$("#id").val();
		var provincia=$("#provincia").val();
		var presidenciable=$("#presidenciable").val();
		var sexo=$("#sexo").val();
		var dni=$("#dni").val();

		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"GuardarVoto",
			id:id,
			provincia:provincia,
			presidenciable:presidenciable,
			sexo:sexo	
		}
	});
	funcionAjax.done(function(retorno){
			Mostrar("MostrarGrilla");
		$("#informe").html("cantidad de agregados "+ retorno);	
		
	});
	funcionAjax.fail(function(retorno){	
		$("#informe").html(retorno.responseText);	
	});	
}