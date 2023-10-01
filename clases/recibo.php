<?php class recibo{

	public $id;
	public $cliente;
	public $fecha;
	public $formaDePago;
	public $total;
	public $anulado;
	public $observaciones;
	public $pedido;
	public $garantia;

	public function buscar($vId,$conexion){
		$SQL = "SELECT * FROM recibo WHERE `id`= '".$vId."'";
		$resultado=mysqli_query($conexion,$SQL);

		$this->id=0;
		$this->cliente=0;
		$this->fecha=date('Y-m-d');
		$this->formaDePago=0;
		$this->total=0;
		$this->anulado=0;
		$this->observaciones=;
		$this->pedido=0;
		$this->garantia=0;
		if( mysqli_num_rows($resultado)!=0 ){

			$arreglo=mysqli_fetch_array($resultado);
			$this->id=$arreglo[0];
			$this->cliente=$arreglo[1];
			$this->fecha=$arreglo[2];
			$this->formaDePago=$arreglo[3];
			$this->total=$arreglo[4];
			$this->anulado=$arreglo[5];
			$this->observaciones=$arreglo[6];
			$this->pedido=$arreglo[7];
			$this->garantia=$arreglo[8];
		}else{

			$this->id=0;
		}

	return $this->id;

	}


	public function grabar($conexion){
		if(($this->id =='0') || ($this->id =='') ){
			$SQL ="INSERT INTO recibo 
			 ( `cliente`,`fecha`,`formaDePago`,`total`,`anulado`,`observaciones`,`pedido`,`garantia`) 
			 VALUES  (	'".mysqli_real_escape_string($conexion,$this->cliente). "',	'".mysqli_real_escape_string($conexion,$this->fecha). "',	'".mysqli_real_escape_string($conexion,$this->formaDePago). "',	'".mysqli_real_escape_string($conexion,$this->total). "',	'".mysqli_real_escape_string($conexion,$this->anulado). "',	'".mysqli_real_escape_string($conexion,$this->observaciones). "',	'".mysqli_real_escape_string($conexion,$this->pedido). "',	'".mysqli_real_escape_string($conexion,$this->garantia). "' )";
				mysqli_query($conexion,$SQL);
				$this->id=mysqli_insert_Id($conexion);
		}else{
		$SQL = "UPDATE recibo SET 
				`cliente` = '" .mysqli_real_escape_string($conexion,$this->cliente). "',
				`fecha` = '" .mysqli_real_escape_string($conexion,$this->fecha). "',
				`formaDePago` = '" .mysqli_real_escape_string($conexion,$this->formaDePago). "',
				`total` = '" .mysqli_real_escape_string($conexion,$this->total). "',
				`anulado` = '" .mysqli_real_escape_string($conexion,$this->anulado). "',
				`observaciones` = '" .mysqli_real_escape_string($conexion,$this->observaciones). "',
				`pedido` = '" .mysqli_real_escape_string($conexion,$this->pedido). "',
				`garantia` = '" .mysqli_real_escape_string($conexion,$this->garantia). "' 
				WHERE `id`= '".$this->id."'";
				mysqli_query($conexion,$SQL);
		}
	return $this->id;
	}

} // END class  recibo
?>