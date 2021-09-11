<?php
	include("conexion.php");
	$conexion=conectar();

	$foliodev=$_POST['folio'];
	$motivo=$_POST['motivo'];
	$fecha=$_POST['fecha'];
	$monto=$_POST['monto'];
	$perdida=$_POST['perdida'];

	$consulta=("UPDATE `devolucion` SET `fecha_Devolucion`='$fecha',`motivo_Devolucion`='$motivo',`monto_Devolucion`='$monto',`perdida_Devolucion`='$perdida'  WHERE `id_Devolucion`='$foliodev';");
 	$resultado= mysqli_query($conexion, $consulta);

 	if($resultado){
 		echo '<script lenguage="javascript">window.history.back();</script>';  
 	}else{
 		echo '<script>alert("Error en el registro, volver a intentarlo.");</script>';
 		echo '<script lenguage="javascript">window.history.back();</script>';  
 	}
?>