<?php
    $aPaterno = $_POST['aPaterno'];
    $aMaterno = $_POST['aMaterno'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $nacimiento = $_POST['nacimiento'];
    $telefono = $_POST['telefono'];
    $colonia = $_POST['colonia'];
    $calle = $_POST['calle'];
    $noCasa = $_POST['noCasa'];
    $cp = $_POST['cp'];

    echo "<p> Nombre: $nombre <br>
              Apellido Paterno: $aPaterno <br>
              Apellido Materno: $aMaterno <br>
              Nacimiento: $nacimiento <br>
              Email: $email <br>
              Telefono: $telefono <br>
              Colonia: $colonia <br>
              Calle: $calle <br>
              No. Casa: $noCasa <br>
              Codigo Postal: $cp <br> </p>";