<?php
if($_POST["nombre_txt"]=="admin" and $_POST["password_txt"]=="123456"){
	session_start();
	$_SESSION["autentificado"]=true;
	$_SESSION["usuario"]=$_POST["nombre_txt"];
	header("Location: poi_pac/pages/index.php");
}else{
	header("Location: login.php?error=si");
}

?>


