<?php
    session_start();
    require_once('./modal/Edit_user.php');
    require_once('./modal/Modal_mapas.php');
    require_once('./modal/Modal_productos.php');
    require_once('./modal/sesion.php');
    require_once('./clases/Datos_prod.php');

    $logeado=false;
    if(isset($_SESSION['Usuario']['nombre_u'])){
        $logeado=true;
        $nombre_user=$_SESSION['Usuario']['nombre_u']." ".$_SESSION['Usuario']['apellidos_u']."".$_SESSION['Usuario']['tipo_u'];

        if($_SESSION['Usuario']['tipo_u'] == "Admin"){
            header('Location: ../Admin/Panel_admin.php');
        }
        if ($_SESSION['Usuario']['tipo_u'] == "Productor") {
            header('Location: ./Panel.php');
        }

    }else{
        //session_unset('user');
        session_destroy();
        

    }
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de usuario</title>
    <link rel="stylesheet" href="../css/Estilo.css">
    <link rel="stylesheet" href="../css/perfil.css">
    <!--Iconografia-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
</head>

<body>
    <!--Barra de navegación-->
        <nav class="navbar navbar-expand-lg navbar-light nc">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"> <img src="../img/Icon.svg" width="45px" height="45px" alt="..."> CVPAV </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active " aria-current="page" href="../Index.php"><img src="../img/home.svg" width="30px">Inicio</a>
                        </li>
                        <a class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"></a>
                    </ul>
                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                          <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modal_logout"><img src="../img/exit.svg" width="30px"></button>
                    </div>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-warning" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <br>
        <!--Tarjeta de perfil de usuario-->
        <section class="container">
            
            <div class="con">
                <div>
                    <div class="hea float-lg-start">
                        <a>
                            <?php echo $_SESSION['Usuario']['foto_u']; ?>
                        </a>
                        <h2>
                            <?php echo $_SESSION['Usuario']['nombre_u']." ".$_SESSION['Usuario']['apellidos_u']; ?>
                        </h2>
                        <h4></h4>
                    <div>
                        <div class="info" class="" tabindex="0" data-bs-toggle="tooltip" title="Disabled tooltip">
                            <p class="ed"></P>
                            <a ><img class="icon" src="../img/msj.svg" width="50px" data-bs-toggle="tooltip" tabindex="0"       title="<?php echo $_SESSION['Usuario']['correo_u']; ?>"></a>
                            <a ><img class="icon" src="../img/telephone.svg" width="50px" data-bs-toggle="tooltip" tabindex="0" title="<?php echo $_SESSION['Usuario']['tel_u']; ?>"></a>
                        </div>
                    </div>
                </div>
            </div>
         
        </section>
        <br>
        <br>
        <!--Productos -->
        <section class="container">
        <span class="d-inline-block">
            <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#reg_ubi">Añadir ubicación</a>
        </span>
        </section>
        <section>
            <!--productos del usuario adaptado-->
            <div class="row container">
                <div class="col-sm-6">
                    <div class="tarjeta_prd_u" id="tarjeta_prd_u" style="width: 18rem;">
                    </div>
                </div>
            </div>
        </section>
        
    <br>
    <br>
    <!--footer-->
    <footer>
        <div class="contenedor-footer">
            <!--Item 1-->
            <div class="c-foo">
                <h4>Herramientas</h4>
                <p>
                    <div>Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik
                      </a> from
                        <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a>
                        <br>
                        <br>
                        <a href="https://getbootstrap.com/"><img src="../img/bootstrap.svg" width="30px">Heramietas de Bootstrap</a>
                    </div>
                </p>
            </div>
            <!--Item 2-->
            <div class="c-foo">
                <h4>UTGZ</h4>
                <p>
                    <div>
                        <a href="https://utgz.edu.mx"><img src="../img/utgz.png" width="30px">UTGZ UA ALTOTONGA</a>
                        <br>
                        <br>
                        <a><img src="../img/tics.png" width="30px">Tics Desarrollo de Software Multiplataforma</a>
                    </div>
                </p>
            </div>
            <!--Item 3-->
            <div class="c-foo">
                <h4> Redes Sociales e Info</h4>
                <p>
                    <div>
                        <a><img src="../img/twitter.svg" width="30px">Twiter</a>
                        <br>
                        <br>
                        <a><img src="../img/facebook.svg" width="30px">Facebook</a>
                        <br>
                        <br>
                        <a><img src="../img/telephone.svg" width="30px">Telefono</a>
                    </div>
                </p>
            </div>
            <!--Texto Final-->
        </div>

        <h2 class="fn">Creado por Candelario Hernandez Nepomuceno y Yovani Aburto Agapito
        </h2>

    </footer>
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="./js/Productor.js"></script>
    <!--Scripts
      
      <script src="../Recursos/bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js "></script>
      <script src="../Recursos/bootstrap-5.0.1-dist/js/bootstrap.min.js "></script>
      -->
</body>
</html>