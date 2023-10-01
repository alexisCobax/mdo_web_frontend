<?php class cliente2{

	public $id;
	public $nombre;
	public $direccion;
	public $codigoPostal;
	public $telefono;
	public $email;
	public $fax;
	public $contacto;
	public $puestoContacto;
	public $transportadora;
	public $telefonoTransportadora;
	public $observaciones;
	public $usuario;
	public $suspendido;
	public $web;
	public $direccionShape;
	public $direccionBill;
	public $vendedor;
	public $ciudad;
	public $pais;
	public $usuarioVIP;
	public $claveVIP;
	public $VIP;
	public $ctacte;
	public $cpShape;
	public $paisShape;
	public $primeraCompra;
	public $cantidadDeCompras;
	public $idAgile;
	public $montoMaximoDePago;
	public $WhatsApp;
	public $Notas;
	public $tipoDeEnvio;
	public $nombreEnvio;
	public $regionEnvio;
	public $ciudadEnvio;
	public $fechaAlta;
	public $ipAlta;
	public $ultimoLogin;
	public $ipUltimoLogin;
	public $prospecto;
	public $contactoApellido;

	public function buscar($vId,$conexion){
		$SQL = "SELECT * FROM cliente2 WHERE `id`= '".$vId."'";
		$resultado=mysqli_query($conexion,$SQL);

		$this->id=0;
		$this->nombre=;
		$this->direccion=;
		$this->codigoPostal=;
		$this->telefono=;
		$this->email=;
		$this->fax=;
		$this->contacto=;
		$this->puestoContacto=;
		$this->transportadora=;
		$this->telefonoTransportadora=;
		$this->observaciones=;
		$this->usuario=0;
		$this->suspendido=0;
		$this->web=;
		$this->direccionShape=;
		$this->direccionBill=;
		$this->vendedor=0;
		$this->ciudad=;
		$this->pais=;
		$this->usuarioVIP=;
		$this->claveVIP=;
		$this->VIP=0;
		$this->ctacte=0;
		$this->cpShape=;
		$this->paisShape=;
		$this->primeraCompra=date('Y-m-d');
		$this->cantidadDeCompras=0;
		$this->idAgile=;
		$this->montoMaximoDePago=0;
		$this->WhatsApp=;
		$this->Notas=;
		$this->tipoDeEnvio=0;
		$this->nombreEnvio=;
		$this->regionEnvio=;
		$this->ciudadEnvio=;
		$this->fechaAlta=date('Y-m-d');
		$this->ipAlta=;
		$this->ultimoLogin=date('Y-m-d');
		$this->ipUltimoLogin=;
		$this->prospecto=0;
		$this->contactoApellido=;
		if( mysqli_num_rows($resultado)!=0 ){

			$arreglo=mysqli_fetch_array($resultado);
			$this->id=$arreglo[0];
			$this->nombre=$arreglo[1];
			$this->direccion=$arreglo[2];
			$this->codigoPostal=$arreglo[3];
			$this->telefono=$arreglo[4];
			$this->email=$arreglo[5];
			$this->fax=$arreglo[6];
			$this->contacto=$arreglo[7];
			$this->puestoContacto=$arreglo[8];
			$this->transportadora=$arreglo[9];
			$this->telefonoTransportadora=$arreglo[10];
			$this->observaciones=$arreglo[11];
			$this->usuario=$arreglo[12];
			$this->suspendido=$arreglo[13];
			$this->web=$arreglo[14];
			$this->direccionShape=$arreglo[15];
			$this->direccionBill=$arreglo[16];
			$this->vendedor=$arreglo[17];
			$this->ciudad=$arreglo[18];
			$this->pais=$arreglo[19];
			$this->usuarioVIP=$arreglo[20];
			$this->claveVIP=$arreglo[21];
			$this->VIP=$arreglo[22];
			$this->ctacte=$arreglo[23];
			$this->cpShape=$arreglo[24];
			$this->paisShape=$arreglo[25];
			$this->primeraCompra=$arreglo[26];
			$this->cantidadDeCompras=$arreglo[27];
			$this->idAgile=$arreglo[28];
			$this->montoMaximoDePago=$arreglo[29];
			$this->WhatsApp=$arreglo[30];
			$this->Notas=$arreglo[31];
			$this->tipoDeEnvio=$arreglo[32];
			$this->nombreEnvio=$arreglo[33];
			$this->regionEnvio=$arreglo[34];
			$this->ciudadEnvio=$arreglo[35];
			$this->fechaAlta=$arreglo[36];
			$this->ipAlta=$arreglo[37];
			$this->ultimoLogin=$arreglo[38];
			$this->ipUltimoLogin=$arreglo[39];
			$this->prospecto=$arreglo[40];
			$this->contactoApellido=$arreglo[41];
		}else{

			$this->id=0;
		}

	return $this->id;

	}


	public function grabar($conexion){
		if(($this->id =='0') || ($this->id =='') ){
			$SQL ="INSERT INTO cliente2 
			 ( `nombre`,`direccion`,`codigoPostal`,`telefono`,`email`,`fax`,`contacto`,`puestoContacto`,`transportadora`,`telefonoTransportadora`,`observaciones`,`usuario`,`suspendido`,`web`,`direccionShape`,`direccionBill`,`vendedor`,`ciudad`,`pais`,`usuarioVIP`,`claveVIP`,`VIP`,`ctacte`,`cpShape`,`paisShape`,`primeraCompra`,`cantidadDeCompras`,`idAgile`,`montoMaximoDePago`,`WhatsApp`,`Notas`,`tipoDeEnvio`,`nombreEnvio`,`regionEnvio`,`ciudadEnvio`,`fechaAlta`,`ipAlta`,`ultimoLogin`,`ipUltimoLogin`,`prospecto`,`contactoApellido`) 
			 VALUES  (	'".mysqli_real_escape_string($conexion,$this->nombre). "',	'".mysqli_real_escape_string($conexion,$this->direccion). "',	'".mysqli_real_escape_string($conexion,$this->codigoPostal). "',	'".mysqli_real_escape_string($conexion,$this->telefono). "',	'".mysqli_real_escape_string($conexion,$this->email). "',	'".mysqli_real_escape_string($conexion,$this->fax). "',	'".mysqli_real_escape_string($conexion,$this->contacto). "',	'".mysqli_real_escape_string($conexion,$this->puestoContacto). "',	'".mysqli_real_escape_string($conexion,$this->transportadora). "',	'".mysqli_real_escape_string($conexion,$this->telefonoTransportadora). "',	'".mysqli_real_escape_string($conexion,$this->observaciones). "',	'".mysqli_real_escape_string($conexion,$this->usuario). "',	'".mysqli_real_escape_string($conexion,$this->suspendido). "',	'".mysqli_real_escape_string($conexion,$this->web). "',	'".mysqli_real_escape_string($conexion,$this->direccionShape). "',	'".mysqli_real_escape_string($conexion,$this->direccionBill). "',	'".mysqli_real_escape_string($conexion,$this->vendedor). "',	'".mysqli_real_escape_string($conexion,$this->ciudad). "',	'".mysqli_real_escape_string($conexion,$this->pais). "',	'".mysqli_real_escape_string($conexion,$this->usuarioVIP). "',	'".mysqli_real_escape_string($conexion,$this->claveVIP). "',	'".mysqli_real_escape_string($conexion,$this->VIP). "',	'".mysqli_real_escape_string($conexion,$this->ctacte). "',	'".mysqli_real_escape_string($conexion,$this->cpShape). "',	'".mysqli_real_escape_string($conexion,$this->paisShape). "',	'".mysqli_real_escape_string($conexion,$this->primeraCompra). "',	'".mysqli_real_escape_string($conexion,$this->cantidadDeCompras). "',	'".mysqli_real_escape_string($conexion,$this->idAgile). "',	'".mysqli_real_escape_string($conexion,$this->montoMaximoDePago). "',	'".mysqli_real_escape_string($conexion,$this->WhatsApp). "',	'".mysqli_real_escape_string($conexion,$this->Notas). "',	'".mysqli_real_escape_string($conexion,$this->tipoDeEnvio). "',	'".mysqli_real_escape_string($conexion,$this->nombreEnvio). "',	'".mysqli_real_escape_string($conexion,$this->regionEnvio). "',	'".mysqli_real_escape_string($conexion,$this->ciudadEnvio). "',	'".mysqli_real_escape_string($conexion,$this->fechaAlta). "',	'".mysqli_real_escape_string($conexion,$this->ipAlta). "',	'".mysqli_real_escape_string($conexion,$this->ultimoLogin). "',	'".mysqli_real_escape_string($conexion,$this->ipUltimoLogin). "',	'".mysqli_real_escape_string($conexion,$this->prospecto). "',	'".mysqli_real_escape_string($conexion,$this->contactoApellido). "' )";
				mysqli_query($conexion,$SQL);
				$this->id=mysqli_insert_Id($conexion);
		}else{
		$SQL = "UPDATE cliente2 SET 
				`nombre` = '" .mysqli_real_escape_string($conexion,$this->nombre). "',
				`direccion` = '" .mysqli_real_escape_string($conexion,$this->direccion). "',
				`codigoPostal` = '" .mysqli_real_escape_string($conexion,$this->codigoPostal). "',
				`telefono` = '" .mysqli_real_escape_string($conexion,$this->telefono). "',
				`email` = '" .mysqli_real_escape_string($conexion,$this->email). "',
				`fax` = '" .mysqli_real_escape_string($conexion,$this->fax). "',
				`contacto` = '" .mysqli_real_escape_string($conexion,$this->contacto). "',
				`puestoContacto` = '" .mysqli_real_escape_string($conexion,$this->puestoContacto). "',
				`transportadora` = '" .mysqli_real_escape_string($conexion,$this->transportadora). "',
				`telefonoTransportadora` = '" .mysqli_real_escape_string($conexion,$this->telefonoTransportadora). "',
				`observaciones` = '" .mysqli_real_escape_string($conexion,$this->observaciones). "',
				`usuario` = '" .mysqli_real_escape_string($conexion,$this->usuario). "',
				`suspendido` = '" .mysqli_real_escape_string($conexion,$this->suspendido). "',
				`web` = '" .mysqli_real_escape_string($conexion,$this->web). "',
				`direccionShape` = '" .mysqli_real_escape_string($conexion,$this->direccionShape). "',
				`direccionBill` = '" .mysqli_real_escape_string($conexion,$this->direccionBill). "',
				`vendedor` = '" .mysqli_real_escape_string($conexion,$this->vendedor). "',
				`ciudad` = '" .mysqli_real_escape_string($conexion,$this->ciudad). "',
				`pais` = '" .mysqli_real_escape_string($conexion,$this->pais). "',
				`usuarioVIP` = '" .mysqli_real_escape_string($conexion,$this->usuarioVIP). "',
				`claveVIP` = '" .mysqli_real_escape_string($conexion,$this->claveVIP). "',
				`VIP` = '" .mysqli_real_escape_string($conexion,$this->VIP). "',
				`ctacte` = '" .mysqli_real_escape_string($conexion,$this->ctacte). "',
				`cpShape` = '" .mysqli_real_escape_string($conexion,$this->cpShape). "',
				`paisShape` = '" .mysqli_real_escape_string($conexion,$this->paisShape). "',
				`primeraCompra` = '" .mysqli_real_escape_string($conexion,$this->primeraCompra). "',
				`cantidadDeCompras` = '" .mysqli_real_escape_string($conexion,$this->cantidadDeCompras). "',
				`idAgile` = '" .mysqli_real_escape_string($conexion,$this->idAgile). "',
				`montoMaximoDePago` = '" .mysqli_real_escape_string($conexion,$this->montoMaximoDePago). "',
				`WhatsApp` = '" .mysqli_real_escape_string($conexion,$this->WhatsApp). "',
				`Notas` = '" .mysqli_real_escape_string($conexion,$this->Notas). "',
				`tipoDeEnvio` = '" .mysqli_real_escape_string($conexion,$this->tipoDeEnvio). "',
				`nombreEnvio` = '" .mysqli_real_escape_string($conexion,$this->nombreEnvio). "',
				`regionEnvio` = '" .mysqli_real_escape_string($conexion,$this->regionEnvio). "',
				`ciudadEnvio` = '" .mysqli_real_escape_string($conexion,$this->ciudadEnvio). "',
				`fechaAlta` = '" .mysqli_real_escape_string($conexion,$this->fechaAlta). "',
				`ipAlta` = '" .mysqli_real_escape_string($conexion,$this->ipAlta). "',
				`ultimoLogin` = '" .mysqli_real_escape_string($conexion,$this->ultimoLogin). "',
				`ipUltimoLogin` = '" .mysqli_real_escape_string($conexion,$this->ipUltimoLogin). "',
				`prospecto` = '" .mysqli_real_escape_string($conexion,$this->prospecto). "',
				`contactoApellido` = '" .mysqli_real_escape_string($conexion,$this->contactoApellido). "' 
				WHERE `id`= '".$this->id."'";
				mysqli_query($conexion,$SQL);
		}
	return $this->id;
	}

} // END class  cliente2
?>