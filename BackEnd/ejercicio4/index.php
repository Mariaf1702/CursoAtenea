<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <!-- Boostrap -->    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <title>Punto 4 <BackEnd</title>
</head>
<body>
    <form action="index.php" method="POST">
        <div class="form-group row">
            <label for="birth" class="col-sm-2 col-form-label">Fecha de Nacimiento</label>
            <div class="col-sm-3">
                <input type="date" name="birth" class="form-control" id="birth" placeholder="Ingrese su fecha de nacimiento" required>
            </div>
        </div>        
        <div class="col-sm-10">
            <button type="submit" name ="enviar" class="btn btn-primary">Enviar </button>
        </div>
    </form>

    <?php
    if (isset($_POST['enviar'])) {
        $birth = new DateTime($_POST['birth']); // Convertir en dataTime para operarlas
        $birth1 = $_POST['birth'];
        $current = new DateTime(date("Y-m-d")); 
        $current1 = (date("Y-m-d"));      
        $diff = $birth->diff($current);
        $edad=$diff->y;

        if ($edad <18) {
            echo "<h1>Su edad es ".$edad.' por lo tanto: No es mayor de edad</h1>';
        }else{
            echo "<h1>Su edad es ".$edad.' por lo tanto: Es mayor de edad</h1>';
        }        
    }
    ?>    
</body>
</html>
