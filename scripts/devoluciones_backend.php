<?php
	include("conexion.php");
	$conexion=conectar();

	$motivo=$_POST['motivo'];
	$fecha=$_POST['fecha'];
	$monto=$_POST['monto'];
	$perdida=$_POST['perdida'];
	$sucursal=$_POST['sucursal'];

	$consulta=("INSERT INTO `devolucion` (`fecha_Devolucion`,`motivo_Devolucion`,`monto_Devolucion`,`perdida_Devolucion`,`sucursal_Devolucion`) VALUES ('$fecha','$motivo','$monto','$perdida','$sucursal');");
 	$resultado= mysqli_query($conexion, $consulta);

 	if($resultado){
 		echo '<script lenguage="javascript">window.history.back();</script>';  
 	}else{
 		echo '<script>alert("Error en el registro, volver a intentarlo.");</script>';
 		echo '<script lenguage="javascript">window.history.back();</script>';  
 	}
?>