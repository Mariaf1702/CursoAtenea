<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boostrap -->    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_POST['signin_btn'])) {
        $user= $_POST['username']; // Captura el valor que el usuario puso en formulario
        $password= $_POST['pass'];
        $id= $_POST['idpatient'];
        $date= $_POST['testday'];

        echo '
            <ol>
                <li>
                    <i>'.$user.'</i>
                </li>
                <li>
                    <i>'.$password.'</i>
                </li>
                <li>
                    <i>'.$id.'</i>
                </li>
                <li>
                    <i>'.$date.'</i>
                </li>
            </ol>

            <table class="table">
                <tr>
                    <td>Usuario: </td>
                    <td>Contraseña: </td>
                    <td>Identificacion: </td>
                    <td>Fecha examen: </td>
                </tr>
                <tr>
                    <td>'.$user.'</td>
                    <td>'.$password.'</td>
                    <td>'.$id.'</td>
                    <td>'.$date.'</td>
            </tr>
            </table>
        ';
    }
    ?>
    
</body>
</html>





