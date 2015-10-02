<?php 
session_start();
$dni=$_POST['dni'];

$retorno;

if($dni=="1234")
{			
	
	$_SESSION['registrado']="Julian";
	$retorno=" ingreso";

	}else
{
	$retorno= "No-esta";
}

echo $retorno;
?>

<!--if($recordar=="true")
	{
		setcookie("registro",$usuario,  time()+36000 , '/');
		
	}else
	{
		setcookie("registro",$usuario,  time()-36000 , '/');
		
	}-->