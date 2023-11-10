<?php

    include '../db/conexion.php'; //incluye el codigo de conexion en el presente

    if (isset($_POST['register_btn'])) {
        $names= $_POST['names']; // Captura el valor que el usuario puso en formulario
        $lastname= $_POST['lastname'];
        $birthdate= $_POST['birthdate'];        
        $idperson= $_POST['idperson'];
        $email= $_POST['email'];
        $pass= $_POST['pass'];

        //Para darle un poco de seguridad a los datos se encodifican los datos
        $pass_en = base64_encode($pass);

        //Consultar si hay algun registro con el id ingresado
        $consulta = mysqli_query($conexion, "SELECT * FROM users where idperson = '$idperson'");
        //Cuentas la cantidad de columnas que traer la anterioir consulta 
        $cantidad = mysqli_num_rows($consulta);

        if ($cantidad ==1) {    // Significa que ya hay un registro con el numero de id ingresado
            header('location:../index.php?status=2');
        }else{ // Realice la ejecucion del regitro
        //Para hacer consultas recibe dos parametros
        //mysqli_query("conexion de la bd", "consulta")
        //Consulta inserta cada variable en la bd
        mysqli_query($conexion," INSERT INTO users
        (names, lastname, birthdate, idperson, email, pass) VALUES        
        ('$names', '$lastname', '$birthdate', '$idperson', '$email', '$pass_en')");

        header('location:../index.php?status=1');

        }
        
        

    }
?>
