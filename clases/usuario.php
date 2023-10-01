<?php class usuario{

	public $id;
	public $nombre;
	public $apellido;
	public $email;
	public $clave;
	public $permisos;
	public $suspendido;
	public $token;
	public $token_exp ;

	public function buscar($vId,$conexion){
		$SQL = "SELECT `id`, `nombre`,`apellido`,`email`, `clave`, `permisos`, `suspendido`, `token`, `token_exp`  FROM `usuario` WHERE `id`= '".$vId."'";
		$resultado=mysqli_query($conexion,$SQL);

		$this->id=0;
		$this->nombre="";
		$this->apellido="";

		$this->clave="";
		$this->permisos=0;
		$this->suspendido=0;
		$this->token="";
		$this->token_exp= date("Y-m-d H:i:s");
		if( mysqli_num_rows($resultado)!=0 ){

			$arreglo=mysqli_fetch_array($resultado);
			$this->id=$arreglo[0];
			$this->nombre=$arreglo[1];
			$this->apellido=$arreglo[2];
			$this->email=$arreglo[3];
			$this->clave=$arreglo[4];
			$this->permisos=$arreglo[5];
			$this->suspendido=$arreglo[6];
			$this->token=  $arreglo[7];
			$this->token_exp=  $arreglo[8];

		}else{

			$this->id=0;
		}

	return $this->id;

	}


	public function grabar($conexion){
		if(($this->id =='0') || ($this->id =='') ){
			$SQL ="INSERT INTO usuario 
			 ( `nombre`, `apellido`,`email`,`clave`,`permisos`,`suspendido`, `token`, `token_exp`) 
			 VALUES  (	'".mysqli_real_escape_string($conexion,$this->nombre). "',	
						'".mysqli_real_escape_string($conexion,$this->apellido). "',
						'".mysqli_real_escape_string($conexion,$this->email). "',
						'".mysqli_real_escape_string($conexion,$this->clave). "',	
						'".mysqli_real_escape_string($conexion,$this->permisos). "',	
						'".mysqli_real_escape_string($conexion,$this->suspendido). "',
						'".$this->token."',
						'".$this->token_exp."' )";
				mysqli_query($conexion,$SQL);
				$this->id=mysqli_insert_Id($conexion);
		}else{
		$SQL = "UPDATE usuario SET 
				`nombre` = '" .mysqli_real_escape_string($conexion,$this->nombre). "',
				`apellido` = '" .mysqli_real_escape_string($conexion,$this->apellido). "',
				`email` = '" .mysqli_real_escape_string($conexion,$this->email). "',
				`clave` = '" .mysqli_real_escape_string($conexion,$this->clave). "',
				`permisos` = '" .mysqli_real_escape_string($conexion,$this->permisos). "',
				`suspendido` = '" .mysqli_real_escape_string($conexion,$this->suspendido). "' ,
				 `token`='".$this->token."', 
				 `token_exp`='".$this->token_exp."'
				WHERE `id`= '".$this->id."'";
				mysqli_query($conexion,$SQL);
		}
	return $this->id;
	}
	public function login($vNombre , $vClave, $conexion) {
        $respuesta= 0;
        
        $SQL="SELECT `id`, `nombre`,`apellido`,`email`, `clave`, `permisos`, `suspendido`, `token`, `token_exp`  FROM `usuario` WHERE nombre='".$vNombre."' and clave='".$vClave."'";
        $resultado=mysqli_query($conexion,$SQL);
        
       if(mysqli_num_rows($resultado)!=0){
		   	$arreglo= mysqli_fetch_array($resultado);
			   $this->id=$arreglo[0];
			   $this->nombre=$arreglo[1];
			   $this->apellido=$arreglo[2];
			   $this->email=$arreglo[3];
			   $this->clave=$arreglo[4];
			   $this->permisos=$arreglo[5];
			   $this->suspendido=$arreglo[6];
			   $this->token=  $this->generar_token_seguro(30);
			   $fecha_actual = date("Y-m-d H:i:s");
			   $this->token_exp=  date("Y-m-d H:i:s",strtotime($fecha_actual." + 1 day")); 
			   $this->grabar($conexion);
		    $respuesta= 1;
        }   else {
              $respuesta= 0;
        	}
        return $respuesta;    
		//return $SQL;
	}
public function BuscarToken($vToken, $conexion) {
        $respuesta= 0;
        
        $SQL="SELECT `id`, `nombre`, `apellido`,`email`,`clave`, `permisos`, `suspendido`, `token`, `token_exp` FROM usuario WHERE token='".$vToken."' and token_exp > NOW()";
        $resultado=mysqli_query($conexion,$SQL);
        
       if(mysqli_num_rows($resultado)!=0){
		   	$arreglo= mysqli_fetch_array($resultado);
			   $this->id=$arreglo[0];
			   $this->nombre=$arreglo[1];
			   $this->apellido=$arreglo[2];
			   $this->email=$arreglo[3];
			   $this->clave=$arreglo[4];
			   $this->permisos=$arreglo[5];
			   $this->suspendido=$arreglo[6];
			   $this->token=  $arreglo[7];
			   $fecha_actual = date("Y-m-d H:i:s");
			   $this->token_exp=  date("Y-m-d H:i:s",strtotime($fecha_actual." + 1 day")); 
			   $this->grabar($conexion);
		    $respuesta= 1;
        }   else {
              $respuesta= 0;
        	}
        return $respuesta;    
		//return $SQL;
	}

	function generar_token_seguro($longitud)
	{
		if ($longitud < 4) {
			$longitud = 4;
		}
	 
		return bin2hex(random_bytes(($longitud - ($longitud % 2)) / 2));
	}
} // END class  usuario
?>