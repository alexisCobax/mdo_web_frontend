<?php
//$servidor="mdo-mysql"; $bd="mdo";	$usuario="docker"; $password="docker";
$servidor="localhost"; $bd="mdo";	$usuario="root"; $password="";
try{

	$conexion=new mysqli($servidor,$usuario,$password,$bd);
	if($conexion->connect_errno){
		echo"Nuestro sitio experimenta fallos ".$conexion->connect_errno;
		exit();
	}
	mysqli_set_charset($conexion,"utf8");
}catch(mysqli_sql_exception $e){
	echo $e->getMessage();
}
?>