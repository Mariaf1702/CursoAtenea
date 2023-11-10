<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <!-- Boostrap -->    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <title>Punto 2 <BackEnd</title>
</head>
<body>
    <form action="index.php" method="POST">
        <div class="form-group row">
            <label for="n1" class="col-sm-1 col-form-label">Edad</label>
            <div class="col-sm-2">
                <input type="number" name="edad" class="form-control" id="edad" placeholder="Ingrese su edad" required>
            </div>
        </div>        
        <div class="col-sm-10">
            <button type="submit" name ="enviar" class="btn btn-primary">Enviar </button>
        </div>
    </form>

    <?php
    if (isset($_POST['enviar'])) {
        $edad= $_POST['edad'];
        
        if ($edad < 18) {
            echo '<h1>No es mayor de edad</h1>';
        }else{
            echo '<h1>Es mayor de edad</h1>';
        }      
    }
    ?>    
</body>
</html>
