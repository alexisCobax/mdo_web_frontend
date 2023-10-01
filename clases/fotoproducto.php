<?php 
include_once __DIR__."/producto.php";
class fotoProducto{

	public $id=0;
	public $idProducto=0;
	public $orden=0;

	public function buscar($vId,$conexion){
		$SQL = "SELECT * FROM fotoproducto WHERE `id`= '".$vId."'";
		$resultado=mysqli_query($conexion,$SQL);

		$this->id=0;
		$this->idProducto=0;
		$this->orden=0;
		if( mysqli_num_rows($resultado)!=0 ){

			$arreglo=mysqli_fetch_array($resultado);
			$this->id=$arreglo[0];
			$this->idProducto=$arreglo[1];
			$this->orden=$arreglo[2];
		}else{

			$this->id=0;
		}
//echo $SQL;
//echo "foto:".$this->id;
	return $this->id;

	}
	public function grabar($conexion){
		if(($this->id =='0') || ($this->id =='') ){
			$SQL ="INSERT INTO fotoproducto 
			 ( `idProducto`,`orden`) 
			 VALUES  (	'".mysqli_real_escape_string($conexion,$this->idProducto). "',	'".mysqli_real_escape_string($conexion,$this->orden). "')";
				mysqli_query($conexion,$SQL);
				$this->id=mysqli_insert_Id($conexion);
		}else{
		$SQL = "UPDATE fotoroducto SET 
				`orden` = '" .mysqli_real_escape_string($conexion,$this->orden). "' 
				WHERE `id`= '".$this->id."'";
				mysqli_query($conexion,$SQL);
		}
		//echo $SQL;
	return $this->id;
	}
	public function eliminar($conexion){
		if(($this->id !='0') && ($this->id !='') ){
			$SQL ="DELETE FROM fotoproducto WHERE id = '".$this->id."'";
			mysqli_query($conexion,$SQL);
				
			$pro = new producto;
			$pro->buscar($this->idProducto, $conexion);
			if($pro->imagenPrincipal == $this->id){
				$pro->imagenPrincipal = 0;
				$pro->grabar($conexion);
			}

		}
	return $this->id;
	}
} // END class  fotoproducto
?>