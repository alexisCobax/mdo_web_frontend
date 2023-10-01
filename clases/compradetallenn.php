<?php class compradetallenn{

	public $id;
	public $descripcion;
	public $precio;
	public $idCompra;

	public function buscar($vId,$conexion){
		$SQL = "SELECT * FROM compradetallenn WHERE `id`= '".$vId."'";
		$resultado=mysqli_query($conexion,$SQL);

		$this->id=0;
		$this->descripcion=;
		$this->precio=0;
		$this->idCompra=0;
		if( mysqli_num_rows($resultado)!=0 ){

			$arreglo=mysqli_fetch_array($resultado);
			$this->id=$arreglo[0];
			$this->descripcion=$arreglo[1];
			$this->precio=$arreglo[2];
			$this->idCompra=$arreglo[3];
		}else{

			$this->id=0;
		}

	return $this->id;

	}


	public function grabar($conexion){
		if(($this->id =='0') || ($this->id =='') ){
			$SQL ="INSERT INTO compradetallenn 
			 ( `descripcion`,`precio`,`idCompra`) 
			 VALUES  (	'".mysqli_real_escape_string($conexion,$this->descripcion). "',	'".mysqli_real_escape_string($conexion,$this->precio). "',	'".mysqli_real_escape_string($conexion,$this->idCompra). "' )";
				mysqli_query($conexion,$SQL);
				$this->id=mysqli_insert_Id($conexion);
		}else{
		$SQL = "UPDATE compradetallenn SET 
				`descripcion` = '" .mysqli_real_escape_string($conexion,$this->descripcion). "',
				`precio` = '" .mysqli_real_escape_string($conexion,$this->precio). "',
				`idCompra` = '" .mysqli_real_escape_string($conexion,$this->idCompra). "' 
				WHERE `id`= '".$this->id."'";
				mysqli_query($conexion,$SQL);
		}
	return $this->id;
	}

} // END class  compradetallenn
?>