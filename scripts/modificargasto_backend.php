<?php
	include("conexion.php");
	$conexion=conectar();

	$foliogasto=$_POST['folio'];
	$monto=$_POST['monto'];
	$fecha=$_POST['fecha'];
	$descripcion=$_POST['descripcion'];
	$sucursal=$_POST['sucursal'];

	$consulta=("UPDATE `gasto` SET `descripcion_gasto`='$descripcion',`monto_gasto`='$monto',`fecha_gasto`='$fecha',`sucursal_gasto`='$sucursal'  WHERE `idGasto`='$foliogasto';");
 	$resultado= mysqli_query($conexion, $consulta);

 	if($resultado){
 		echo '<script lenguage="javascript">window.history.back();</script>';  
 	}else{
 		echo '<script>alert("Error en el registro, volver a intentarlo.");</script>';
 		echo '<script lenguage="javascript">window.history.back();</script>';  
 	}
?>