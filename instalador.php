<?php
    include('conexion.php');

    $solicitud= "CREATE TABLE usuario(IDUsuario int NOT NULL AUTO_INCREMENT, NombreUsuario varchar(70), PasswordUsuario varchar(12), Cedula varchar(14), DistritoUsario int(1), DescripcionUsuario varchar(255), TipoUsuario int(1), PRIMARY KEY(IDUsuario))";
    $resultado=mysqli_query($conexion,$solicitud);

    $solicitud1 ="CREATE TABLE evento(IDEvento int NOT NULL AUTO_INCREMENT, NombreEvento varchar(70), LatitudEvento float, LongitudEvento float, DistitoEvento int, PRIMARY KEY(IDEvento))";
    $resultado1=mysqli_query($conexion,$solicitud1);
    header('Location: index.php');
?>