<?php

    include '../db/conexion.php'; //incluye el codigo de conexion en el presente

    if (isset($_POST['signin_btn'])) {
        $email= $_POST['email'];
        $pass= $_POST['pass'];

        //Contraseñas encriptadas
        // $pass_code= base64_encode($pass);

        $consulta = mysqli_query($conexion, "SELECT * FROM users'");
        

        echo $consulta;
    }
?>
