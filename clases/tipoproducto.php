<?php class tipoproducto{

	public $id;
	public $nombre;
	public $CantidadMinima;
	public $suspendido;

	public function buscar($vId,$conexion){
		$SQL = "SELECT * FROM tipoproducto WHERE `id`= '".$vId."'";
		$resultado=mysqli_query($conexion,$SQL);

		$this->id=0;
		$this->nombre='';

		
		$this->CantidadMinima=0;

		if( mysqli_num_rows($resultado)!=0 ){

			$arreglo=mysqli_fetch_array($resultado);
			$this->id=$arreglo[0];
			$this->nombre=$arreglo[1];
			$this->CantidadMinima=$arreglo[2];
			$this->suspendido=$arreglo[3];
		}else{

			$this->id=0;
		}

	return $this->id;

	}


	public function grabar($conexion){
		if(($this->id =='0') || ($this->id =='') ){
			$SQL ="INSERT INTO tipoproducto 
			 ( `nombre`,`CantidadMinima`,`suspendido`) 
			 VALUES  (	'".mysqli_real_escape_string($conexion,$this->nombre). "',	'".mysqli_real_escape_string($conexion,$this->CantidadMinima). "',	".mysqli_real_escape_string($conexion,$this->suspendido). " )";
				mysqli_query($conexion,$SQL);
				$this->id=mysqli_insert_Id($conexion);
		}else{
		$SQL = "UPDATE tipoproducto SET 
				`nombre` = '" .mysqli_real_escape_string($conexion,$this->nombre). "',
				`CantidadMinima` = '" .mysqli_real_escape_string($conexion,$this->CantidadMinima). "' ,
				`suspendido` = " .mysqli_real_escape_string($conexion,$this->suspendido). "
				WHERE `id`= '".$this->id."'";
				mysqli_query($conexion,$SQL);
		}
	return $this->id;
	}

} // END class  tipoproducto
?>