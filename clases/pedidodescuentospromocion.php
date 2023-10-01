<?php class pedidodescuentospromocion{

	public $id;
	public $idPedido;
	public $idPromocion;
	public $descripcion;
	public $montoDescuento;
	public $idTipoPromocion;

	public function buscar($vId,$conexion){
		$SQL = "SELECT * FROM pedidodescuentospromocion WHERE `id`= '".$vId."'";
		$resultado=mysqli_query($conexion,$SQL);

		$this->id=0;
		$this->idPedido=0;
		$this->idPromocion=0;
		$this->descripcion='';
		$this->montoDescuento=0;
		$this->idTipoPromocion=0;
		if( mysqli_num_rows($resultado)!=0 ){

			$arreglo=mysqli_fetch_array($resultado);
			$this->id=$arreglo[0];
			$this->idPedido=$arreglo[1];
			$this->idPromocion=$arreglo[2];
			$this->descripcion=$arreglo[3];
			$this->montoDescuento=$arreglo[4];
			$this->idTipoPromocion=$arreglo[5];
		}else{

			$this->id=0;
		}

	return $this->id;

	}


	public function grabar($conexion){
		if(($this->id =='0') || ($this->id =='') ){
			$SQL ="INSERT INTO pedidodescuentospromocion 
			 ( `idPedido`,`idPromocion`,`descripcion`,`montoDescuento`,`idTipoPromocion`) 
			 VALUES  (	'".mysqli_real_escape_string($conexion,$this->idPedido). "',	'".mysqli_real_escape_string($conexion,$this->idPromocion). "',	'".mysqli_real_escape_string($conexion,$this->descripcion). "',	'".mysqli_real_escape_string($conexion,$this->montoDescuento). "',	'".mysqli_real_escape_string($conexion,$this->idTipoPromocion). "' )";
				mysqli_query($conexion,$SQL);
				$this->id=mysqli_insert_Id($conexion);
		}else{
		$SQL = "UPDATE pedidodescuentospromocion SET 
				`idPedido` = '" .mysqli_real_escape_string($conexion,$this->idPedido). "',
				`idPromocion` = '" .mysqli_real_escape_string($conexion,$this->idPromocion). "',
				`descripcion` = '" .mysqli_real_escape_string($conexion,$this->descripcion). "',
				`montoDescuento` = '" .mysqli_real_escape_string($conexion,$this->montoDescuento). "',
				`idTipoPromocion` = '" .mysqli_real_escape_string($conexion,$this->idTipoPromocion). "' 
				WHERE `id`= '".$this->id."'";
				mysqli_query($conexion,$SQL);
		}
		//echo $SQL;
	return $this->id;
	}

	public function listar($vIdPedido,$conexion){
		
		$SQL ="SELECT * FROM pedidodescuentospromocion WHERE idPedido = ".$vIdPedido;
		$resultado=mysqli_query($conexion,$SQL);
		$tabla = array();
		while($arreglo=mysqli_fetch_assoc($resultado)){
			$tabla[]=$arreglo;
			
		}
		return $tabla;
	}
} // END class  pedidodescuentospromocion
?>