<?php 

require 'conexion.php';

$idnombre = $_REQUEST["id"];

$db->query("DELETE FROM nombre WHERE idnombre=".$idnombre);

header("Location: index.php");

 ?>