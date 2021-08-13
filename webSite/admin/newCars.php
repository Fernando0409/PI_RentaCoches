<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrapp y css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">

    <!-- Fuente de google e iconos -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php require_once 'scripts.php'; ?>

    <title>DrivUs - New Car</title>
</head>

<body>
    <div id="sidebar">
        <div class="toggle-btn">
            <span>&#9776;</span>
        </div>
        <a href="index.html"> <i class='bx bx-home'></i> Incio</a>
        <a href="perfil.html"><i class='bx bx-user' ></i>Perfil</a>
        <button class="dropdown-btn"> <i class='bx bx-car ' ></i></i> Autos
                <i class="fa fa-caret-down"></i>
            </button>
        <div class="dropdown-container">
            <a href="carList.php">Inventario</a>
            <a href="newCars.php">Registro</a>
        </div>
        <button class="dropdown-btn"> <i class='bx bxs-user-plus' ></i> Socios
                <i class="fa fa-caret-down"></i>
            </button>
        <div class="dropdown-container">
            <a href="socioList.php">Lista</a>
            <a href="newEmpleado.php">Nuevo Socio</a>
        </div>
        <button> <i class='bx bx-log-out '></i> Cerrar sesion</button>
    </div>
    <div class="contenedor">
        <div class="barraLateral">
            <div class="elementos">
                <a href=""><i class='bx bxs-bell bx-sm' id="notificaciones"></i></a>
                <a href="">
                    <p id="nombre">Lorem Lorencio</p>
                </a>
                <a href=""><i id="user" class='bx bx-user bx-sm'></i></a>
            </div>
        </div>
        <div id="formulario">
            <form action="#" method="#" id="formGuardarCoche">
                <div class="fila">
                    <div class="mb-3">
                        <label for="marca" class="form-label">Marca: </label>
                        <input type="text" class="form-control" id="nombre" name="marca" required>
                    </div>
                    <div class="mb-3">
                        <label for="modelo" class="form-label">Modelo: </label>
                        <input type="text" class="form-control" id="nombre" name="modelo" required>
                    </div>
                    <div class="mb-3">
                        <label for="anio" class="form-label">A&ntilde;o: </label>
                        <input type="text" class="form-control" id="anio" name="anio" required>
                    </div>
                    <div class="mb-3">
                        <label for="color" class="form-label">Color: </label>
                        <input type="text" class="form-control" id="color" name="color" required>
                    </div>
                </div>
                <div class="fila">
                    <div class="mb-3">
                        <label for="combustible" class="form-label">Combustible: </label>
                        <input type="text" class="form-control" id="combustible" name="combustible" required>
                    </div>
                    <div class="mb-3">
                        <label for="cambio" class="form-label">Cambio: </label> <br>
                        <select class="custom-select" name="cambio">
                            <option value="estandar">Estandar</option>
                            <option value="automatico">Automatico</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="asiento" class="form-label">Asientos: </label>
                        <input type="text" class="form-control" id="asientos" name="asientos" required>
                    </div>
                    <div class="mb-3">
                        <label for="marca" class="form-label">Puertas: </label> <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="puertas" id="puertas" value="2">
                            <label class="form-check-label" for="puertas"> 2 </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="puertas" id="puertas1" value="4">
                            <label class="form-check-label" for="puertas1"> 4 </label>
                        </div>
                    </div>
                </div>
                <div class="fila">
                    <div class="mb-3">
                        <label for="bolsa" class="form-label">Bolsa de aire: </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="aire" id="aire1" value="yes">
                            <label class="form-check-label" for="aire1"> Si </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="aire" id="aire2" value="no">
                            <label class="form-check-label" for="aire2"> No </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="marca" class="form-label">Aire acondicionado: </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="acondicionado" id="acondicionado1" value="yes">
                            <label class="form-check-label" for="acondicionado1"> Si </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="acondicionado" id="acondicionado2" value="no">
                            <label class="form-check-label" for="acondicionado2"> No </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="km" class="form-label">Kilometraje: </label>
                        <input type="text" class="form-control" id="km" name="km" required>
                    </div>

                    <div class="mb-3">
                        <label for="motor" class="form-label">Motor: </label>
                        <input type="text" class="form-control" id="motor" name="motor" required>
                    </div>
                </div>
                <div class="fila">
                    <div class="mb-3">
                        <label for="placas" class="form-label">Placas: </label>
                        <input type="text" class="form-control" id="placas" name="placas" required>
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio: </label>
                        <input type="text" class="form-control" id="precio" name="precio" required>
                    </div>
                    <div class="mb-3">
                        <label for="marca" class="form-label">Estado del auto: </label>
                        <select class="custom-select" name="status">
                            <option value="disponible">Disponible</option>
                            <option value="ocupado">Ocupado</option>
                            <option value="reparacion">reparacion</option>
                        </select>
                    </div>
                </div>
                <div class="fila">
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripci&oacute;n: </label>
                        <textarea type="text" class="form-control" id="descripcion" name="descripcion" rows="5" style="width: 400px;"></textarea>
                    </div>
                </div>
                <button id="btnGuardarCoches" class="btn btn-primary">Guardar datos</button>
            </form>
        </div>
    </div>
    <script src="../js/main.js"></script>
</body>

</html>


<script>
    $(document).ready(function(){
		$('#btnGuardarCoches').click(function(){
			datos=$('#formGuardarCoche').serialize();
			$.ajax({
				type:"POST",
				data:datos,
				url:"procesos/addNewCar.php",
				success:function(r){
					if(r==1){
						alertify.success("Se registro con exito :D");
					}else{
						alertify.error("Fallo al registrar :(");
					}
				}
			});
		});
	});
</script>
