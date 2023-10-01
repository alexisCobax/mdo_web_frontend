<?php class tipobanners{

	public $id;
	public $palabraClave;
	public $nombre;
	public $descripcion;
	public $alto;
	public $ancho;
	public $codigo;

	public function buscar($vId,$conexion){
		$SQL = "SELECT * FROM tipobanners WHERE `id`= '".$vId."'";
		$resultado=mysqli_query($conexion,$SQL);

		$this->id=0;
		$this->palabraClave=;
		$this->nombre=;
		$this->descripcion=;
		$this->alto=0;
		$this->ancho=0;
		$this->codigo=;
		if( mysqli_num_rows($resultado)!=0 ){

			$arreglo=mysqli_fetch_array($resultado);
			$this->id=$arreglo[0];
			$this->palabraClave=$arreglo[1];
			$this->nombre=$arreglo[2];
			$this->descripcion=$arreglo[3];
			$this->alto=$arreglo[4];
			$this->ancho=$arreglo[5];
			$this->codigo=$arreglo[6];
		}else{

			$this->id=0;
		}

	return $this->id;

	}


	public function grabar($conexion){
		if(($this->id =='0') || ($this->id =='') ){
			$SQL ="INSERT INTO tipobanners 
			 ( `palabraClave`,`nombre`,`descripcion`,`alto`,`ancho`,`codigo`) 
			 VALUES  (	'".mysqli_real_escape_string($conexion,$this->palabraClave). "',	'".mysqli_real_escape_string($conexion,$this->nombre). "',	'".mysqli_real_escape_string($conexion,$this->descripcion). "',	'".mysqli_real_escape_string($conexion,$this->alto). "',	'".mysqli_real_escape_string($conexion,$this->ancho). "',	'".mysqli_real_escape_string($conexion,$this->codigo). "' )";
				mysqli_query($conexion,$SQL);
				$this->id=mysqli_insert_Id($conexion);
		}else{
		$SQL = "UPDATE tipobanners SET 
				`palabraClave` = '" .mysqli_real_escape_string($conexion,$this->palabraClave). "',
				`nombre` = '" .mysqli_real_escape_string($conexion,$this->nombre). "',
				`descripcion` = '" .mysqli_real_escape_string($conexion,$this->descripcion). "',
				`alto` = '" .mysqli_real_escape_string($conexion,$this->alto). "',
				`ancho` = '" .mysqli_real_escape_string($conexion,$this->ancho). "',
				`codigo` = '" .mysqli_real_escape_string($conexion,$this->codigo). "' 
				WHERE `id`= '".$this->id."'";
				mysqli_query($conexion,$SQL);
		}
	return $this->id;
	}

} // END class  tipobanners
?>