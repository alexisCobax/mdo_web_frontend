<?php class producto{

	public $id;
	public $nombre;
	public $descripcion;
	public $tipo;
	public $categoria;
	public $marca;
	public $material;
	public $estuche;
	public $sexo;
	public $proveedor;
	public $precio;
	public $suspendido;
	public $comision;
	public $stock;
	public $stockMinimo;
	public $codigo;
	public $alarmaStockMinimo;
	public $color;
	public $colorPrincipal=0;
	public $colorSecundario=0;
	public $tamano;
	public $ubicacion;
	public $grupo;
	public $pagina;
	public $costo;
	public $bestBrasil;
	public $posicion;
	public $stockRoto;
	public $ultimoIngresoDeMercaderia;
	public $ultimaVentaDeMercaderia;
	public $genero;
	public $imagenPrincipal;
	public $UPCreal;
	public $mdoNet;
	public $jet;
	public $precioJet;
	public $stockJet;
	public $multipack;
	public $nodeJet;
	public $nombreEN;
	public $descripcionEN;
	public $peso;
	public $enviadoAJet;
	public $stockFalabella;
	public $precioFalabella;
	public $verEnFalabella;
	public $enviadoAFalabella;
	public $categoriaFalabella;
	public $marcaFalabella;
	public $descripcionFalabella;
	public $precioPromocional;
	public $destacado;
	public $largo;
	public $alto;
	public $ancho;
	public $descripcionLarga;

	public function buscar($vId,$conexion){
		$SQL = "SELECT * FROM producto WHERE `id`= '".$vId."'";
		$resultado=mysqli_query($conexion,$SQL);

		$this->id=0;
		$this->nombre='';
		$this->descripcion='';
		$this->tipo=0;
		$this->categoria=0;
		$this->marca=0;
		$this->material=0;
		$this->estuche=0;
		$this->sexo=0;
		$this->proveedor=0;
		$this->precio=0;
		$this->suspendido=0;
		$this->comision=0;
		$this->stock=0;
		$this->stockMinimo=0;
		$this->codigo='';
		$this->alarmaStockMinimo=0;
		$this->color='';
		$this->colorPrincipal=0;
		$this->colorSecundario=0;
		$this->tamano=0;
		$this->ubicacion='';
		$this->grupo=0;
		$this->pagina=0;
		$this->costo=0;
		$this->bestBrasil=0;
		$this->posicion=0;
		$this->stockRoto=0;
		$this->ultimoIngresoDeMercaderia=date('Y-m-d');
		$this->ultimaVentaDeMercaderia=date('Y-m-d');
		$this->genero=0;
		$this->imagenPrincipal=0;
		$this->UPCreal='';
		$this->mdoNet=0;
		$this->jet=0;
		$this->precioJet=0;
		$this->stockJet=0;
		$this->multipack=0;
		$this->nodeJet='';
		$this->nombreEN='';
		$this->descripcionEN='';
		$this->peso=0;
		$this->enviadoAJet=0;
		$this->stockFalabella=0;
		$this->precioFalabella=0;
		$this->verEnFalabella=0;
		$this->enviadoAFalabella=0;
		$this->categoriaFalabella=0;
		$this->marcaFalabella='';
		$this->descripcionFalabella='';
		$this->precioPromocional=0;
		$this->destacado=0;
		$this->largo=0;
		$this->alto=0;
		$this->ancho=0;
		$this->descripcionLarga='';
		if( mysqli_num_rows($resultado)!=0 ){

			$arreglo=mysqli_fetch_array($resultado);
			$this->id=$arreglo[0];
			$this->nombre=$arreglo[1];
			$this->descripcion=$arreglo[2];
			$this->tipo=$arreglo[3];
			$this->categoria=$arreglo[4];
			$this->marca=$arreglo[5];
			$this->material=$arreglo[6];
			$this->estuche=$arreglo[7];
			$this->sexo=$arreglo[8];
			$this->proveedor=$arreglo[9];
			$this->precio=$arreglo[10];
			$this->suspendido=$arreglo[11];
			$this->comision=$arreglo[12];
			$this->stock=$arreglo[13];
			$this->stockMinimo=$arreglo[14];
			$this->codigo=$arreglo[15];
			$this->alarmaStockMinimo=$arreglo[16];
			$this->color=$arreglo[17];
			$this->tamano=$arreglo[18];
			$this->ubicacion=$arreglo[19];
			$this->grupo=$arreglo[20];
			$this->pagina=$arreglo[21];
			$this->costo=$arreglo[22];
			$this->bestBrasil=$arreglo[23];
			$this->posicion=$arreglo[24];
			$this->stockRoto=$arreglo[25];
			$this->ultimoIngresoDeMercaderia=$arreglo[26];
			$this->ultimaVentaDeMercaderia=$arreglo[27];
			$this->genero=$arreglo[28];
			$this->imagenPrincipal=$arreglo[29];
			$this->UPCreal=$arreglo[30];
			$this->mdoNet=$arreglo[31];
			$this->jet=$arreglo[32];
			$this->precioJet=$arreglo[33];
			$this->stockJet=$arreglo[34];
			$this->multipack=$arreglo[35];
			$this->nodeJet=$arreglo[36];
			$this->nombreEN=$arreglo[37];
			$this->descripcionEN=$arreglo[38];
			$this->peso=$arreglo[39];
			$this->enviadoAJet=$arreglo[40];
			$this->stockFalabella=$arreglo[41];
			$this->precioFalabella=$arreglo[42];
			$this->verEnFalabella=$arreglo[43];
			$this->enviadoAFalabella=$arreglo[44];
			$this->categoriaFalabella=$arreglo[45];
			$this->marcaFalabella=$arreglo[46];
			$this->descripcionFalabella=$arreglo[47];
			$this->precioPromocional=$arreglo[48];
			$this->destacado=$arreglo[49];
			$this->largo=$arreglo[50];
			$this->alto=$arreglo[51];
			$this->ancho=$arreglo[52];
			$this->descripcionLarga=$arreglo[53];
			$this->colorPrincipal=$arreglo[54];
			$this->colorSecundario=$arreglo[55];
		}else{

			$this->id=0;
		}

	return $this->id;

	}


	public function grabar($conexion){
		if(($this->id =='0') || ($this->id =='') ){
			$SQL ="INSERT INTO producto 
			 ( `nombre`,`descripcion`,`tipo`,`categoria`,`marca`,`material`,`estuche`,`sexo`,`proveedor`,`precio`,`suspendido`,`comision`,`stock`,`stockMinimo`,`codigo`,`alarmaStockMinimo`,`color`,`tamano`,`ubicacion`,`grupo`,`pagina`,`costo`,`bestBrasil`,`posicion`,`stockRoto`,`ultimoIngresoDeMercaderia`,`ultimaVentaDeMercaderia`,`genero`,`imagenPrincipal`,`UPCreal`,`mdoNet`,`jet`,`precioJet`,`stockJet`,`multipack`,`nodeJet`,`nombreEN`,`descripcionEN`,`peso`,`enviadoAJet`,`stockFalabella`,`precioFalabella`,`verEnFalabella`,`enviadoAFalabella`,`categoriaFalabella`,`marcaFalabella`,`descripcionFalabella`,`precioPromocional`,`destacado`,`largo`,`alto`,`ancho`,`descripcionLarga`, colorPrincipal, colorSecundario) 
			 VALUES  (	'".mysqli_real_escape_string($conexion,$this->nombre). "',	
			 '".mysqli_real_escape_string($conexion,$this->descripcion). "',	
			 '".mysqli_real_escape_string($conexion,$this->tipo). "',	
			 '".mysqli_real_escape_string($conexion,$this->categoria). "',	
			 '".mysqli_real_escape_string($conexion,$this->marca). "',	
			 '".mysqli_real_escape_string($conexion,$this->material). "',	
			 '".mysqli_real_escape_string($conexion,$this->estuche). "',	
			 '".mysqli_real_escape_string($conexion,$this->sexo). "',	
			 '".mysqli_real_escape_string($conexion,$this->proveedor). "',	
			 '".mysqli_real_escape_string($conexion,$this->precio). "',	
			 '".mysqli_real_escape_string($conexion,$this->suspendido). "',	
			 '".mysqli_real_escape_string($conexion,$this->comision). "',	
			 '".mysqli_real_escape_string($conexion,$this->stock). "',	
			 '".mysqli_real_escape_string($conexion,$this->stockMinimo). "',	
			 '".mysqli_real_escape_string($conexion,$this->codigo). "',	
			 '".mysqli_real_escape_string($conexion,$this->alarmaStockMinimo). "',	
			 '".mysqli_real_escape_string($conexion,$this->color). "',	
			 '".mysqli_real_escape_string($conexion,$this->tamano). "',	
			 '".mysqli_real_escape_string($conexion,$this->ubicacion). "',	
			 '".mysqli_real_escape_string($conexion,$this->grupo). "',	
			 '".mysqli_real_escape_string($conexion,$this->pagina). "',	
			 '".mysqli_real_escape_string($conexion,$this->costo). "',	
			 '".mysqli_real_escape_string($conexion,$this->bestBrasil). "',	
			 '".mysqli_real_escape_string($conexion,$this->posicion). "',	
			 '".mysqli_real_escape_string($conexion,$this->stockRoto). "',	
			 '".mysqli_real_escape_string($conexion,$this->ultimoIngresoDeMercaderia). "',	
			 '".mysqli_real_escape_string($conexion,$this->ultimaVentaDeMercaderia). "',	
			 '".mysqli_real_escape_string($conexion,$this->genero). "',	
			 '".mysqli_real_escape_string($conexion,$this->imagenPrincipal). "',	
			 '".mysqli_real_escape_string($conexion,$this->UPCreal). "',	
			 '".mysqli_real_escape_string($conexion,$this->mdoNet). "',	
			 '".mysqli_real_escape_string($conexion,$this->jet). "',	
			 '".mysqli_real_escape_string($conexion,$this->precioJet). "',	
			 '".mysqli_real_escape_string($conexion,$this->stockJet). "',	
			 '".mysqli_real_escape_string($conexion,$this->multipack). "',	
			 '".mysqli_real_escape_string($conexion,$this->nodeJet). "',	
			 '".mysqli_real_escape_string($conexion,$this->nombreEN). "',	
			 '".mysqli_real_escape_string($conexion,$this->descripcionEN). "',	
			 '".mysqli_real_escape_string($conexion,$this->peso). "',	
			 '".mysqli_real_escape_string($conexion,$this->enviadoAJet). "',	
			 '".mysqli_real_escape_string($conexion,$this->stockFalabella). "',	
			 '".mysqli_real_escape_string($conexion,$this->precioFalabella). "',	
			 '".mysqli_real_escape_string($conexion,$this->verEnFalabella). "',	
			 '".mysqli_real_escape_string($conexion,$this->enviadoAFalabella). "',	
			 '".mysqli_real_escape_string($conexion,$this->categoriaFalabella). "',	
			 '".mysqli_real_escape_string($conexion,$this->marcaFalabella). "',	
			 '".mysqli_real_escape_string($conexion,$this->descripcionFalabella). "',	
			 '".mysqli_real_escape_string($conexion,$this->precioPromocional). "',	
			 '".mysqli_real_escape_string($conexion,$this->destacado). "',	
			 '".mysqli_real_escape_string($conexion,$this->largo). "',	
			 '".mysqli_real_escape_string($conexion,$this->alto). "',	
			 '".mysqli_real_escape_string($conexion,$this->ancho). "',	
			 '".mysqli_real_escape_string($conexion,$this->descripcionLarga). "',	
			 '".mysqli_real_escape_string($conexion,$this->colorPrincipal). "',	
			 '".mysqli_real_escape_string($conexion,$this->colorSecundario). "' )";
				mysqli_query($conexion,$SQL);
				$this->id=mysqli_insert_Id($conexion);
		}else{
		$SQL = "UPDATE producto SET 
				`nombre` = '" .mysqli_real_escape_string($conexion,$this->nombre). "',
				`descripcion` = '" .mysqli_real_escape_string($conexion,$this->descripcion). "',
				`tipo` = '" .mysqli_real_escape_string($conexion,$this->tipo). "',
				`categoria` = '" .mysqli_real_escape_string($conexion,$this->categoria). "',
				`marca` = '" .mysqli_real_escape_string($conexion,$this->marca). "',
				`material` = '" .mysqli_real_escape_string($conexion,$this->material). "',
				`estuche` = '" .mysqli_real_escape_string($conexion,$this->estuche). "',
				`sexo` = '" .mysqli_real_escape_string($conexion,$this->sexo). "',
				`proveedor` = '" .mysqli_real_escape_string($conexion,$this->proveedor). "',
				`precio` = '" .mysqli_real_escape_string($conexion,$this->precio). "',
				`suspendido` = '" .mysqli_real_escape_string($conexion,$this->suspendido). "',
				`comision` = '" .mysqli_real_escape_string($conexion,$this->comision). "',
				`stock` = '" .mysqli_real_escape_string($conexion,$this->stock). "',
				`stockMinimo` = '" .mysqli_real_escape_string($conexion,$this->stockMinimo). "',
				`codigo` = '" .mysqli_real_escape_string($conexion,$this->codigo). "',
				`alarmaStockMinimo` = '" .mysqli_real_escape_string($conexion,$this->alarmaStockMinimo). "',
				`color` = '" .mysqli_real_escape_string($conexion,$this->color). "',
				`colorPrincipal` = '" .mysqli_real_escape_string($conexion,$this->colorPrincipal). "',
				`colorSecundario` = '" .mysqli_real_escape_string($conexion,$this->colorSecundario). "',
				`tamano` = '" .mysqli_real_escape_string($conexion,$this->tamano). "',
				`ubicacion` = '" .mysqli_real_escape_string($conexion,$this->ubicacion). "',
				`grupo` = '" .mysqli_real_escape_string($conexion,$this->grupo). "',
				`pagina` = '" .mysqli_real_escape_string($conexion,$this->pagina). "',
				`costo` = '" .mysqli_real_escape_string($conexion,$this->costo). "',
				`bestBrasil` = '" .mysqli_real_escape_string($conexion,$this->bestBrasil). "',
				`posicion` = '" .mysqli_real_escape_string($conexion,$this->posicion). "',
				`stockRoto` = '" .mysqli_real_escape_string($conexion,$this->stockRoto). "',
				`ultimoIngresoDeMercaderia` = '" .mysqli_real_escape_string($conexion,$this->ultimoIngresoDeMercaderia). "',
				`ultimaVentaDeMercaderia` = '" .mysqli_real_escape_string($conexion,$this->ultimaVentaDeMercaderia). "',
				`genero` = '" .mysqli_real_escape_string($conexion,$this->genero). "',
				`imagenPrincipal` = '" .mysqli_real_escape_string($conexion,$this->imagenPrincipal). "',
				`UPCreal` = '" .mysqli_real_escape_string($conexion,$this->UPCreal). "',
				`mdoNet` = '" .mysqli_real_escape_string($conexion,$this->mdoNet). "',
				`jet` = '" .mysqli_real_escape_string($conexion,$this->jet). "',
				`precioJet` = '" .mysqli_real_escape_string($conexion,$this->precioJet). "',
				`stockJet` = '" .mysqli_real_escape_string($conexion,$this->stockJet). "',
				`multipack` = '" .mysqli_real_escape_string($conexion,$this->multipack). "',
				`nodeJet` = '" .mysqli_real_escape_string($conexion,$this->nodeJet). "',
				`nombreEN` = '" .mysqli_real_escape_string($conexion,$this->nombreEN). "',
				`descripcionEN` = '" .mysqli_real_escape_string($conexion,$this->descripcionEN). "',
				`peso` = '" .mysqli_real_escape_string($conexion,$this->peso). "',
				`enviadoAJet` = '" .mysqli_real_escape_string($conexion,$this->enviadoAJet). "',
				`stockFalabella` = '" .mysqli_real_escape_string($conexion,$this->stockFalabella). "',
				`precioFalabella` = '" .mysqli_real_escape_string($conexion,$this->precioFalabella). "',
				`verEnFalabella` = '" .mysqli_real_escape_string($conexion,$this->verEnFalabella). "',
				`enviadoAFalabella` = '" .mysqli_real_escape_string($conexion,$this->enviadoAFalabella). "',
				`categoriaFalabella` = '" .mysqli_real_escape_string($conexion,$this->categoriaFalabella). "',
				`marcaFalabella` = '" .mysqli_real_escape_string($conexion,$this->marcaFalabella). "',
				`descripcionFalabella` = '" .mysqli_real_escape_string($conexion,$this->descripcionFalabella). "',
				`precioPromocional` = '" .mysqli_real_escape_string($conexion,$this->precioPromocional). "',
				`destacado` = '" .mysqli_real_escape_string($conexion,$this->destacado). "',
				`largo` = '" .mysqli_real_escape_string($conexion,$this->largo). "',
				`alto` = '" .mysqli_real_escape_string($conexion,$this->alto). "',
				`ancho` = '" .mysqli_real_escape_string($conexion,$this->ancho). "',
				`descripcionLarga` = '" .mysqli_real_escape_string($conexion,$this->descripcionLarga). "' 
				WHERE `id`= '".$this->id."'";
				mysqli_query($conexion,$SQL);
		}
		//echo $SQL;
	return $this->id;
	}

} // END class  producto
?>