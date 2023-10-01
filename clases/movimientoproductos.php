<?php class movimientoproductos{

	public $id;
	public $fecha;
	public $origen;
	public $destino;
	public $cantidad;
	public $idProducto;
	public $comentarios;

	public function buscar($vId,$conexion){
		$SQL = "SELECT * FROM movimientoproductos WHERE `id`= '".$vId."'";
		$resultado=mysqli_query($conexion,$SQL);

		$this->id=0;
		$this->fecha=date('Y-m-d');
		$this->origen=0;
		$this->destino=0;
		$this->cantidad=0;
		$this->idProducto=0;
		$this->comentarios=;
		if( mysqli_num_rows($resultado)!=0 ){

			$arreglo=mysqli_fetch_array($resultado);
			$this->id=$arreglo[0];
			$this->fecha=$arreglo[1];
			$this->origen=$arreglo[2];
			$this->destino=$arreglo[3];
			$this->cantidad=$arreglo[4];
			$this->idProducto=$arreglo[5];
			$this->comentarios=$arreglo[6];
		}else{

			$this->id=0;
		}

	return $this->id;

	}


	public function grabar($conexion){
		if(($this->id =='0') || ($this->id =='') ){
			$SQL ="INSERT INTO movimientoproductos 
			 ( `fecha`,`origen`,`destino`,`cantidad`,`idProducto`,`comentarios`) 
			 VALUES  (	'".mysqli_real_escape_string($conexion,$this->fecha). "',	'".mysqli_real_escape_string($conexion,$this->origen). "',	'".mysqli_real_escape_string($conexion,$this->destino). "',	'".mysqli_real_escape_string($conexion,$this->cantidad). "',	'".mysqli_real_escape_string($conexion,$this->idProducto). "',	'".mysqli_real_escape_string($conexion,$this->comentarios). "' )";
				mysqli_query($conexion,$SQL);
				$this->id=mysqli_insert_Id($conexion);
		}else{
		$SQL = "UPDATE movimientoproductos SET 
				`fecha` = '" .mysqli_real_escape_string($conexion,$this->fecha). "',
				`origen` = '" .mysqli_real_escape_string($conexion,$this->origen). "',
				`destino` = '" .mysqli_real_escape_string($conexion,$this->destino). "',
				`cantidad` = '" .mysqli_real_escape_string($conexion,$this->cantidad). "',
				`idProducto` = '" .mysqli_real_escape_string($conexion,$this->idProducto). "',
				`comentarios` = '" .mysqli_real_escape_string($conexion,$this->comentarios). "' 
				WHERE `id`= '".$this->id."'";
				mysqli_query($conexion,$SQL);
		}
	return $this->id;
	}

} // END class  movimientoproductos
?>