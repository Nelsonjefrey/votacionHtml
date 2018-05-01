<?php
	
	function crearPrograma(){
		include("../../controller/services/conexion.php");
		$id = $_POST["id"];
		$nombre = $_POST["nombre"];
		$id_facultad = $_POST["id_facultad"];
		$add = "INSERT INTO programa(id, nombre, id_facultad) VALUES('$id', '$nombre', '$id_facultad')";
		$insercion = $conexion->query($add);
		if ($insercion) {
			header("Location: ../../view/listar_programa.php");
		}else echo "BAD";
	}
	function eliminarPrograma(){
		include("../../controller/services/conexion.php");
		$idrequest = $_REQUEST['id'];
		$delete = "DELETE FROM programa WHERE id = '$idrequest'";
		$result = $conexion->query($delete);
		if($result){
			header("Location: ../../view/listar_programa.php");
		}else echo "Error!";
	}
	function editarPrograma(){
		include("../../controller/services/conexion.php");
		$idupdate = $_REQUEST['id2'];
		$nombre = $_POST["nombre"];
		$id_facultad = $_POST["id_facultad"];
		$upd = "UPDATE programa SET nombre='$nombre', id_facultad='$id_facultad' WHERE id='$idupdate'";
		$update = $conexion->query($upd);
		if ($update) {
			header("Location: ../../view/listar_programa.php");
		}else echo "BAD";
	}
?>