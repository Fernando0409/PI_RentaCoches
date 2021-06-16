<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php require_once 'scripts.php'; ?>
        <link rel="stylesheet" href="../css/style.css">

		<title>DrivUs - Lista de coches</title>
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
                <a href="#">Inventario</a>
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
		
		<div class="container1">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card text-center">
                        <div class="card-header">
                            Lista de Socios - DrivUs
                        </div>
                        <div class="card-body">
                            <a href="newCars.php"><span class="btn btn-primary"> 
                                Agregar nuevo <span class="fa fa-plus-circle"></span></a>
                            </span>
                            <hr>
                            <div id="tableDatatable"></div>
                        </div>
                        <div class="card-footer text-muted">
                            By DrivUs
                        </div>
                    </div>
                </div> <!-- Col-sm-12-->
            </div>
        </div> <!-- container -->

    <!-- Modal para editar  usuarios -->

        <!-- Modal -->
        <div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Informacion</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formEditarCoche">
                        <input type="text" hidden id="idCoche" name="idCoche">

                        <label for="telefonoU">Modelo</label>
                        <input type="text" class="form-control input-xs" id="modeloU"  name="modeloU">

                        <label for="coloniaU">Kilometrake</label>
                        <input type="text" class="form-control input-xs" id="kilometrajeU" name="kilometrajeU">

                        <label for="calleU">Precio</label>
                        <input type="text" class="form-control input-xs" id="precioU" name="precioU">
                        
                        <label for="noCasaU">Estado</label>
                        <input type="text" class="form-control input-xs" id="estadoU" name="estadoU">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-warning" id="btnActualizarCoche">Actualizar datos</button>
                </div>
                </div>
            </div>
        </div>
            <script src="../js/main.js"></script>

	</body>
</html>

<script>
    $(document).ready(function(){
        $('#tableDatatable').load('tablaCoches.php');
    })
</script>

<script>
	$(document).ready(function(){
		$('#btnActualizarCoche').click(function(){
			datos=$('#formEditarCoche').serialize();
			$.ajax({
				type:"POST",
				data:datos,
				url:"procesos/actualizarCoche.php",
				success:function(r){
					if(r==1){
						$('#tableDatatable').load('tablaCoches.php');
						alertify.success("Actualizado con exito :D");
					}else{
						alertify.error("Fallo al actualizar :(");
					}
				}
			});
		});
	});
</script>

<script>
	
	function agregarDatos(idCoche){
        $.ajax({
            type:"POST",
            data:"idCoche="+idCoche,
            url:'procesos/obtenerDatosCoche.php',
            success:function(r){
                datos = jQuery.parseJSON(r);
                $('#idCoche').val(datos['id']);
                $('#modeloU').val(datos['modelo']);
                $('#kilometrajeU').val(datos['kilometraje']);     
                $('#precioU').val(datos['precio']);
                $('#estadoU').val(datos['estado']);
            }
        });
    }

    function eliminarDatos(idCoche){
        alertify.confirm('Eliminar Coche', '¿Continuar?', 
                function(){ 
                    $.ajax({
                        type:"POST",
                        data:"idCoche="+idCoche,
                        url:'procesos/eliminarCoche.php',
                         success:function(r){
                             if(r==1){
                                alertify.success("Eliminado con exito");
                                     $('#tableDatatable').load('tablaCoches.php');
                             }
                            else
                                alertify.error("No se pudo proceder.")
                        }
                    });
                }, 
                function(){ 
                });
    }
</script>