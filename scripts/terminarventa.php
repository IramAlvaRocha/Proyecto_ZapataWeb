<?php

session_start();
include("conexion.php");
date_default_timezone_set("America/Monterrey");
$fecha = date('Y-m-d');
$total = $_SESSION['sumaprecio']; //Sacamos el total de la venta
$folioemp = $_SESSION['empleado']; //Sacamos el folio del empleado
$pago = $_POST['total']; //Sacamos con cuanto pagó el cliente.

$feria = $pago-$total;
$ferianet= $feria*-1;
if(isset($_SESSION['compras']))
{
    $itemsarray = count($_SESSION['compras']);
   // echo "<br>" . "Items del array: " . $itemsarray; //Usado para verificar que el array tenga 0 items
    if($itemsarray == 0)
    {
        echo "<script language='javascript'>alert('Debe agregar algún artículo.');</script>";
        echo '<script lenguage="javascript">window.location.replace("../puntodeventa.php");</script>'; 
    }
}
else{
    if(!isset($_SESSION['compras']))
    {
        echo "<script language='javascript'>alert('Debe agregar algún artículo.');</script>";
        echo '<script lenguage="javascript">window.location.replace("../puntodeventa.php");</script>';   
    }
}
if($total > $pago)
{
    echo "<script language='javascript'>alert('No completa la compra. le faltan $$ferianet.');</script>";
    echo '<script lenguage="javascript">window.location.replace("../puntodeventa.php");</script>';
}
else{
    $conexion = conectar();

    $consulta = "INSERT INTO venta (folio_EmpleadoFK, fecha_Venta, total_Venta) VALUES ('$folioemp', '$fecha', '$total')";
    $consultada = mysqli_query($conexion, $consulta);

// Verificamos que se haya realizado correctamente la consulta

    if($consultada)
    {
        echo "<script language='javascript'>alert('Venta realizada. Entregar $$feria de cambio');</script>";
        unset($_SESSION['compras']);
        echo '<script lenguage="javascript">window.location.replace("../puntodeventa.php");</script>';
    }
    }
/*
echo "Total de venta: " . $total;
echo "<br>" . "Se pagó con: " . $pago;
echo "<br>" . "Fecha: " . $fecha;
*/



?>