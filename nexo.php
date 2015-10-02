<?php 
//require_once("clases/AccesoDatos.php");
//require_once("clases/cd.php");

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
			include("partes/formCd.php");
		break;

		break;
	default:
		# code...
		break;
}

 ?>