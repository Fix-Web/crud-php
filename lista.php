<?php 

require 'conexion.php';

$res = $db->query("SELECT * FROM nombre");

while ($row = mysqli_fetch_assoc($res)) {
	echo 
'<tr>
	<td>'. $row["nombre"] .'</td>
	<td>'. $row["edad"] .'</td>
	<td> <a href="/index.php?id='. $row["idnombre"].'" class="btn btn-info"><i class="fas fa-edit"></i></a></td>
	<td> <a href="/delete.php?id='. $row["idnombre"].'" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
</tr>
';
}
 ?>