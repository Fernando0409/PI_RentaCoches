<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
		$_POST['idCoche'],
		$_POST['modeloU'],
		$_POST['kilometrajeU'],
		$_POST['precioU'],
		$_POST['estadoU']);

	echo $obj->actualizarCoche($datos);
	
 ?>