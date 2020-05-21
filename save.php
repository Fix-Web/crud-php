<?php 

require 'conexion.php';

$nombre = $_REQUEST["nombre"];
$edad = $_REQUEST["edad"];
$idnombre = $_REQUEST["idnombre"];

if($idnombre != 0 && $idnombre != "0" ){
	$db->query("UPDATE nombre SET nombre='".$nombre."', edad=".$edad." WHERE idnombre=".$idnombre);
}else{
	$db->query("INSERT INTO nombre(nombre,edad) VALUES ('".$nombre."',".$edad.")");
}

header("Location: index.php");

 ?>