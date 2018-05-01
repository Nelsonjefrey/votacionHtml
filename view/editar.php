<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Modulo Editar</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/editar_styles.css">
</head>
<body>
	<?php
        include("../controller/services/conexion.php");
        $id = $_REQUEST['id'];
        $edit = "SELECT * FROM usuario WHERE id = '$id'";
        $editar = $conexion->query($edit);
        $row = $editar->fetch_assoc();
    ?>
    <div class="login-form w-50 table-responsive">
	<form action="../controller/services/editarUsuario.php?id2=<?php echo $row['id'];?>" method="post" accept-charset="utf-8">	
        <h2 class="text-center"><strong>Editar Usuario</strong></h2> 
        <div class="form-group">
            <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="<?php echo $row['nombre']?>">
        </div>
        <div class="form-group">
    	<input type="text" name="apellido" class="form-control" placeholder="Apellido" value="<?php echo $row['apellido']?>">
        </div>
        <div class="form-group">
    	<input type="text" name="user" class="form-control" placeholder="Username" value="<?php echo $row['username']?>">
        </div>
        <div class="form-group">
    	<input type="password" name="pass"  class="form-control" placeholder="Password" value="<?php echo $row['password']?>">
        </div>
        <div class="form-group">
    	<input type="submit" value="Guardar" class="btn btn-primary">
        </div>
	</form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>