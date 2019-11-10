<?php
	require('conexion.php');
    session_start();
    
	$nombreUsuario=$_POST['nombreUsuario'];
    $passwordUsuario=$_POST['passwordUsuario'];
    $passwordMD5= md5($passwordUsuario);

	$solicitud= "SELECT COUNT(*) as contar FROM usuario WHERE NombreUsuario='$nombreUsuario' AND PasswordUsuario='$passwordMD5'";
    $resultado=mysqli_connect($conexion,$solicitud);
	$array=mysqli_fetch_array($resultado);

	if($array['contar']>0){
        $_SESSION['username']=$nombreUsuario;
		header('Location:perfilUsuario.php');
	} else {
        /*header('Location:errorUser.php');*/
        echo "Ocurrio un error";
	}
?>