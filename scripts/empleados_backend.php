<?php
	include("conexion.php");
	$conexion=conectar();

	$nombreEmp=$_POST['nombre'];
	$apellidoEmp=$_POST['apellido'];
	$correoEmp=$_POST['correo'];
	$direccionEmp=$_POST['direccion'];
	$contrasenaEmp=$_POST['contrasena'];
	$adminEmp=$_POST['admin'];
	$nacEmp=$_POST['nacimiento'];
	$folioEmp=$_POST['folio'];
	$sucursal=$_POST['sucursal'];
	$nomFullEmp= $nombreEmp . ' ' . $apellidoEmp;

	$consulta=("INSERT INTO `empleado` (`folio_Empleado`,`nombre_Empleado`,`fecha_nac_Empleado`,`correo_Empleado`,`contra`,`direccion_Empleado`,`admin_Empleado`,`sucursal_empleado`) VALUES ('$folioEmp','$nomFullEmp','$nacEmp','$correoEmp','$contrasenaEmp','$direccionEmp','$adminEmp','$sucursal');");
 	$resultado= mysqli_query($conexion, $consulta);

 	if($resultado){
 		echo '<script lenguage="javascript">window.history.back();</script>';  
 	}else{
 		echo '<script>alert("Error en el registro, volver a intentarlo.");</script>';
 		echo '<script lenguage="javascript">window.history.back();</script>';  
 	}
?>