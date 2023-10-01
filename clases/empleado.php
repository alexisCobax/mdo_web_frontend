<?php class empleado{

	public $id;
	public $nombre;
	public $puesto;
	public $suspendido;
	public $usuario;
	public $direccion;
	public $telefono;
	public $email;
	public $ciudad;

	public function buscar($vId,$conexion){
		$SQL = "SELECT * FROM empleado WHERE `id`= '".$vId."'";
		$resultado=mysqli_query($conexion,$SQL);

		$this->id=0;
		$this->nombre='';
		$this->puesto=0;
		$this->suspendido=0;
		$this->usuario=0;
		$this->direccion='';
		$this->telefono='';
		$this->email='';
		$this->ciudad=0;
		if( mysqli_num_rows($resultado)!=0 ){

			$arreglo=mysqli_fetch_array($resultado);
			$this->id=$arreglo[0];
			$this->nombre=$arreglo[1];
			$this->puesto=$arreglo[2];
			$this->suspendido=$arreglo[3];
			$this->usuario=$arreglo[4];
			$this->direccion=$arreglo[5];
			$this->telefono=$arreglo[6];
			$this->email=$arreglo[7];
			$this->ciudad=$arreglo[8];
		}else{

			$this->id=0;
		}

	return $this->id;

	}


	public function grabar($conexion){
		if(($this->id =='0') || ($this->id =='') ){
			$SQL ="INSERT INTO empleado 
			 ( `nombre`,`puesto`,`suspendido`,`usuario`,`direccion`,`telefono`,`email`,`ciudad`) 
			 VALUES  (	'".mysqli_real_escape_string($conexion,$this->nombre). "',	'".mysqli_real_escape_string($conexion,$this->puesto). "',	'".mysqli_real_escape_string($conexion,$this->suspendido). "',	'".mysqli_real_escape_string($conexion,$this->usuario). "',	'".mysqli_real_escape_string($conexion,$this->direccion). "',	'".mysqli_real_escape_string($conexion,$this->telefono). "',	'".mysqli_real_escape_string($conexion,$this->email). "',	'".mysqli_real_escape_string($conexion,$this->ciudad). "' )";
				mysqli_query($conexion,$SQL);
				$this->id=mysqli_insert_Id($conexion);
		}else{
		$SQL = "UPDATE empleado SET 
				`nombre` = '" .mysqli_real_escape_string($conexion,$this->nombre). "',
				`puesto` = '" .mysqli_real_escape_string($conexion,$this->puesto). "',
				`suspendido` = '" .mysqli_real_escape_string($conexion,$this->suspendido). "',
				`usuario` = '" .mysqli_real_escape_string($conexion,$this->usuario). "',
				`direccion` = '" .mysqli_real_escape_string($conexion,$this->direccion). "',
				`telefono` = '" .mysqli_real_escape_string($conexion,$this->telefono). "',
				`email` = '" .mysqli_real_escape_string($conexion,$this->email). "',
				`ciudad` = '" .mysqli_real_escape_string($conexion,$this->ciudad). "' 
				WHERE `id`= '".$this->id."'";
				mysqli_query($conexion,$SQL);
		}
	return $this->id;
	}

} // END class  empleado
?>