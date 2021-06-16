<?php
	require_once 'config.php';

	$marca = $_POST["marca"];		$modelo = $_POST["modelo"];
	$year = $_POST["anio"];			$color = $_POST["color"];
	$combustible = $_POST["combustible"]; $cambio = $_POST["cambio"];
	$asientos = $_POST["asientos"];		$puertas = $_POST["puertas"];
	$bolsa_aire = $_POST["aire"];		$acondicionado = $_POST["acondicionado"];
	$km = $_POST["km"];			$motor = $_POST["motor"];
	$placas = $_POST["placas"];		$precio = $_POST["precio"];
	$status =  $_POST["status"];	$descripcion = $_POST["descripcion"];


	// Verifica si no existe un usuario
    $car_check_query = "SELECT placas FROM autos WHERE placas='$placas' LIMIT 1";
    $result = mysqli_query($conn, $car_check_query);
    $car = mysqli_fetch_assoc($result);

	if($car){ // Si existe    
		if ($car['placas'] === $placas){
			echo "<script> alert('Este coche ya esta registrado'); </script>";
			header('location: ../admin/newCars.html');
		}
    } else{
		$sql = "INSERT INTO autos (marca, modelo, year, color, combustible, cambio, asientos, puertas, bolsa_aire, 
									acondicionado, kilometraje, motor, placas, precio, estado, descripcion) VALUES('{$marca}', '{$modelo}', '{$year}', '{$color}','{$combustible}', '{$cambio}', '{$asientos}', '{$puertas}', '{$bolsa_aire}', '{$acondicionado}', '{$km}', '{$motor}', '{$placas}', '{$precio}', '{$status}', '{$descripcion}')";
		
		if(mysqli_query($conn, $sql)){
			echo "<script> alert('Coche registrado exitosamente'); </script>";
			header('location: ../admin/index.html');
        }
        else {
			echo "<script> alert('Hubo un error al registrar este coche'); </script>";
			header('location: ../admin/newCars.html');
        }
	}
