<?php class pedido{

	public $id;
	public $fecha;
	public $cliente;
	public $estado;
	public $vendedor;
	public $formaDePago;
	public $observaciones;
	public $invoice;
	public $total;
	public $descuentoPorcentual;
	public $descuentoNeto;
	public $totalEnvio;
	public $origen;
	public $etapa;
	public $tipoDeEnvio;
	public $envioNombre;
	public $envioPais;
	public $envioRegion;
	public $envioCiudad;
	public $envioDomicilio;
	public $envioCp;
	public $idAgile;
	public $IdActiveCampaign;
	public $idTransportadora;
	public $transportadoraNombre;
	public $transportadoraTelefono;
	public $codigoSeguimiento;
	public $MailSeguimientoEnviado;

	public function buscar($vId,$conexion){
		$SQL = "SELECT * FROM pedido WHERE `id`= '".$vId."'";
		$resultado=mysqli_query($conexion,$SQL);

		$this->id=0;
		$this->fecha=date('Y-m-d');
		$this->cliente=0;
		$this->estado=1;
		$this->vendedor=0;
		$this->formaDePago=0;
		$this->observaciones='';
		$this->invoice=0;
		$this->total=0;
		$this->descuentoPorcentual=0;
		$this->descuentoNeto=0;
		$this->totalEnvio=0;
		$this->origen=0;
		$this->etapa=0;
		$this->tipoDeEnvio=0;
		$this->envioNombre='';
		$this->envioPais='';
		$this->envioRegion='';
		$this->envioCiudad='';
		$this->envioDomicilio='';
		$this->envioCp='';
		$this->idAgile='';
		$this->IdActiveCampaign=0;
		$this->idTransportadora=0;
		$this->transportadoraNombre='';
		$this->transportadoraTelefono='';
		$this->codigoSeguimiento='';
		$this->MailSeguimientoEnviado=0;
		if( mysqli_num_rows($resultado)!=0 ){

			$arreglo=mysqli_fetch_array($resultado);
			$this->id=$arreglo[0];
			$this->fecha=$arreglo[1];
			$this->cliente=$arreglo[2];
			$this->estado=$arreglo[3];
			$this->vendedor=$arreglo[4];
			$this->formaDePago=$arreglo[5];
			$this->observaciones=$arreglo[6];
			$this->invoice=$arreglo[7];
			$this->total=$arreglo[8];
			$this->descuentoPorcentual=$arreglo[9];
			$this->descuentoNeto=$arreglo[10];
			$this->totalEnvio=$arreglo[11];
			$this->origen=$arreglo[13];
			$this->etapa=$arreglo[14];
			$this->tipoDeEnvio=$arreglo[15];
			$this->envioNombre=$arreglo[16];
			$this->envioPais=$arreglo[17];
			$this->envioRegion=$arreglo[18];
			$this->envioCiudad=$arreglo[19];
			$this->envioDomicilio=$arreglo[20];
			$this->envioCp=$arreglo[21];
			$this->idAgile=$arreglo[22];
			$this->IdActiveCampaign=$arreglo[23];
			$this->idTransportadora=$arreglo[24];
			$this->transportadoraNombre=$arreglo[25];
			$this->transportadoraTelefono=$arreglo[26];
			$this->codigoSeguimiento=$arreglo[27];
			$this->MailSeguimientoEnviado=$arreglo[28];
		}else{

			$this->id=0;
		}

	return $this->id;

	}


	public function grabar($conexion){
		if(($this->id =='0') || ($this->id =='') ){
			$SQL ="INSERT INTO pedido 
			 ( `fecha`,`cliente`,`estado`,`vendedor`,`formaDePago`,`observaciones`,`invoice`,`total`,`descuentoPorcentual`,`descuentoNeto`,`totalEnvio`,`origen`,`etapa`,`tipoDeEnvio`,`envioNombre`,`envioPais`,`envioRegion`,`envioCiudad`,`envioDomicilio`,`envioCp`,`idAgile`,`IdActiveCampaign`,`idTransportadora`,`transportadoraNombre`,`transportadoraTelefono`,`codigoSeguimiento`,`MailSeguimientoEnviado`) 
			 VALUES  (	'".mysqli_real_escape_string($conexion,$this->fecha). "',	'".mysqli_real_escape_string($conexion,$this->cliente). "',	'".mysqli_real_escape_string($conexion,$this->estado). "',	'".mysqli_real_escape_string($conexion,$this->vendedor). "',	'".mysqli_real_escape_string($conexion,$this->formaDePago). "',	'".mysqli_real_escape_string($conexion,$this->observaciones). "',	'".mysqli_real_escape_string($conexion,$this->invoice). "',	'".mysqli_real_escape_string($conexion,$this->total). "',	'".mysqli_real_escape_string($conexion,$this->descuentoPorcentual). "',	'".mysqli_real_escape_string($conexion,$this->descuentoNeto). "',	'".mysqli_real_escape_string($conexion,$this->totalEnvio). "',	'".mysqli_real_escape_string($conexion,$this->origen). "',	'".mysqli_real_escape_string($conexion,$this->etapa). "',	'".mysqli_real_escape_string($conexion,$this->tipoDeEnvio). "',	'".mysqli_real_escape_string($conexion,$this->envioNombre). "',	'".mysqli_real_escape_string($conexion,$this->envioPais). "',	'".mysqli_real_escape_string($conexion,$this->envioRegion). "',	'".mysqli_real_escape_string($conexion,$this->envioCiudad). "',	'".mysqli_real_escape_string($conexion,$this->envioDomicilio). "',	'".mysqli_real_escape_string($conexion,$this->envioCp). "',	'".mysqli_real_escape_string($conexion,$this->idAgile). "',	'".mysqli_real_escape_string($conexion,$this->IdActiveCampaign). "',	'".mysqli_real_escape_string($conexion,$this->idTransportadora). "',	'".mysqli_real_escape_string($conexion,$this->transportadoraNombre). "',	'".mysqli_real_escape_string($conexion,$this->transportadoraTelefono). "',	'".mysqli_real_escape_string($conexion,$this->codigoSeguimiento). "',	'".mysqli_real_escape_string($conexion,$this->MailSeguimientoEnviado). "' )";
				mysqli_query($conexion,$SQL);
				$this->id=mysqli_insert_Id($conexion);
		}else{
		$SQL = "UPDATE pedido SET 
				`fecha` = '" .mysqli_real_escape_string($conexion,$this->fecha). "',
				`cliente` = '" .mysqli_real_escape_string($conexion,$this->cliente). "',
				`estado` = '" .mysqli_real_escape_string($conexion,$this->estado). "',
				`vendedor` = '" .mysqli_real_escape_string($conexion,$this->vendedor). "',
				`formaDePago` = '" .mysqli_real_escape_string($conexion,$this->formaDePago). "',
				`observaciones` = '" .mysqli_real_escape_string($conexion,$this->observaciones). "',
				`invoice` = '" .mysqli_real_escape_string($conexion,$this->invoice). "',
				`total` = '" .mysqli_real_escape_string($conexion,$this->total). "',
				`descuentoPorcentual` = '" .mysqli_real_escape_string($conexion,$this->descuentoPorcentual). "',
				`descuentoNeto` = '" .mysqli_real_escape_string($conexion,$this->descuentoNeto). "',
				`totalEnvio` = '" .mysqli_real_escape_string($conexion,$this->totalEnvio). "',
				`origen` = '" .mysqli_real_escape_string($conexion,$this->origen). "',
				`etapa` = '" .mysqli_real_escape_string($conexion,$this->etapa). "',
				`tipoDeEnvio` = '" .mysqli_real_escape_string($conexion,$this->tipoDeEnvio). "',
				`envioNombre` = '" .mysqli_real_escape_string($conexion,$this->envioNombre). "',
				`envioPais` = '" .mysqli_real_escape_string($conexion,$this->envioPais). "',
				`envioRegion` = '" .mysqli_real_escape_string($conexion,$this->envioRegion). "',
				`envioCiudad` = '" .mysqli_real_escape_string($conexion,$this->envioCiudad). "',
				`envioDomicilio` = '" .mysqli_real_escape_string($conexion,$this->envioDomicilio). "',
				`envioCp` = '" .mysqli_real_escape_string($conexion,$this->envioCp). "',
				`idAgile` = '" .mysqli_real_escape_string($conexion,$this->idAgile). "',
				`IdActiveCampaign` = '" .mysqli_real_escape_string($conexion,$this->IdActiveCampaign). "',
				`idTransportadora` = '" .mysqli_real_escape_string($conexion,$this->idTransportadora). "',
				`transportadoraNombre` = '" .mysqli_real_escape_string($conexion,$this->transportadoraNombre). "',
				`transportadoraTelefono` = '" .mysqli_real_escape_string($conexion,$this->transportadoraTelefono). "',
				`codigoSeguimiento` = '" .mysqli_real_escape_string($conexion,$this->codigoSeguimiento). "',
				`MailSeguimientoEnviado` = '" .mysqli_real_escape_string($conexion,$this->MailSeguimientoEnviado). "' 
				WHERE `id`= '".$this->id."'";
				mysqli_query($conexion,$SQL);
		}
		//echo $SQL;
	return $this->id;
	}

public function EliminarDetalle($conexion){
	$SQL="UPDATE pedidodetalle 
				LEFT JOIN producto ON producto.id = pedidodetalle.producto
				SET producto.stock = stock + pedidodetalle.cantidad
			WHERE pedidodetalle.pedido = ".$this->id;
	mysqli_query($conexion,$SQL);

	$SQL = "DELETE FROM pedidodetalle WHERE pedido = $this->id";
	mysqli_query($conexion,$SQL);


}


public function EliminarDetalleNN($conexion){
	$SQL = "DELETE FROM pedidodetalleNN WHERE pedido = $this->id";
	mysqli_query($conexion,$SQL);
}

public function EliminarDescuentos($conexion){
	$SQL = "DELETE FROM pedidodescuentospromocion WHERE pedido = $this->id";
	mysqli_query($conexion,$SQL);
}
} // END class  pedido
?>