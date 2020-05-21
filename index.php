<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>
	<?php 

	require 'conexion.php';

	$id = $_REQUEST["id"] ?? 0;
	$nombre = "";
	$edad = 0;

	if($id != 0){
		$res = $db->query("SELECT * FROM nombre WHERE idnombre=".$id);
		while ($row = mysqli_fetch_assoc($res)) {
			$nombre = $row["nombre"];
			$edad = $row["edad"];
		}
	}

	?>
	<div class="container">
		<div class="row" style="margin-top: 20px">
			<div class="col-md-4">
				<h2>Formulario de Registro</h2>
				<form action="/save.php" method="post">
					<br>
					<input type="hidden" name="idnombre" value="<?php echo($id)?>">
					<p>Nombre</p>
					<input type="text" name="nombre" value="<?php echo($nombre) ?>" class="form-control" required maxlength="50">
					<br>
					<p>Edad</p>
					<input type="number" name="edad" value="<?php echo($edad) ?>" class="form-control" required>
					<br>
					<button class="btn btn-primary btn-block" type="submit"> <i class="fas fa-save"></i> GUARDAR </button>
				</form>
			</div>
			<div class="col-md-8">
				<h2>Lista de Datos</h2>
				<table class="table table-hover table-bordered">
					<tr class="thead-dark">
						<th>Nombre</th>
						<th>Edad</th>
						<th>Editar</th>
						<th>Eliminar</th>
					</tr>
					<?php require 'lista.php'; ?>
				</table>
			</div>
		</div>
	</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>