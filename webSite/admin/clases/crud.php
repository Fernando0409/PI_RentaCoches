<?php

	class crud{

		public function registrarCoches($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql = "INSERT INTO autos (marca, modelo, year, color, combustible, cambio, asientos, puertas, 
			bolsa_aire, acondicionado, kilometraje, motor, placas, precio, estado, descripcion) VALUES (
				'$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]',
				'$datos[4]', '$datos[5]',
				'$datos[6]',
				'$datos[7]',
				'$datos[8]',
				'$datos[9]',
				'$datos[10]',
				'$datos[11]',
				'$datos[12]',
				'$datos[13]',
				'$datos[14]',
				'$datos[15]')";

			return mysqli_query($conexion, $sql);
		}

		public function registrarEmpleados($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql = "INSERT INTO empleados ( aPaterno, aMaterno, nombre, email, birthday, telefono, colonia, calle, noCasa, cp) 
							VALUES ( '$datos[0]',
									 '$datos[1]',
									 '$datos[2]',
									 '$datos[3]',
									 '$datos[4]', 
									 '$datos[5]',
									 '$datos[6]',
									 '$datos[7]',
									 '$datos[8]',
									 '$datos[9]')";

			return mysqli_query($conexion, $sql);
		}

		public function obtenerDatos($idEmpleado){
			$obj= new conectar();
			$conexion=$obj->conexion();
			$sql = "SELECT id, telefono, colonia, calle, noCasa, cp FROM empleados WHERE id = '$idEmpleado'";
			$result = mysqli_query($conexion, $sql);
			$ver = mysqli_fetch_row($result);

			$datos = array(
				'id' => $ver[0], 
				'telefono' => $ver[1],
				'colonia' => $ver[2],
				'calle' => $ver[3],
				'noCasa' => $ver[4],
				'cp' => $ver[5]
			);
			return $datos;
		}

		public function obtenerDatosCoche($idCoche){
			$obj= new conectar();
			$conexion=$obj->conexion();
			$sql = "SELECT id, modelo, kilometraje, precio, estado FROM autos WHERE id = '$idCoche'";
			$result = mysqli_query($conexion, $sql);
			$ver = mysqli_fetch_row($result);

			$datos = array(
				'id' => $ver[0], 
				'modelo' => $ver[1],
				'kilometraje' => $ver[2],
				'precio' => $ver[3],
				'estado' => $ver[4],
			);
			return $datos;
		}

		public function actualizar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="UPDATE empleados set telefono='$datos[1]',
										colonia='$datos[2]',
										calle='$datos[3]',
										noCasa='$datos[4]',
										cp='$datos[5]'
						where id='$datos[0]'";
			return mysqli_query($conexion,$sql);
		}

		public function actualizarCoche($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="UPDATE autos set modelo='$datos[1]',
									kilometraje='$datos[2]',
									precio='$datos[3]',
									estado='$datos[4]',
						where id='$datos[0]'";
			return mysqli_query($conexion,$sql);
		}

		public function eliminar($idEmpleado){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql = "DELETE FROM empleados WHERE id='$idEmpleado'";
			return mysqli_query($conexion, $sql);
		}

		public function eliminarCoche($idCoche){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql = "DELETE FROM autos WHERE id='$idCoche'";
			return mysqli_query($conexion, $sql);
		}

	}