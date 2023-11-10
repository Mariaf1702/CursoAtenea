<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Boostrap -->    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <title>Punto 1 <BackEnd</title>
</head>
<body>
    <form action="index.php" method="POST">
        <div class="form-group row">
            <label for="n1" class="col-sm-1 col-form-label">Numero 1</label>
            <div class="col-sm-2">
                <input type="number" name="n1" class="form-control" id="n1" placeholder="Ingrese el número 1" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="n2" class="col-sm-1 col-form-label">Numero 2</label>
            <div class="col-sm-2">
                <input type="number" name="n2" class="form-control" id="n2" placeholder="Ingrese el número 2" required>
            </div>
        </div>
        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-1 pt-0">Operación</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" name= "ope" type="radio" id="sum" value="suma"
                            checked>
                        <label class="form-check-label" for="sum">
                            Suma
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name= "ope" type="radio" id="res" value="resta">
                        <label class="form-check-label" for="res">
                            Resta
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name= "ope" type="radio" id="mult" value="multiplicacion">
                        <label class="form-check-label" for="mult">
                            Multiplicación
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name= "ope"  type="radio" id="div" value="division">
                        <label class="form-check-label" for="div">
                            División
                        </label>
                    </div>

                </div>
            </div>
        </fieldset>
        <div class="col-sm-10">
            <button type="submit" name ="operar" class="btn btn-primary">Calcular </button>
        </div>
    </form>

    <?php
    if (isset($_POST['operar'])) {
        $num1= $_POST['n1'];    
        $num2= $_POST['n2'];   
        $ope= $_POST['ope'];
        $result=0;

        switch ($ope) {
            case 'suma':
                $result= $num1 + $num2;
                break;
            case 'resta':
                $result= $num1 - $num2;
                break;
            case 'multiplicacion':
                $result= $num1 * $num2;
                break;
                case 'division':
                $result= $num1 / $num2;
                break;                
        }
        echo 'La '.$ope.' entre '.$num1.' y '.$num2.' es '.$result;        
    }
    ?>
</body>
</html>
