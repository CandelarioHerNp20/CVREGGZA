<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa</title>
    <link rel="stylesheet" href="../css/Estilo.css">
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
            <a class="navbar-brand" href="#"> <img src="../img/Icon.svg" width="45px" height="45px" alt="..."> CVPAV </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="../Index.php"><img src="../img/home.svg" width="30px">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active btn_nav" aria-current="page" href="../productos/productos.php"><img src="../img/box-seam.svg" width="30px">Productos</a>
                    </li>
                    <li class="nav-item" type="botton">
                        <a class="nav-link active btn_nav" aria-current="page" href="../User/ini_sesion.php"><img src="../img/person-lines-fill.svg" width="30px">Iniciar sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../User/Regist.php"><img src="../img/person-plus-fill.svg" width="30px">Crear cuenta</a>
                    </li>
    
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-danger" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    
    <h1 class="display-5">Mapa Regional De Gutierrez Zamora Altotonga Ver.</h1>
    <section>
        <center> <!--información-->
            <h1>¿Donde Comprar?</h1>
        <section class="container">
        <div class="col">
            <!--Mapa-->
            <div id="map"></div>
            <style type="text/css">
                /* Set the size of the div element that contains the map */
                
                #map {
                    height: 400px;
                    /* The height is 400 pixels */
                    width: 100%;
                    /* The width is the width of the web page */
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
                        zoom: 13,
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
            </center>
    </section>
    <!--fin del mapa-->
    <!-- Cuadro de información-->
    <section>
        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Mapa de productores</h1>
                <p class="col-md-8 fs-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                <button class="btn btn-primary btn-lg" type="button">Información</button>
            </div>
        </div>
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
      
      <h2 class="fn">Creado por Candelario Hernandez Nepomuceno  y Yovani Aburto Agapito
      </h2>
      
    </footer>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap&libraries=&v=weekly" async></script>
    <!--Scripts
    <script src="../Recursos/jQuery/jquery-3.6.0.js "></script>
    <script src="../Recursos/bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js "></script>
    <script src="../Recursos/bootstrap-5.0.1-dist/js/bootstrap.min.js "></script>
    -->
</body>

</html>
</body>

</html>