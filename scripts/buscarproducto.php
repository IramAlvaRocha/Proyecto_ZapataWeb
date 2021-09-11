<?php
include("conexion.php");


function search()
{
    $conexion = conectar();
    $search = mysqli_real_escape_string($conexion, $_POST['search']);
    $consulta = "SELECT folio_Producto FROM producto WHERE folio_Producto LIKE '%$search%' ";
    $consultada = mysqli_query($conexion, $consulta);
    echo '<table border="1">';
    while($row = $consultada->fetch_array(MYSQLI_ASSOC))
    {

        $valor = $row['folio_Producto'];
        echo "<a href='puntodeventa.php?prod=$valor'>$valor</a>";
        echo "<br>";

    }
}   echo "</table>";
search();

?>