<?php
/*Archivo de conexion a base de datos*/
$server ="localhost";
$userdb = "root";
$passdb = "";
$dbname= "usuarioslaboratorio";
//mysqli ("Servidor","nombre de usuario de la BD", "contraseña", "A que base de datos vamos a apuntar")
$conexion = new mysqli($server,$userdb, $passdb ,$dbname); // mysqli nos permite hacer una conexion
// Si hay un error en la conexion
if ($conexion -> connect_errno) {
    echo "error en la conexión";
    exit();
}else {
    echo "Si se conecto a la DB";
}


?>