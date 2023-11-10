<?php

    include '../db/conexion.php'; //incluye el codigo de conexion en el presente

    if (isset($_POST['register_btn'])) {
        $names= $_POST['names']; // Captura el valor que el usuario puso en formulario
        $lastname= $_POST['lastname'];
        $birthdate= $_POST['birthdate'];        
        $idperson= $_POST['idperson'];
        $email= $_POST['email'];
        $pass= $_POST['pass'];
        
        //Para hacer consultas recibe dos parametros
        //mysqli_query("conexion de la bd", "consulta")
        //Consulta inserta cada variable en la bd
        mysqli_query($conexion," INSERT INTO users
        (names, lastname, birthdate, idperson, email, pass) VALUES        
        ('$names', '$lastname', '$birthdate', '$idperson', '$email', '$pass')");

        header('location:../index.php?status=1');

    }
?>
