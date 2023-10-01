<?php class pedidodetallenn{

	public $id;
	public $descripcion;
	public $precio;
	public $pedido;
	public $cantidad;

	public function buscar($vId,$conexion){
		$SQL = "SELECT * FROM pedidodetallenn WHERE `id`= '".$vId."'";
		$resultado=mysqli_query($conexion,$SQL);

		$this->id=0;
		$this->descripcion='';
		$this->precio=0;
		$this->pedido=0;
		$this->cantidad=0;
		if( mysqli_num_rows($resultado)!=0 ){

			$arreglo=mysqli_fetch_array($resultado);
			$this->id=$arreglo[0];
			$this->descripcion=$arreglo[1];
			$this->precio=$arreglo[2];
			$this->pedido=$arreglo[3];
			$this->cantidad=$arreglo[4];
		}else{

			$this->id=0;
		}

	return $this->id;

	}


	public function grabar($conexion){
		if(($this->id =='0') || ($this->id =='') ){
			$SQL ="INSERT INTO pedidodetallenn 
			 ( `descripcion`,`precio`,`pedido`,`cantidad`) 
			 VALUES  (	'".mysqli_real_escape_string($conexion,$this->descripcion). "',	'".mysqli_real_escape_string($conexion,$this->precio). "',	'".mysqli_real_escape_string($conexion,$this->pedido). "',	'".mysqli_real_escape_string($conexion,$this->cantidad). "' )";
				mysqli_query($conexion,$SQL);
				$this->id=mysqli_insert_Id($conexion);
		}else{
		$SQL = "UPDATE pedidodetallenn SET 
				`descripcion` = '" .mysqli_real_escape_string($conexion,$this->descripcion). "',
				`precio` = '" .mysqli_real_escape_string($conexion,$this->precio). "',
				`pedido` = '" .mysqli_real_escape_string($conexion,$this->pedido). "',
				`cantidad` = '" .mysqli_real_escape_string($conexion,$this->cantidad). "' 
				WHERE `id`= '".$this->id."'";
				mysqli_query($conexion,$SQL);
		}
	return $this->id;
	}
	public function listar($vIdPedido,$conexion){
		
		$SQL ="SELECT * FROM pedidodetallenn WHERE pedido = ".$vIdPedido;
		$resultado=mysqli_query($conexion,$SQL);
		$tabla = array();
		while($arreglo=mysqli_fetch_assoc($resultado)){
			$tabla[]=$arreglo;
		}
		return $tabla;
	}
} // END class  pedidodetallenn
?>