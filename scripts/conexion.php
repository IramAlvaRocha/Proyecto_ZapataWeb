<?php

function conectar()
{
    $user="root";
    $pass="";
    $server="localhost";
    $db="zapatadb";
    $conexion=mysqli_connect($server, $user, $pass, $db) or die ("Error de conexion a la BD" . mysqli_connect_error());
    return $conexion;
}
?>