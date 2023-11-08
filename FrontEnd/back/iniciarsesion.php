<?php

    include '../db/conexion.php'; //incluye el codigo de conexion en el presente

    if (isset($_POST['signin_btn'])) {
        $names= $_POST['names']; // Captura el valor que el usuario puso en formulario
        $lname= $_POST['lastname'];
        $birth= $_POST['birthdate'];        
        $id2= $_POST['idperson'];
        $email= $_POST['email'];
        $passw= $_POST['pass'];
        
        //Para hacer consultas recibe dos parametros
        //mysqli_query("conexion de la bd", "consulta")
        //Consulta inserta cada variable en la bd
        mysqli_query($conexion,"INSERT INTO table users
        (names, lastname,birthdate,idperson,email,pass) VALUES        
        ('$names, $lname, $birth, $id2, $email, $passw')");
    }
?>







