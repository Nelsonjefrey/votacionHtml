<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Listar Programa</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/admin_styles.css">
</head>
<body class="container">
	<br><br>
	<div id="cuerpo" class="container w-75">
		<table class="table table-bordered table-hover mw-100">
		<thead class="thead-dark">
			<tr>
				<th colspan="7">Lista de programas</th>
			</tr>
			<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th>Facultad</th>
				<<th>Operaciones</th>
			</tr>
		</thead>
		<tbody>
			
			<?php
				include("../controller/services/conexion.php");
				session_start();
				$view = "SELECT * FROM programa";	
				$mostrar = $conexion->query($view);
				while($row = $mostrar->fetch_assoc()){
					?>
					<tr>
						<td class="table-light"><?php echo $row['id']?></td>
						<td class="table-light"><?php echo $row['nombre']?></td>
						<td class="table-light"><?php echo $row['id_facultad']?></td>
						<td class="table-light">
							<a class="btn btn-primary" href="../view/editar.php?id=<?php echo $row['id'];?>" >Editar</a>							
							<a class="btn btn-primary" href="../controller/services/eliminarPrograma.php?id=<?php echo $row['id'];?>">Eliminar</a>
						</td>
					</tr>
					<?php }?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="7" class="table-light">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createProgram">
				Crear
				</button>
				<a class="btn btn-primary" href="../index.php">
				Salir
				</a>
				</td>
			</tr>
		</tfoot>
	</table>
	</div>
	<div class="modal fade" id="createProgram" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalCenterTitle">Crear programa</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form action="../controller/services/crearPrograma.php" method="post" accept-charset="utf-8">
	        	<input type="text" name="id" class="form-control" placeholder="id">
	        	<input type="text" name="nombre" class="form-control" placeholder="Nombre">
	        	<select name="id_facultad"><option value="1">FACULTAD INGENIERIA</option><option value="2">FACULTAD CIENCIAS EMPRESARIALES Y ECONOMICAS</option><option value="3">FACULTAD DE CIENCIAS DE LA SALUD</option><option value="4">FACULTAD DE HUMANIDADES</option><option value="5">FACULTAD CIENCIAS BASICAS</option><option value="5">CIENCIAS DE LA EDUCACION</option></select>
	        	<br><br>
	        	<input type="submit" value="Guardar" class="btn btn-primary">
			</form>
	      </div>
	    </div>
	  </div>
</body>
</html>