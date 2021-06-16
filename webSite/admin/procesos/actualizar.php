<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
		$_POST['idEmpleado'],
		$_POST['telefonoU'],
		$_POST['coloniaU'],
		$_POST['calleU'],
		$_POST['noCasaU'],
		$_POST['cpU']
				);

	echo $obj->actualizar($datos);
	
 ?>