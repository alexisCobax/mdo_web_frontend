<?php class carritodetalle{

	public $id;
	public $carrito;
	public $producto;
	public $precio;
	public $cantidad;

	public function buscar($vId,$conexion){
		$SQL = "SELECT * FROM carritodetalle WHERE `id`= '".$vId."'";
		$resultado=mysqli_query($conexion,$SQL);

		$this->id=0;
		$this->carrito=0;
		$this->producto=0;
		$this->precio=0;
		$this->cantidad=0;
		if( mysqli_num_rows($resultado)!=0 ){

			$arreglo=mysqli_fetch_array($resultado);
			$this->id=$arreglo[0];
			$this->carrito=$arreglo[1];
			$this->producto=$arreglo[2];
			$this->precio=$arreglo[3];
			$this->cantidad=$arreglo[4];
		}else{

			$this->id=0;
		}

	return $this->id;

	}


	public function grabar($conexion){
		if(($this->id =='0') || ($this->id =='') ){
			$SQL ="INSERT INTO carritodetalle 
			 ( `carrito`,`producto`,`precio`,`cantidad`) 
			 VALUES  (	'".mysqli_real_escape_string($conexion,$this->carrito). "',	'".mysqli_real_escape_string($conexion,$this->producto). "',	'".mysqli_real_escape_string($conexion,$this->precio). "',	'".mysqli_real_escape_string($conexion,$this->cantidad). "' )";
				mysqli_query($conexion,$SQL);
				$this->id=mysqli_insert_Id($conexion);
		}else{
		$SQL = "UPDATE carritodetalle SET 
				`carrito` = '" .mysqli_real_escape_string($conexion,$this->carrito). "',
				`producto` = '" .mysqli_real_escape_string($conexion,$this->producto). "',
				`precio` = '" .mysqli_real_escape_string($conexion,$this->precio). "',
				`cantidad` = '" .mysqli_real_escape_string($conexion,$this->cantidad). "' 
				WHERE `id`= '".$this->id."'";
				mysqli_query($conexion,$SQL);
		}
	return $this->id;
	}

} // END class  carritodetalle
?>