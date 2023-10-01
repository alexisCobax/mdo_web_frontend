<?php class marcaproducto{

	public $id;
	public $nombre='';
	public $propia=0;
	public $VIP=0;
	public $logo='';
	public $MostrarEnWeb=0;
	public $suspendido=0;

	public function buscar($vId,$conexion){
		$SQL = "SELECT * FROM marcaproducto WHERE `id`= '".$vId."'";
		$resultado=mysqli_query($conexion,$SQL);

		$this->id=0;
		$this->nombre='';
		$this->propia=0;
		$this->VIP=0;
		$this->logo='';
		$this->MostrarEnWeb=0;
		$this->suspendido=0;
		if( mysqli_num_rows($resultado)!=0 ){

			$arreglo=mysqli_fetch_array($resultado);
			$this->id=$arreglo[0];
			$this->nombre=$arreglo[1];
			$this->propia=$arreglo[2];
			$this->VIP=$arreglo[3];
			$this->logo=$arreglo[4];
			$this->MostrarEnWeb=$arreglo[5];
			$this->suspendido=$arreglo[6];
		}else{

			$this->id=0;
		}

	return $this->id;

	}


	public function grabar($conexion){
		if(($this->id =='0') || ($this->id =='') ){
			$SQL ="INSERT INTO marcaproducto 
			 ( `nombre`,`propia`,`VIP`,`logo`,`MostrarEnWeb`,`suspendido`) 
			 VALUES  (	'".mysqli_real_escape_string($conexion,$this->nombre). "',	'".mysqli_real_escape_string($conexion,$this->propia). "',	'".mysqli_real_escape_string($conexion,$this->VIP). "',	'".mysqli_real_escape_string($conexion,$this->logo). "',	'".mysqli_real_escape_string($conexion,$this->MostrarEnWeb). "',	".mysqli_real_escape_string($conexion,$this->suspendido). " )";
				mysqli_query($conexion,$SQL);
				$this->id=mysqli_insert_Id($conexion);
		}else{
		$SQL = "UPDATE marcaproducto SET 
				`nombre` = '" .mysqli_real_escape_string($conexion,$this->nombre). "',
				`propia` = '" .mysqli_real_escape_string($conexion,$this->propia). "',
				`VIP` = '" .mysqli_real_escape_string($conexion,$this->VIP). "',
				`logo` = '" .mysqli_real_escape_string($conexion,$this->logo). "',
				`MostrarEnWeb` = '" .mysqli_real_escape_string($conexion,$this->MostrarEnWeb). "',
				`suspendido` = " .mysqli_real_escape_string($conexion,$this->suspendido). " 
				WHERE `id`= '".$this->id."'";
				mysqli_query($conexion,$SQL);
		}
	return $this->id;
	}

} // END class  marcaproducto
?>