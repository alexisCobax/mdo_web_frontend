<?php class plataformaproducto{

	public $idProducto;
	public $idPlataforma;

	public function buscar($vId,$conexion){
		$SQL = "SELECT * FROM plataformaproducto WHERE `idPlataforma`= '".$vId."'";
		$resultado=mysqli_query($conexion,$SQL);

		$this->idProducto=0;
		$this->idPlataforma=0;
		if( mysqli_num_rows($resultado)!=0 ){

			$arreglo=mysqli_fetch_array($resultado);
			$this->idProducto=$arreglo[0];
			$this->idPlataforma=$arreglo[1];
		}else{

			$this->idPlataforma=0;
		}

	return $this->id;

	}


	public function grabar($conexion){
		if(($this->id =='0') || ($this->id =='') ){
			$SQL ="INSERT INTO plataformaproducto 
			 ( `idProducto`) 
			 VALUES  (	'".mysqli_real_escape_string($conexion,$this->idProducto). "' )";
				mysqli_query($conexion,$SQL);
				$this->id=mysqli_insert_Id($conexion);
		}else{
		$SQL = "UPDATE plataformaproducto SET 
				`idProducto` = '" .mysqli_real_escape_string($conexion,$this->idProducto). "' 
				WHERE `idPlataforma`= '".$this->idPlataforma."'";
				mysqli_query($conexion,$SQL);
		}
	return $this->id;
	}

} // END class  plataformaproducto
?>