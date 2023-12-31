<?php
    if (isset($_GET['status'])) {
        echo '<script>alert("¡ Registro exitoso !")</script>';        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <!-- Boostrap -->
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    
    <title>Laboratorio de Analisis de Movimiento</title>
    <title>Document</title>
</head>
<body>
    
    <header>
        <img src="image/logo.png" alt="logo">
        <nav>
            <ul>
                <li>
                    <a href=""><i class="bi bi-house-fill" style="color: #0066b7;"></i></a>
                    <!-- <a href=""><i class="fa-solid fa-house" style="color: #0066b7;"></i></a> -->
                </li>
                <li>
                    <a href=""><i class="bi bi-person-rolodex"style="color: #0066b7;"></i></a>
                </li>
                <li>
                    <a href=""><i class="bi bi-facebook" style="color: #0066b7;"></i></a>
                </li>
            </ul>
        </nav>
    </header>   
    <div class="titulo">
        <h1>LABORATORIO DE ANÁLISIS DE MOVIMIENTO</h1>        
    </div>
    <section id="main-contain">
        <div class="second-contain">
            <div class="info">
                <p>Aqui puede consultar 
                    el resultado del análisis computarizado 
                    de la marcha. Si necesita únicamente 
                    el reporte de resultados haga click 
                    en el siguiente botón.</p>             
            </div>
            <div>                
            </div>
            <button class="btn_medico " data-bs-toggle="modal" data-bs-target="#medico_moda">Registrase</button>
            <button class="btn_usuario" data-bs-toggle="modal" data-bs-target="#login_moda">Ingresar </button>            
        </div>
    </section>
    
    <!-- Modal de registro-->
    <div class="modal fade" id="medico_moda" tabindex="-1" aria-labelledby="medico_modaLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="medico_modaLabel">Registrate</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="back/register.php" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="names">Nombres</label>
                                <input type="text" class="form-control" name="names" id="names" placeholder="Digite sus nombres" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="lastname">Apellidos</label>
                                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Digite sus apellidos" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="birthdate">Fecha de Nacimiento</label>
                                <input type="date" class="form-control" name="birthdate" id="birthdate" placeholder="Correo electrónico" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="idperson">ID paciente</label>
                                <input type="text" class="form-control" name="idperson" id="idperson" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="email">Correo electrónico</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="e-mail" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="pass">Contraseña</label>
                                <input type="password" class="form-control" name="pass" id="pass" placeholder="" required>
                            </div>
                        </div>   
                        <div class="modal-footer">
                            <button  type="submit" class="btn btn-primary" data-bs-dismiss="modal" name="register_btn">Registrar</button>
                            <button type="reset" class="btn btn-secondary">Limpiar</button>
                        </div>               
                    </form>             
                </div>

            </div>
        </div>
    </div>

    <!-- Modal de Ingreso-->
    <div class="modal fade" id="login_moda" tabindex="-1" aria-labelledby="login_modaLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="login_modaLabel">Ingreso a resultados</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="back/login.php" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-7">
                                <label for="email">Correo electrónico</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="e-mail" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="pass">Contraseña</label>
                                <input type="password" class="form-control" name="pass" id="pass" placeholder="" required>
                            </div>
                        </div>   
                        <div class="modal-footer">
                            <button  type="submit" class="btn btn-primary" data-bs-dismiss="modal" name="signin_btn">Ingresar</button>
                        </div>               
                    </form>             
                </div>
            </div>
        </div>
    </div>

    <section id="third-contain">
        <div class="separador"></div>
        <div class="info2">
            <img src="image/podo.png" alt="">
            <div class="texto">En el siguiente menú 
                puedes encontrar información 
                sobre lo que hacemos en el 
                laboratorio de análisis de 
                movimiento, nuestros colaboradores y nuestros servicios
            </div>          
        </div> 
        <div class="separador2">
            <nav>
                <ul>
                    <li>
                        <img src="image/examenf.png" alt="">
                    </li>
                    <li>
                        <img src="image/podo_icono.png" alt="">
                    </li>
                    <li>
                        <img src="image/videoa.png" alt="">
                    </li>
                    <li>
                        <img src="image/videod.png" alt="">
                    </li>
                    <li>
                        <img src="image/testc.png" alt="">
                    </li>
                </ul>
            </nav>
        </div>
    </section>
    <section id="forth-contain">
        <div>
            <iframe width="60%" height="80%" src="https://www.youtube.com/embed/C3_jtB97Afk?controls=0">
            </iframe>
        </div>
    </section>
    <footer>
        <img src="image/logo2.png" alt="logo Roosevelt">
        <div class="pieinfo">
            <p>
                <a href=""><i class="bi bi-geo-alt" style="color: #ffffff;"></i></a> 
                Sede principal Cra 4 Este #17-50 Bogotá, Colombia<br> 
                <a href=""><i class="bi bi-telephone-fill" style="color: #ffffff;"></i></a>  
                +57 (601) 3534026 ext.350 <br>
                <a href=""><i class="bi bi-phone-fill" style="color: #ffffff;"></i></a>
                +57 320 3481010  <br>                             
                <a href=""><i class="bi bi-envelope-at" style="color: #ffffff;"></i></a>
                rooseveltmarcha@ioir.org.co
            </p>
        </div>
    </footer> 









</body>
</html>