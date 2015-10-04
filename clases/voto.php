<?php
class voto
{
	public $id;
 	public $provincia;
  	public $presidenciable;
  	public $sexo;
  	public $dni;

  	public function BorrarVoto()
	 {
	 		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("
				delete 
				from votos 				
				WHERE id=:id");	
				$consulta->bindValue(':id',$this->id, PDO::PARAM_INT);		
				$consulta->execute();
				return $consulta->rowCount();
	 }

	public function Modificarvoto()
	 {

			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("
				update votos 
				set provincia='$this->provincia',
				presidenciable='$this->presidenciable',
				sexo='$this->sexo'
				dni='$this->dni'
				WHERE id='$this->id'");
			return $consulta->execute();

	 }
	
  
	 public function InsertarElvoto()
	 {
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				$consulta =$objetoAccesoDato->RetornarConsulta("INSERT into votos (provincia,presidenciable,sexo,dni)values('$this->provincia','$this->presidenciable','$this->sexo','$this->dni')");
				$consulta->execute();
				return $objetoAccesoDato->RetornarUltimoIdInsertado();
				

	 }

	  public function ModificarvotoParametros()
	 {
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("
				update votos 
				set provincia=':provincia',
				presidenciable=':presidenciable',
				sexo=':sexo'
				dni=':dni'
				WHERE id=':id'");
			$consulta->bindValue(':id',$this->id, PDO::PARAM_INT);
			$consulta->bindValue(':provincia',$this->provincia, PDO::PARAM_INT);
			$consulta->bindValue(':sexo', $this->sexo, PDO::PARAM_STR);
			$consulta->bindValue(':presidenciable', $this->presidenciable, PDO::PARAM_STR);
			$consulta->bindValue(':dni', $this->dni, PDO::PARAM_STR);
			return $consulta->execute();
	 }

	 public function InsertarElvotoParametros()
	 {
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				$consulta =$objetoAccesoDato->RetornarConsulta("INSERT into votos (provincia,presidenciable,sexo,dni)values(:provincia,:presidenciable,:sexo,:dni)");
				$consulta->bindValue(':provincia',$this->provincia, PDO::PARAM_INT);
				$consulta->bindValue(':sexo', $this->sexo, PDO::PARAM_STR);
				$consulta->bindValue(':presidenciable', $this->presidenciable, PDO::PARAM_STR);
				$consulta->bindValue(':dni', $this->dni, PDO::PARAM_STR);
				$consulta->execute();		
				return $objetoAccesoDato->RetornarUltimoIdInsertado();
	 }
	 public function Guardarvoto()
	 {

	 	if($this->id>0)
	 		{
	 			$this->ModificarvotoParametros();
	 		}else {
	 			$this->InsertarElvotoParametros();
	 		}

	 }


  	public static function TraerTodoLosvotos()
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("select * from votos");
			$consulta->execute();			
			return $consulta->fetchAll(PDO::FETCH_CLASS, "voto");		
	}

/*	public static function TraerUnvoto($id) 
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("select id, provincia as provincia, presidenciable as presidenciable,sexo as sexo from votos where id = $id");
			$consulta->execute();
			$votoBuscado= $consulta->fetchObject('voto');
			return $votoBuscado;				

			
	}*/

	

	public function mostrarDatos()
	{
	  	return "Metodo mostar:".$this->provincia."  ".$this->presidenciable."  ".$this->sexo;
	}

}