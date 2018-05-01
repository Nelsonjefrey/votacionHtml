<?php
	
	function crearUsuario(){
		include("../../controller/services/conexion.php");
		$nombre = $_POST["nombre"];
		$apellido = $_POST["apellido"];
		$user = $_POST["user"];
		$pass = $_POST["pass"];
		$add = "INSERT INTO usuario(id, nombre, apellido, username, password, rol) VALUES('', '$nombre', '$apellido', '$user', '$pass', 'U')";
		$insercion = $conexion->query($add);
		if ($insercion) {
			header("Location: ../../view/listar_votantes.php");
		}else echo "BAD";
	}
	function eliminarUsuario(){
		include("../../controller/services/conexion.php");
		$idrequest = $_REQUEST['id'];
		$delete = "DELETE FROM usuario WHERE id = '$idrequest'";
		$result = $conexion->query($delete);
		if($result){
			header("Location: ../../view/listar_votantes.php");
		}else echo "Error!";
	}
	function editarUsuario(){
		include("../../controller/services/conexion.php");
		$idupdate = $_REQUEST['id2'];
		echo $idupdate;
		$nombre = $_POST["nombre"];
		$apellido = $_POST["apellido"];
		$user = $_POST["user"];
		$pass = $_POST["pass"];
		$upd = "UPDATE usuario SET nombre ='$nombre', apellido='$apellido', username='$user', password='$pass' WHERE id='$idupdate'";
		$update = $conexion->query($upd);
		if ($update) {
			header("Location: ../../view/listar_votantes.php");
		}else echo "BAD";
	}
?>