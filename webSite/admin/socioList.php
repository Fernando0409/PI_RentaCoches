<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php require_once 'scripts.php'; ?>
        <link rel="stylesheet" href="../css/style.css">
        <title>DrivUs - Socios</title>
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
                <a href="#">Lista</a>
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
                            <a href="newEmpleado.html"><span class="btn btn-primary"> 
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
                    <form id="formEditar">
                        <input type="text" hidden id="idEmpleado" name="idEmpleado">

                        <label for="telefonoU">Telefono</label>
                        <input type="text" class="form-control input-xs" id="telefonoU"  name="telefonoU">

                        <label for="coloniaU">Colonia</label>
                        <input type="text" class="form-control input-xs" id="coloniaU" name="coloniaU">

                        <label for="calleU">Calle</label>
                        <input type="text" class="form-control input-xs" id="calleU" name="calleU">
                        
                        <label for="noCasaU">No. Casa</label>
                        <input type="text" class="form-control input-xs" id="noCasaU" name="noCasaU">
                        
                        <label for="cpU">Codigo Postal</label>
                        <input type="text" class="form-control input-xs" id="cpU" name="cpU">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-warning" id="btnActualizar">Actualizar datos</button>
                </div>
                </div>
            </div>
        </div>

            <script src="../js/main.js"></script>

    </body>
    
</html>



<script type="text/javascript">
	$(document).ready(function(){
		
		$('#btnActualizar').click(function(){
			datos=$('#formEditar').serialize();

			$.ajax({
				type:"POST",
				data:datos,
				url:"procesos/actualizar.php",
				success:function(r){
					if(r==1){
						$('#tableDatatable').load('tabla.php');
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
    $(document).ready(function(){
        $('#tableDatatable').load('tabla.php');
    })
</script>

<script>
    function agregarDatos(idEmpleado){
        $.ajax({
            type:"POST",
            data:"idEmpleado="+idEmpleado,
            url:'procesos/obtenerDatos.php',
            success:function(r){
                datos = jQuery.parseJSON(r);
                $('#idEmpleado').val(datos['id']);
                $('#telefonoU').val(datos['telefono']);
                $('#coloniaU').val(datos['colonia']);     
                $('#calleU').val(datos['calle']);
                $('#noCasaU').val(datos['noCasa']);
                $('#cpU').val(datos['cp']);
            }
        });
    }

    function eliminarDatos(idEmpleado){
        alertify.confirm('Eliminar empleado', '¿Continuar?', 
                function(){ 
                    $.ajax({
                        type:"POST",
                        data:"idEmpleado="+idEmpleado,
                        url:'procesos/eliminar.php',
                         success:function(r){
                             if(r==1){
                                alertify.success("Eliminado con exito");
                                     $('#tableDatatable').load('tabla.php');
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