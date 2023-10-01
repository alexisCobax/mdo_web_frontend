<?php class proveedor{

	public $id;
	public $nombre;
	public $direccion;
	public $ciudad;
	public $codigoPostal;
	public $telefono;
	public $movil;
	public $email;
	public $fax;
	public $contacto;
	public $transportadora;
	public $telefonoTransportadora;
	public $observaciones;
	public $formaDePago;
	public $suspendido;

	public function buscar($vId,$conexion){
		$SQL = "SELECT * FROM proveedor WHERE `id`= '".$vId."'";
		$resultado=mysqli_query($conexion,$SQL);

		$this->id=0;
		$this->nombre=;
		$this->direccion=;
		$this->ciudad=0;
		$this->codigoPostal=;
		$this->telefono=;
		$this->movil=;
		$this->email=;
		$this->fax=;
		$this->contacto=;
		$this->transportadora=;
		$this->telefonoTransportadora=;
		$this->observaciones=;
		$this->formaDePago=;
		$this->suspendido=0;
		if( mysqli_num_rows($resultado)!=0 ){

			$arreglo=mysqli_fetch_array($resultado);
			$this->id=$arreglo[0];
			$this->nombre=$arreglo[1];
			$this->direccion=$arreglo[2];
			$this->ciudad=$arreglo[3];
			$this->codigoPostal=$arreglo[4];
			$this->telefono=$arreglo[5];
			$this->movil=$arreglo[6];
			$this->email=$arreglo[7];
			$this->fax=$arreglo[8];
			$this->contacto=$arreglo[9];
			$this->transportadora=$arreglo[10];
			$this->telefonoTransportadora=$arreglo[11];
			$this->observaciones=$arreglo[12];
			$this->formaDePago=$arreglo[13];
			$this->suspendido=$arreglo[14];
		}else{

			$this->id=0;
		}

	return $this->id;

	}


	public function grabar($conexion){
		if(($this->id =='0') || ($this->id =='') ){
			$SQL ="INSERT INTO proveedor 
			 ( `nombre`,`direccion`,`ciudad`,`codigoPostal`,`telefono`,`movil`,`email`,`fax`,`contacto`,`transportadora`,`telefonoTransportadora`,`observaciones`,`formaDePago`,`suspendido`) 
			 VALUES  (	'".mysqli_real_escape_string($conexion,$this->nombre). "',	'".mysqli_real_escape_string($conexion,$this->direccion). "',	'".mysqli_real_escape_string($conexion,$this->ciudad). "',	'".mysqli_real_escape_string($conexion,$this->codigoPostal). "',	'".mysqli_real_escape_string($conexion,$this->telefono). "',	'".mysqli_real_escape_string($conexion,$this->movil). "',	'".mysqli_real_escape_string($conexion,$this->email). "',	'".mysqli_real_escape_string($conexion,$this->fax). "',	'".mysqli_real_escape_string($conexion,$this->contacto). "',	'".mysqli_real_escape_string($conexion,$this->transportadora). "',	'".mysqli_real_escape_string($conexion,$this->telefonoTransportadora). "',	'".mysqli_real_escape_string($conexion,$this->observaciones). "',	'".mysqli_real_escape_string($conexion,$this->formaDePago). "',	'".mysqli_real_escape_string($conexion,$this->suspendido). "' )";
				mysqli_query($conexion,$SQL);
				$this->id=mysqli_insert_Id($conexion);
		}else{
		$SQL = "UPDATE proveedor SET 
				`nombre` = '" .mysqli_real_escape_string($conexion,$this->nombre). "',
				`direccion` = '" .mysqli_real_escape_string($conexion,$this->direccion). "',
				`ciudad` = '" .mysqli_real_escape_string($conexion,$this->ciudad). "',
				`codigoPostal` = '" .mysqli_real_escape_string($conexion,$this->codigoPostal). "',
				`telefono` = '" .mysqli_real_escape_string($conexion,$this->telefono). "',
				`movil` = '" .mysqli_real_escape_string($conexion,$this->movil). "',
				`email` = '" .mysqli_real_escape_string($conexion,$this->email). "',
				`fax` = '" .mysqli_real_escape_string($conexion,$this->fax). "',
				`contacto` = '" .mysqli_real_escape_string($conexion,$this->contacto). "',
				`transportadora` = '" .mysqli_real_escape_string($conexion,$this->transportadora). "',
				`telefonoTransportadora` = '" .mysqli_real_escape_string($conexion,$this->telefonoTransportadora). "',
				`observaciones` = '" .mysqli_real_escape_string($conexion,$this->observaciones). "',
				`formaDePago` = '" .mysqli_real_escape_string($conexion,$this->formaDePago). "',
				`suspendido` = '" .mysqli_real_escape_string($conexion,$this->suspendido). "' 
				WHERE `id`= '".$this->id."'";
				mysqli_query($conexion,$SQL);
		}
	return $this->id;
	}

} // END class  proveedor
?>