<?php

    $nombre = $_SESSION['nombreemp'];
    $conexion = conectar();
    $consulta = "SELECT * FROM mensaje WHERE Destinatario = '$nombre'";
    $consultada = mysqli_query($conexion, $consulta);
    $mensajes = mysqli_fetch_array($consultada);
    /*if($consultada)
    {
        echo "<script language='javascript'>alert('Consulta de mensaje realizada');</script>";
    }
    else{
        echo "<script language='javascript'>alert('Consulta de mensaje NO realizada');</script>";
    }*/
    if(!empty($mensajes))
    {
        $consulta2 = "SELECT * FROM mensaje WHERE Destinatario ='$nombre' AND Visto ='NO'";
        $consultada2 = mysqli_query($conexion, $consulta2);
        $novistos = mysqli_fetch_array($consultada2);
        if(!empty($novistos))
        {
            echo "<a href='notas.php'><img src='img/newmsg.png' width='100' height='100' style='float:right;'/></a>";
        }
        else{
            echo "<a href='notas.php'><img src='img/msg.png' width='100' height='70' style='float:right;'/></a>"; 
        }
        
    }


?>