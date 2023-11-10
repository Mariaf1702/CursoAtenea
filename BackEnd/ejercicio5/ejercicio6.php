<?php

    include 'db/conexion.php'; //incluye el codigo de conexion en el presente

    if (isset($_POST['enviar'])) {


        $consulta = mysqli_query($conexion, "SELECT * FROM usuarios");

        while ($datos = mysqli_fetch_array($consulta)) {
            $_NOMBRE['nombre'] = $datos['nombre'];
        }
        

        // echo $_NOMBRE;
    }
?>