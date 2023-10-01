<?php class pais{
public $id;
	public $codigo;
	public $nombre;

	public function buscar($vId,$conexion){
		$SQL = "SELECT * FROM pais WHERE `codigo`= '".$vId."'";
		$resultado=mysqli_query($conexion,$SQL);
		$this->id=0;
		$this->codigo='';
		$this->nombre='';
		if( mysqli_num_rows($resultado)!=0 ){

			$arreglo=mysqli_fetch_array($resultado);
			$this->id=$arreglo[0];
			$this->codigo=$arreglo[1];
			$this->nombre=$arreglo[2];
		}else{

			$this->codigo=0;
		}

	return $this->id;

	}


	public function grabar($conexion){
		if(($this->id =='0') || ($this->id =='') ){
			$SQL ="INSERT INTO pais 
			 ( codigo, `nombre`) 
			 VALUES  (	'".mysqli_real_escape_string($conexion,$this->codigo). "' ,'".mysqli_real_escape_string($conexion,$this->nombre). "' )";
				mysqli_query($conexion,$SQL);
				$this->id=mysqli_insert_Id($conexion);
		}else{
		$SQL = "UPDATE pais SET 
				`codigo` = '" .mysqli_real_escape_string($conexion,$this->codigo). "' 
				`nombre` = '" .mysqli_real_escape_string($conexion,$this->nombre). "' 
				WHERE `codigo`= '".$this->codigo."'";
				mysqli_query($conexion,$SQL);
		}
	return $this->id;
	}

} // END class  pais
?>