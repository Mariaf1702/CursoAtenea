<?php
    if (isset($_GET['enviar'])) {
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $id = $_GET['id'];

        echo 'Nombre: '.$nombre.'<br>';
        echo 'Apellido: '.$apellido.'<br>';
        echo 'Cédula: '.$id;       
    }
?>