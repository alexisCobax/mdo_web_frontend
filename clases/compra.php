<?php class compra{

	public $id;
	public $proveedor;
	public $fechaDeIngreso;
	public $fechaDePago;
	public $precio;
	public $numeroLote;
	public $observaciones;
	public $pagado;
	public $enDeposito;

	public function buscar($vId,$conexion){
		$SQL = "SELECT * FROM compra WHERE `id`= '".$vId."'";
		$resultado=mysqli_query($conexion,$SQL);

		$this->id=0;
		$this->proveedor=0;
		$this->fechaDeIngreso=0;
		$this->fechaDePago=0;
		$this->precio=0;
		$this->numeroLote=;
		$this->observaciones=;
		$this->pagado=0;
		$this->enDeposito=0;
		if( mysqli_num_rows($resultado)!=0 ){

			$arreglo=mysqli_fetch_array($resultado);
			$this->id=$arreglo[0];
			$this->proveedor=$arreglo[1];
			$this->fechaDeIngreso=$arreglo[2];
			$this->fechaDePago=$arreglo[3];
			$this->precio=$arreglo[4];
			$this->numeroLote=$arreglo[5];
			$this->observaciones=$arreglo[6];
			$this->pagado=$arreglo[7];
			$this->enDeposito=$arreglo[8];
		}else{

			$this->id=0;
		}

	return $this->id;

	}


	public function grabar($conexion){
		if(($this->id =='0') || ($this->id =='') ){
			$SQL ="INSERT INTO compra 
			 ( `proveedor`,`fechaDeIngreso`,`fechaDePago`,`precio`,`numeroLote`,`observaciones`,`pagado`,`enDeposito`) 
			 VALUES  (	'".mysqli_real_escape_string($conexion,$this->proveedor). "',	'".mysqli_real_escape_string($conexion,$this->fechaDeIngreso). "',	'".mysqli_real_escape_string($conexion,$this->fechaDePago). "',	'".mysqli_real_escape_string($conexion,$this->precio). "',	'".mysqli_real_escape_string($conexion,$this->numeroLote). "',	'".mysqli_real_escape_string($conexion,$this->observaciones). "',	'".mysqli_real_escape_string($conexion,$this->pagado). "',	'".mysqli_real_escape_string($conexion,$this->enDeposito). "' )";
				mysqli_query($conexion,$SQL);
				$this->id=mysqli_insert_Id($conexion);
		}else{
		$SQL = "UPDATE compra SET 
				`proveedor` = '" .mysqli_real_escape_string($conexion,$this->proveedor). "',
				`fechaDeIngreso` = '" .mysqli_real_escape_string($conexion,$this->fechaDeIngreso). "',
				`fechaDePago` = '" .mysqli_real_escape_string($conexion,$this->fechaDePago). "',
				`precio` = '" .mysqli_real_escape_string($conexion,$this->precio). "',
				`numeroLote` = '" .mysqli_real_escape_string($conexion,$this->numeroLote). "',
				`observaciones` = '" .mysqli_real_escape_string($conexion,$this->observaciones). "',
				`pagado` = '" .mysqli_real_escape_string($conexion,$this->pagado). "',
				`enDeposito` = '" .mysqli_real_escape_string($conexion,$this->enDeposito). "' 
				WHERE `id`= '".$this->id."'";
				mysqli_query($conexion,$SQL);
		}
	return $this->id;
	}

} // END class  compra
?>