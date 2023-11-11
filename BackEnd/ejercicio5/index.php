<?php
    include 'db/conexion.php';

    $query = mysqli_query($conexion, "SELECT * from usuarios")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Punto 5</title>
</head>
<body>
    <script src="js/script.js"></script>

    <section class="container">
        <h2>Tabla punto 5</h2>
        <input type="search" class="form-control table-filter" placeholder="Search..." />

        <div class="table-responsive">
            <table role="table" class="table filtered-table">
            <thead role="rowgroup">
                <tr role="row">
                <th role="columnheader">#</th>
                <th role="columnheader">id</th>
                <th role="columnheader">Nombre</th>
                <th role="columnheader">Apellido</th>
                <th role="columnheader">Cédula</th>

                </tr>
            </thead>

            <?php
                while($datos = mysqli_fetch_array($query)){
                    $id = $datos['id'];
                    $nombre = $datos['nombre'];
                    $apellido = $datos['apellido'];
                    $cedula = $datos['cedula'];

                    echo '
                    <tbody role="rowgroup">
                        <tr role="row">
                            <td></td>
                            <td>'.$id.'</td>
                            <td>'.$nombre.'</td>
                            <td>'.$apellido.'</td>
                            <td>'.$cedula.'</td>        
                    ';
                }            
            ?>
            </table>
        </div>
        </section>
    
</body>
</html>