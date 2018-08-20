<?php
function conectarse(){
	$servidor="localhost";
	$usuario="root";
	$password="cynthia";
	$bd="organizacion7";
	$conectar= new mysqli($servidor,$usuario,$password,$bd);
	return $conectar;
}
$conexion=conectarse();
?>