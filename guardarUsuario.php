<?php
    include('conexion.php');
    $nombreUsuario;

    //Cajas de texto y procedimientos POST
    $nombreUsuario=$_POST['nombreUsuario'];
    $passwordUsuario=$_POST['passwordUsuario'];
    $cedulaUsuario=$_POST['cedulaUsuario'];
    $distritoUsuario=$_POST['distritoUsuario'];
    $descripcionUsuario=$_POST['descripcionUsuario'];
    $tipoUsuario=$_POST['tipoUsuario'];

    $solicitud="INSERT INTO usuario(NombreUsuario, PasswordUsuario, Cedula, DistritoUsuario, DescripcionUsuario, TipoUsuario) VALUES('$nombreUsuario','$passwordUsuario','$cedulaUsuario','$distritoUsuario','$descripcionUsuario','$tipoUsuario')";
    $solicitud1 = "INSERT INTO `usuario` (`NombreUsuario`, `PasswordUsuario`, `Cedula`, `DistritoUsario`, `DescripcionUsuario`, `TipoUsuario`) VALUES ('$nombreUsuario', '$passwordUsuario', '$cedulaUsuario', '1', '$descripcionUsuario', '0'); ";
    $resultado=mysqli_query($conexion,$solicitud1);
    header('Location:login.php');
?>