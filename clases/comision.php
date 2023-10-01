<?php class comision{

	public $id;
	public $nombre;
	public $porcentaje;

	public function buscar($vId,$conexion){
		$SQL = "SELECT * FROM comision WHERE `id`= '".$vId."'";
		$resultado=mysqli_query($conexion,$SQL);

		$this->id=0;
		$this->nombre=;
		$this->porcentaje=0;
		if( mysqli_num_rows($resultado)!=0 ){

			$arreglo=mysqli_fetch_array($resultado);
			$this->id=$arreglo[0];
			$this->nombre=$arreglo[1];
			$this->porcentaje=$arreglo[2];
		}else{

			$this->id=0;
		}

	return $this->id;

	}


	public function grabar($conexion){
		if(($this->id =='0') || ($this->id =='') ){
			$SQL ="INSERT INTO comision 
			 ( `nombre`,`porcentaje`) 
			 VALUES  (	'".mysqli_real_escape_string($conexion,$this->nombre). "',	'".mysqli_real_escape_string($conexion,$this->porcentaje). "' )";
				mysqli_query($conexion,$SQL);
				$this->id=mysqli_insert_Id($conexion);
		}else{
		$SQL = "UPDATE comision SET 
				`nombre` = '" .mysqli_real_escape_string($conexion,$this->nombre). "',
				`porcentaje` = '" .mysqli_real_escape_string($conexion,$this->porcentaje). "' 
				WHERE `id`= '".$this->id."'";
				mysqli_query($conexion,$SQL);
		}
	return $this->id;
	}

} // END class  comision
?>