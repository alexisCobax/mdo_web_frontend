<?php class banners{

	public $id;
	public $tipoUbicacion;
	public $codigo;
	public $suspendido;
	public $orden;
	public $tipoArchivo;
	public $link;
	public $nombre;
	public $tipo;
	public $texto1;
	public $texto2;

	public function buscar($vId,$conexion){
		$SQL = "SELECT * FROM banners WHERE `id`= '".$vId."'";
		$resultado=mysqli_query($conexion,$SQL);

		$this->id=0;
		$this->tipoUbicacion=0;
		$this->codigo=;
		$this->suspendido=0;
		$this->orden=0;
		$this->tipoArchivo=;
		$this->link=;
		$this->nombre=;
		$this->tipo=;
		$this->texto1=;
		$this->texto2=;
		if( mysqli_num_rows($resultado)!=0 ){

			$arreglo=mysqli_fetch_array($resultado);
			$this->id=$arreglo[0];
			$this->tipoUbicacion=$arreglo[1];
			$this->codigo=$arreglo[2];
			$this->suspendido=$arreglo[3];
			$this->orden=$arreglo[4];
			$this->tipoArchivo=$arreglo[5];
			$this->link=$arreglo[6];
			$this->nombre=$arreglo[7];
			$this->tipo=$arreglo[8];
			$this->texto1=$arreglo[9];
			$this->texto2=$arreglo[10];
		}else{

			$this->id=0;
		}

	return $this->id;

	}


	public function grabar($conexion){
		if(($this->id =='0') || ($this->id =='') ){
			$SQL ="INSERT INTO banners 
			 ( `tipoUbicacion`,`codigo`,`suspendido`,`orden`,`tipoArchivo`,`link`,`nombre`,`tipo`,`texto1`,`texto2`) 
			 VALUES  (	'".mysqli_real_escape_string($conexion,$this->tipoUbicacion). "',	'".mysqli_real_escape_string($conexion,$this->codigo). "',	'".mysqli_real_escape_string($conexion,$this->suspendido). "',	'".mysqli_real_escape_string($conexion,$this->orden). "',	'".mysqli_real_escape_string($conexion,$this->tipoArchivo). "',	'".mysqli_real_escape_string($conexion,$this->link). "',	'".mysqli_real_escape_string($conexion,$this->nombre). "',	'".mysqli_real_escape_string($conexion,$this->tipo). "',	'".mysqli_real_escape_string($conexion,$this->texto1). "',	'".mysqli_real_escape_string($conexion,$this->texto2). "' )";
				mysqli_query($conexion,$SQL);
				$this->id=mysqli_insert_Id($conexion);
		}else{
		$SQL = "UPDATE banners SET 
				`tipoUbicacion` = '" .mysqli_real_escape_string($conexion,$this->tipoUbicacion). "',
				`codigo` = '" .mysqli_real_escape_string($conexion,$this->codigo). "',
				`suspendido` = '" .mysqli_real_escape_string($conexion,$this->suspendido). "',
				`orden` = '" .mysqli_real_escape_string($conexion,$this->orden). "',
				`tipoArchivo` = '" .mysqli_real_escape_string($conexion,$this->tipoArchivo). "',
				`link` = '" .mysqli_real_escape_string($conexion,$this->link). "',
				`nombre` = '" .mysqli_real_escape_string($conexion,$this->nombre). "',
				`tipo` = '" .mysqli_real_escape_string($conexion,$this->tipo). "',
				`texto1` = '" .mysqli_real_escape_string($conexion,$this->texto1). "',
				`texto2` = '" .mysqli_real_escape_string($conexion,$this->texto2). "' 
				WHERE `id`= '".$this->id."'";
				mysqli_query($conexion,$SQL);
		}
	return $this->id;
	}

} // END class  banners
?>