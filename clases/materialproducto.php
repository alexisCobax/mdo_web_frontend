<?php class materialproducto{

	public $id;
	public $nombre;
	public $suspendido=0;

	public function buscar($vId,$conexion){
		$SQL = "SELECT * FROM materialproducto WHERE `id`= '".$vId."'";
		$resultado=mysqli_query($conexion,$SQL);

		$this->id=0;
		$this->nombre='';
		$this->suspendido=0;
		if( mysqli_num_rows($resultado)!=0 ){

			$arreglo=mysqli_fetch_array($resultado);
			$this->id=$arreglo[0];
			$this->nombre=$arreglo[1];
			$this->suspendido=$arreglo[2];
		}else{

			$this->id=0;
		}

	return $this->id;

	}


	public function grabar($conexion){
		if(($this->id =='0') || ($this->id =='') ){
			$SQL ="INSERT INTO materialproducto 
			 ( `nombre`, `suspendido`) 
			 VALUES  (	'".mysqli_real_escape_string($conexion,$this->nombre). "' ,".mysqli_real_escape_string($conexion,$this->nombre). " )";
				mysqli_query($conexion,$SQL);
				$this->id=mysqli_insert_Id($conexion);
		}else{
		$SQL = "UPDATE materialproducto SET 
				`nombre` = '" .mysqli_real_escape_string($conexion,$this->nombre). "',
				`suspendido` = " .mysqli_real_escape_string($conexion,$this->suspendido). " 
				WHERE `id`= '".$this->id."'";
				mysqli_query($conexion,$SQL);
		}
	return $this->id;
	}

} // END class  materialproducto
?>