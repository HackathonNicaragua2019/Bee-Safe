<?php
    //Conexion Mysql
    $server="localhost";
    $user="root";
    $password="";
    $bd="bee";

    //Conexion
    $conexion=mysqli_connect($server, $user, $password, $bd);
    $charset8=mysqli_set_charset($conexion,'utf8');

?>