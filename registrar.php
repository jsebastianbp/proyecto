<?php

    include("con_db.php");

    if(isset($_POST['guardar'])){

        if(strlen($_POST['nombre'])< 1 && strlen($_POST['correo'])< 1) {
            $nombre = trim($_POST['nombre']);
            $correo = trim($_POST['correo']);
            $genero = trim($_POST['flexRadioDefault']);


            $consulta = "INSERT INTO empleados (nombre, email, sexo, area_id, boletin, descripcion) VALUES ('$nombre', '$correo', '$genero', '', '', '');"

       }
    }

    
        

?>