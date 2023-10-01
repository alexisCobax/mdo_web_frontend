<?php class sexoproducto{

	public $id;
	public $nombre;

	public function buscar($vId,$conexion){
		$SQL = "SELECT * FROM sexoproducto WHERE `id`= '".$vId."'";
		$resultado=mysqli_query($conexion,$SQL);

		$this->id=0;
		$this->nombre=;
		if( mysqli_num_rows($resultado)!=0 ){

			$arreglo=mysqli_fetch_array($resultado);
			$this->id=$arreglo[0];
			$this->nombre=$arreglo[1];
		}else{

			$this->id=0;
		}

	return $this->id;

	}


	public function grabar($conexion){
		if(($this->id =='0') || ($this->id =='') ){
			$SQL ="INSERT INTO sexoproducto 
			 ( `nombre`) 
			 VALUES  (	'".mysqli_real_escape_string($conexion,$this->nombre). "' )";
				mysqli_query($conexion,$SQL);
				$this->id=mysqli_insert_Id($conexion);
		}else{
		$SQL = "UPDATE sexoproducto SET 
				`nombre` = '" .mysqli_real_escape_string($conexion,$this->nombre). "' 
				WHERE `id`= '".$this->id."'";
				mysqli_query($conexion,$SQL);
		}
	return $this->id;
	}

} // END class  sexoproducto
?>