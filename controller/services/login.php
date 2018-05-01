<?php
	include("conexion.php");
    $username = $_POST["username"];
    $password = $_POST["password"];
    $consulta = $conexion->query("SELECT * FROM administrador WHERE username = '$username' AND password = '$password'");
    if($consulta->num_rows > 0 )
    {
      header("Location: ../../view/administrador.php");
    }else {
      header("Location: ../../index.php");
    }
?>