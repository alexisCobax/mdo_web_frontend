<?php class invoicedetalle{

	public $id;
	public $qordered;
	public $qshipped;
	public $qborder;
	public $itemNumber;
	public $Descripcion;
	public $listPrice;
	public $netPrice;
	public $invoice;

	public function buscar($vId,$conexion){
		$SQL = "SELECT * FROM invoicedetalle WHERE `id`= '".$vId."'";
		$resultado=mysqli_query($conexion,$SQL);

		$this->id=0;
		$this->qordered=0;
		$this->qshipped=0;
		$this->qborder=0;
		$this->itemNumber=;
		$this->Descripcion=;
		$this->listPrice=0;
		$this->netPrice=0;
		$this->invoice=0;
		if( mysqli_num_rows($resultado)!=0 ){

			$arreglo=mysqli_fetch_array($resultado);
			$this->id=$arreglo[0];
			$this->qordered=$arreglo[1];
			$this->qshipped=$arreglo[2];
			$this->qborder=$arreglo[3];
			$this->itemNumber=$arreglo[4];
			$this->Descripcion=$arreglo[5];
			$this->listPrice=$arreglo[6];
			$this->netPrice=$arreglo[7];
			$this->invoice=$arreglo[8];
		}else{

			$this->id=0;
		}

	return $this->id;

	}


	public function grabar($conexion){
		if(($this->id =='0') || ($this->id =='') ){
			$SQL ="INSERT INTO invoicedetalle 
			 ( `qordered`,`qshipped`,`qborder`,`itemNumber`,`Descripcion`,`listPrice`,`netPrice`,`invoice`) 
			 VALUES  (	'".mysqli_real_escape_string($conexion,$this->qordered). "',	'".mysqli_real_escape_string($conexion,$this->qshipped). "',	'".mysqli_real_escape_string($conexion,$this->qborder). "',	'".mysqli_real_escape_string($conexion,$this->itemNumber). "',	'".mysqli_real_escape_string($conexion,$this->Descripcion). "',	'".mysqli_real_escape_string($conexion,$this->listPrice). "',	'".mysqli_real_escape_string($conexion,$this->netPrice). "',	'".mysqli_real_escape_string($conexion,$this->invoice). "' )";
				mysqli_query($conexion,$SQL);
				$this->id=mysqli_insert_Id($conexion);
		}else{
		$SQL = "UPDATE invoicedetalle SET 
				`qordered` = '" .mysqli_real_escape_string($conexion,$this->qordered). "',
				`qshipped` = '" .mysqli_real_escape_string($conexion,$this->qshipped). "',
				`qborder` = '" .mysqli_real_escape_string($conexion,$this->qborder). "',
				`itemNumber` = '" .mysqli_real_escape_string($conexion,$this->itemNumber). "',
				`Descripcion` = '" .mysqli_real_escape_string($conexion,$this->Descripcion). "',
				`listPrice` = '" .mysqli_real_escape_string($conexion,$this->listPrice). "',
				`netPrice` = '" .mysqli_real_escape_string($conexion,$this->netPrice). "',
				`invoice` = '" .mysqli_real_escape_string($conexion,$this->invoice). "' 
				WHERE `id`= '".$this->id."'";
				mysqli_query($conexion,$SQL);
		}
	return $this->id;
	}

} // END class  invoicedetalle
?>