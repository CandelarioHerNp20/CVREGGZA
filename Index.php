<?php
    session_start();
    require_once('./User/modal/sesion.php');
    $logeado=false;
    if(isset($_SESSION['Usuario']['nombre_u'])){
        $logeado=true;
        $nombre_user=$_SESSION['Usuario']['nombre_u']." ".$_SESSION['Usuario']['apellidos_u']."".$_SESSION['Usuario']['tipo_u'];

        if($_SESSION['Usuario']['tipo_u'] == "Admin"){
            header('Location: ./Admin/Panel_admin.php');
        }
        if ($_SESSION['Usuario']['tipo_u'] == "Comprador") {
            header('Location: ./User/Comprador.php');
        }
        if ($_SESSION['Usuario']['tipo_u'] == "Productor") {
            header('Location: ./User/Panel.php');
        }else {
            
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
    <title>Inicio</title>
    <link rel="stylesheet" href="css/Estilo.css">
    <!--Iconografia-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Script con intenet
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    -->
</head>
<body>
    <!--Barra de navegación-->
    <nav class="navbar navbar-expand-lg navbar-light nc">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> <img src="img/Icon.svg" width="45px" height="45px" alt="..."> CVPAV </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="Index.php"><img src="img/home.svg" width="30px">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="button nav-link active btn_nav" aria-current="page" href="productos/Mapa.php"><img src="img/map-fill.svg" width="30px">Mapa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active btn_nav" aria-current="page" href="productos/productos.php"><img src="img/box-seam.svg" width="30px">Productos</a>
                    </li>
                    <?php
                        if(!$logeado){
                        echo'
                            <li class="nav-item">
                                <a src="img/person-lines-fill.svg" width="30px" id="#login_" class="nav-link active btn_nav" data-bs-toggle="modal" data-bs-target="#modal_login_user"> <img src="img/person-plus-fill.svg" width="30px">Iniciar sesion</a>
                            </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active btn_nav" href="./User/Regist.php" aria-current="page"><img src="img/person-plus-fill.svg" width="30px">Crear cuenta</a>
                            </li>
                            ';
                        }else{
                            echo '
                                <li class="nav-item">
                                    <a class="nav-link active btn_nav" href="./User/Panel.php" aria-current="page"><img src="img/I_default.svg" width="30px">Ir a mi perfil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active btn_nav" aria-current="page" data-bs-toggle="modal" data-bs-target="#modal_logout"><img src="img/exit.svg" width="30px">Cerrar sesión</a>
                                </li>

                            ';
                        }
                    ?>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" id="buscar_producto" placeholder="Buscar producto" aria-label="Search">
                    <button class="btn btn-outline-warning" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!--carrusel-->
    <Section>
        <Center>
        <section class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <!-- carousel para muestra de productos-->
                <div class="carousel-inner img-fluid">
                    <div class="carousel-item active img-fluid">
                    <img src="img/cl_1.jpg" class="d-block w-100" width="640px" height="400px" alt="...">
                    </div>
                    <div class="carousel-item img-fluid">
                    <img src="img/cl_2.jpg" class="d-block w-100" width="450px" height="400px" alt="...">
                    </div>
                    <div class="carousel-item img-fluid">
                    <img src="img/cl_3.jpg" class="d-block w-100"  width="450px" height="400px" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
    </center>
    </Section>
    <section>
        <center> <!--información-->
            <h1>¿Donde Comprar?</h1>
        <section class="container">
        <div class="col">
            <!--Mapa-->
            <div id="map"></div>
            <style type="text/css">
                /* Establecer*/
                #map {
                    height: 400px;
                    /* Tamaño height */
                    width: 100%;
                    /* Tamaño width */
                }
            </style>
            <script>
                // Initialize and add the map
                function initMap() {
                    // The location of Uluru
                    const uluru = {
                        lat: 19.76587,
                        lng: -97.24224,
                    };
                    // The map, centered at Uluru
                    const map = new google.maps.Map(document.getElementById("map"), {
                        zoom: 14,
                        center: uluru,
                    });
                    // The marker, positioned at Uluru
                    const marker = new google.maps.Marker({
                        position: uluru,
                        map: map,
                    });
                }
            </script>
            </div>
            <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Por que crear una cuenta</h1>
                <p class="col-md-8 fs-4">Podrás vender o comprar productos naturales y sin químicos.</p>
                 <p class="col-md-8 fs-4">Apoyas al desarrollo de la economía de la región.</p>
            </div>
            </div>
            </center>
    </section>
    <!--fin del mapa-->
        <br>
        <br>
        <center>
            <img src="img/Icon.svg" width="300px" height="300px" alt="">
        </center>
        <br>
    <!--Targetas de contenido-->
    <section class="container">
        <div class="row align-items-md-stretch">
        <div class="col-md-6">
            <div class="h-100 p-5 text-white bg-danger rounded-3">
            <h2>Conocer más</h2>
            <p>Tenemos como fin lograr crear una aplicación que se pueda usar en computadoras y dispositivos móviles como lo son teléfonos inteligentes. Con esta app se lograra facilitar el proceso de compra venta en la localidad de Gutiérrez Zamora que tiene como cabecera municipal a Altotonga Veracruz.</p>
            
            </div>
        </div>
        <div class="col-md-6">
            <div class="h-100 p-5  text-white bg-danger border rounded-3">
            <h2>¿Quiénes somos?</h2>
            <p>Esta empresa fue creada por Candelario Hernández Nepomuceno, Yovani Aburto Agapito y Mario Gerardo Padilla García, estudiantes de la UTGZ en la carrera TSU Desarrollo de Software Multiplataforma</p>

            </div>
        </div>
        </div>
        <br>
        <br>
    </section>
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
                    <a href="https://getbootstrap.com/"><img src="img/bootstrap.svg" width="30px">Heramietas de Bootstrap</a>
                </div>
            </p>
        </div>
        <!--Item 2-->
        <div class="c-foo">
            <h4>UTGZ</h4>
            <p>
                <div>
                    <a href="https://utgz.edu.mx"><img src="img/utgz.png" width="30px">UTGZ UA ALTOTONGA</a>
                    <br>
                    <br>
                    <a><img src="img/tics.png" width="30px">Tics Desarrollo de Software Multiplataforma</a>
                </div>
            </p>
        </div>
        <!--Item 3-->
        <div class="c-foo">
            <h4> Redes Sociales e Info</h4>
            <p>
                <div>
                    <a><img src="img/twitter.svg" width="30px">Twiter</a>
                    <br>
                    <br>
                    <a><img src="img/facebook.svg" width="30px">Facebook</a>
                    <br>
                    <br>
                    <a><img src="img/telephone.svg" width="30px">Telefono</a>
                </div>
            </p>
        </div>
    <!--Texto Final-->
    </div>
      
      <h2 class="fn">Creado por Candelario Hernandez Nepomuceno  y Yovani Aburto Agapito
      </h2>
      
    </footer>

    <!--
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap&libraries=&v=weekly" async></script>
            -->
    
    <script src="./User/js/jquery-3.6.0.min.js"></script>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
      
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js?AIzaSyAeockR96l5Jif6qA_BcurURiEkMtPd66Q&callback=initMap&libraries=&v=weekly" async></script>
    <script src="./User/js/inicio.js"></script>
</body>

</html>
</body>

</html>