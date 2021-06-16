<?php

	require_once 'config.php';

	$aPaterno = $_POST["aPaterno"];		$aMaterno = $_POST["aMaterno"];
	$nombre = $_POST["nombre"];			$email = $_POST["email"];
	$birthday = $_POST["birthday"];		$telefono = $_POST["telefono"];
	$colonia = $_POST["colonia"];		$calle = $_POST["calle"];
	$noCasa = $_POST["noCasa"];			$cp = $_POST["cp"];

	// Verifica si no existe un usuario
    $user_check_query = "SELECT email FROM empleados WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);

	if($user){ // Si existe    
		if ($user['email'] === $email)
            echo "Email already exists";

    } else{
		$sql = "INSERT INTO empleados (aPaterno, aMaterno, nombre, email, birthday, telefono, colonia, 
		calle, noCasa, cp) VALUES('{$aPaterno}', '{$aMaterno}', '{$nombre}', '{$email}', '{$birthday}',
		'{$telefono}', '{$colonia}', '{$calle}', '{$noCasa}', '{$cp}')";
		
		if(mysqli_query($conn, $sql)){
            echo "Usuario registrado";
            //header('location: ../admin/newEmpleado.html'); // Debe confirmar a la pagina de confirmacion
        }
        else {
            echo "Error: ".mysqli_error($conn);
            //header('location: ../../menu.html');
        }
	}