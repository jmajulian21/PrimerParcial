<?php 
require_once("clases/AccesoDatos.php");
require_once("clases/voto.php");

$queHago=$_POST['queHacer'];

switch ($queHago) {
	//case 'MostarBotones':
			//include("partes/botonesABM.php");
	//	break;
	case 'MostrarGrilla':
			include("partes/formGrilla.php");
		break;
	case 'MostarLogin':
			include("partes/formLogin.php");
		break;
	case 'MostrarFormAlta':
			include("partes/formVoto.php");
		break;
 	case 'GuardarVoto':
			$voto = new voto();
			$voto->id=$_POST['id'];
			$voto->provincia=$_POST['provincia'];
			$voto->provincia=$_POST['provincia'];
			$voto->sexo=$_POST['sexo'];
			$voto->dni=$_POST['dni'];
			$cantidad=$voto->GuardarVoto();
			echo $cantidad;

		break;
		break;
	default:
		# code...
		break;
}

 ?>