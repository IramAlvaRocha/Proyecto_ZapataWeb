<?php
	include("conexion.php");
	$conexion=conectar();

	$monto=$_POST['monto'];
	$fecha=$_POST['fecha'];
	$descripcion=$_POST['descripcion'];
	$sucursal=$_POST['sucursal'];

	$consulta=("INSERT INTO `gasto` (`descripcion_gasto`,`monto_gasto`,`fecha_gasto`,`sucursal_gasto`) VALUES ('$descripcion','$monto','$fecha','$sucursal');");
 	$resultado= mysqli_query($conexion, $consulta);

 	if($resultado){
 		echo '<script lenguage="javascript">window.history.back();</script>';  
 	}else{
 		echo '<script>alert("Error en el registro, volver a intentarlo.");</script>';
 		echo '<script lenguage="javascript">window.history.back();</script>';  
 	}
?>