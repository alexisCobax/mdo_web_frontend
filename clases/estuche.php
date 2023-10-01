<?php class estuche{

	public $id;
	public $nombre;

	
	public function buscar($vId,$conexion){
		$SQL = "SELECT * FROM estuche WHERE `id`= '".$vId."'";
		$resultado=mysqli_query($conexion,$SQL);

		$this->id=0;
		$this->nombre='';
		if( mysqli_num_rows($resultado)!=0 ){

			$arreglo=mysqli_fetch_array($resultado);
			$this->id=$arreglo[0];
			$this->nombre=$arreglo[1];
		}else{

			$this->id=0;
		}

	return $this->id;

	}
} // END class  estuche
?>