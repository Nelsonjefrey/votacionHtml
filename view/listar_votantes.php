<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Listar Votantes</title>
	
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
				<th colspan="7">Lista de votantes</th>
			</tr>
			<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Username</th>
				<th>Password</th>
				<th>Rol</th>
				<th>Operaciones</th>
			</tr>
		</thead>
		<tbody>
			
			<?php
				include("../controller/services/conexion.php");
				session_start();
				$view = "SELECT * FROM usuario";	
				$mostrar = $conexion->query($view);
				while($row = $mostrar->fetch_assoc()){
					?>
					<tr>
						<td class="table-light"><?php echo $row['id']?></td>
						<td class="table-light"><?php echo $row['nombre']?></td>
						<td class="table-light"><?php echo $row['apellido']?></td>
						<td class="table-light"><?php echo $row['username']?></td>
						<td class="table-light"><?php echo $row['password']?></td>
						<td class="table-light"><?php echo $row['rol']?></td>
						<td class="table-light">
							<a class="btn btn-primary" href="../view/editar.php?id=<?php echo $row['id'];?>" >Editar</a>							
							<a class="btn btn-primary" href="../controller/services/eliminarUsuario.php?id=<?php echo $row['id'];?>">Eliminar</a>
						</td>
					</tr>
					<?php }?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="7" class="table-light">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createUser">
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
	<div class="modal fade" id="createUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalCenterTitle">Crear usuario</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form action="../controller/services/crearUsuario.php" method="post" accept-charset="utf-8">
	        	<input type="text" name="nombre" class="form-control" placeholder="Nombre">
	        	<input type="text" name="apellido" class="form-control" placeholder="Apellido">
	        	<input type="text" name="user" class="form-control" placeholder="Username">
	        	<input type="password" name="pass" class="form-control" placeholder="Password">
	        	<br><br>
	        	<input type="submit" value="Insertar" class="btn btn-primary">
			</form>
	      </div>
	    </div>
	  </div>
</body>
</html>