<?php class pedidodetalle{

	public $id;
	public $pedido;
	public $producto;
	public $precio;
	public $cantidad;
	public $costo;
	public $envio;
	public $tax;
	public $taxEnvio;
	public $jet_order_item_id;

	public function buscar($vId,$conexion){
		$SQL = "SELECT * FROM pedidodetalle WHERE `id`= '".$vId."'";
		$resultado=mysqli_query($conexion,$SQL);

		$this->id=0;
		$this->pedido=0;
		$this->producto=0;
		$this->precio=0;
		$this->cantidad=0;
		$this->costo=0;
		$this->envio=0;
		$this->tax=0;
		$this->taxEnvio=0;
		$this->jet_order_item_id='';
		if( mysqli_num_rows($resultado)!=0 ){

			$arreglo=mysqli_fetch_array($resultado);
			$this->id=$arreglo[0];
			$this->pedido=$arreglo[1];
			$this->producto=$arreglo[2];
			$this->precio=$arreglo[3];
			$this->cantidad=$arreglo[4];
			$this->costo=$arreglo[5];
			$this->envio=$arreglo[6];
			$this->tax=$arreglo[7];
			$this->taxEnvio=$arreglo[8];
			$this->jet_order_item_id=$arreglo[9];
		}else{

			$this->id=0;
		}

	return $this->id;

	}


	public function grabar($conexion){
		if(($this->id =='0') || ($this->id =='') ){
			$SQL ="INSERT INTO pedidodetalle 
			 ( `pedido`,`producto`,`precio`,`cantidad`,`costo`,`envio`,`tax`,`taxEnvio`,`jet_order_item_id`) 
			 VALUES  (	'".mysqli_real_escape_string($conexion,$this->pedido). "',	'".mysqli_real_escape_string($conexion,$this->producto). "',	'".mysqli_real_escape_string($conexion,$this->precio). "',	'".mysqli_real_escape_string($conexion,$this->cantidad). "',	'".mysqli_real_escape_string($conexion,$this->costo). "',	'".mysqli_real_escape_string($conexion,$this->envio). "',	'".mysqli_real_escape_string($conexion,$this->tax). "',	'".mysqli_real_escape_string($conexion,$this->taxEnvio). "',	'".mysqli_real_escape_string($conexion,$this->jet_order_item_id). "' )";
				mysqli_query($conexion,$SQL);
				$this->id=mysqli_insert_Id($conexion);

				$SQL="UPDATE producto set stock = stock - ".$this->cantidad." where id = ".$this->producto;
				mysqli_query($conexion,$SQL);
		}else{
		$SQL = "UPDATE pedidodetalle SET 
						`pedido` = '" .mysqli_real_escape_string($conexion,$this->pedido). "',
						`producto` = '" .mysqli_real_escape_string($conexion,$this->producto). "',
						`precio` = '" .mysqli_real_escape_string($conexion,$this->precio). "',
						`cantidad` = '" .mysqli_real_escape_string($conexion,$this->cantidad). "',
						`costo` = '" .mysqli_real_escape_string($conexion,$this->costo). "',
						`envio` = '" .mysqli_real_escape_string($conexion,$this->envio). "',
						`tax` = '" .mysqli_real_escape_string($conexion,$this->tax). "',
						`taxEnvio` = '" .mysqli_real_escape_string($conexion,$this->taxEnvio). "',
						`jet_order_item_id` = '" .mysqli_real_escape_string($conexion,$this->jet_order_item_id). "' 
				WHERE `id`= '".$this->id."'";
				mysqli_query($conexion,$SQL);
		}
	return $this->id;
	}

	public function listar($vIdPedido,$conexion){
		
			$SQL ="SELECT pedidodetalle.id, 
								pedidodetalle.producto as idProducto, 
								pedidodetalle.cantidad, 
								pedidodetalle.precio,
								producto.nombre as producto,
								color.nombre as color,
								tamanoproducto.nombre as tamano,
								marcaproducto.nombre as marca
						FROM pedidodetalle 
							LEFT JOIN producto ON producto.id = pedidodetalle.producto
							LEFT JOIN color ON color.id = producto.color
							LEFT JOIN tamanoproducto ON tamanoproducto.id = producto.tamano
							left join marcaproducto on marcaproducto.id = producto.marca
					WHERE pedidodetalle.pedido = ".$vIdPedido;
			$resultado=mysqli_query($conexion,$SQL);
			$tabla = array();
			$i=0;
			while($arreglo=mysqli_fetch_assoc($resultado)){
				$tabla[]=$arreglo;
				
			}
			return $tabla;
	}

} // END class  pedidodetalle
?>