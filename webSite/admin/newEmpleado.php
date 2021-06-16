<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrapp y css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">

    <!-- Fuente de google e iconos -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

            <?php require_once 'scripts.php'; ?>


    <title>Drivus - Nuevo Socio</title>
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
            <a href="#">Nuevo Socio</a>
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
            <form action="#" id="formGuardar">
                <div class="fila">
                    <div class="mb-3">
                        <label for="aPaterno" class="form-label">Apellido Paterno: </label>
                        <input type="text" class="form-control" id="aPaterno" name="aPaterno" placeholder="Apellido Paterno" required>
                    </div>
                    <div class="mb-3">
                        <label for="aMaterno" class="form-label">Apellido Materno: </label>
                        <input type="text" class="form-control" name="aMaterno" id="aMaterno" required>
                    </div>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="nombre" id="nombre" required>
                    </div>
                </div>
                <!-- Email nacimiento telefono -->
                <div class="fila">
                    <div class="mb-3">
                        <label for="emailUser" class="form-label">Email: </label>
                        <input type="email" class="form-control" id="emailUser" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="birthday" class="form-label">Fecha de nacimiento: </label>
                        <input type="date" class="form-control" name="birthday" id="birthday" required>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Telefono: </label>
                        <input type="tel" class="form-control" id="telefono" name="telefono" required>
                    </div>
                </div>
                <!-- Colonia calle no.casa cp -->
                <div class="fila">
                    <div class="mb-3">
                        <label for="colonia" class="form-label">Colonia: </label>
                        <input type="text" class="form-control" id="colonia" name="colonia" required>
                    </div>
                    <div class="mb-3">
                        <label for="calle" class="form-label">Callle: </label>
                        <input type="text" class="form-control" id="calle" name="calle" required>
                    </div>
                    <div class="mb-3">
                        <label for="noCasa" class="form-label">No. casa: </label>
                        <input type="text" class="form-control" name="noCasa" id="noCasa" required>
                    </div>

                    <div class="mb-3">
                        <label for="codigoPostal" class="form-label">Codigo Postal: </label>
                        <input type="text" class="form-control" id="codigoPostal" name="cp" required>
                    </div>
                </div>
                <button class="btn btn-primary" id="btnGuardar">Guardar datos</button>
            </form>
        </div>

    </div>
    <script src="../js/main.js"></script>
</body>

</html>

<script>
    $(document).ready(function(){
		$('#btnGuardar').click(function(){
			datos=$('#formGuardar').serialize();
			$.ajax({
				type:"POST",
				data:datos,
				url:"procesos/addEmpleado.php",
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