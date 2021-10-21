<?php
    session_start();
    require_once('./modal/sesion.php');
    $logeado=false;
    if(isset($_SESSION['Usuario']['nombre_u'])){
        $logeado=true;
        $nombre_user=$_SESSION['Usuario']['nombre_u']." ".$_SESSION['Usuario']['apellidos_u']." ".$_SESSION['Usuario']['id_u'];
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
    <title>Registro</title>
    <link rel="stylesheet" href="../css/Estilo.css">
    <link rel="stylesheet" href="../css/Estilo_frm.css">
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
                        <a src="img/person-lines-fill.svg" width="30px" id="#login_" class="nav-link active btn_nav" data-bs-toggle="modal" data-bs-target="#modal_login_user"> <img src="../img/person-plus-fill.svg" width="30px">Iniciar sesion</a>
                        </a>
                    </li>    
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" id="buscar_producto" placeholder="Buscar producto" aria-label="Search">
                    <button class="btn btn-outline-warning" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!--Formulario-->
    <form method="post" action="./script/Registro_u.php" enctype="multipart/form-data" class="form_reg" id="Form_reg_usu">
            <div>
                        <div>
                            <a>Nombre</a>
                            <br>
                            <input class="control" type="text" name="nombre_u" id="nombre_u" placeholder="Escriba su nombre" required >
                            <br>
                        </div>
                        <div>
                            <br>
                            <a>Apellidos</a>
                            <br>
                            <input class="control" type="text" name="apellidos_u" id="apellidos_u"  placeholder="Escriba sus apellidos" required >
                            <br>
                        </div>
                        <div>
                            <br>
                            <a>Correo</a>
                            <br>
                            <input class="control" type="mail" name="correo_u" id="correo_u" placeholder="Eje: Pedro_lopz@mail.com" required>
                            <br>
                        </div>
                        <div>
                            <br>
                            <a>Contraseña</a>
                            <br>
                            <input class="control" type="password" name="cont_u" id="cont_u" required>
                            <br>
                        </div>
                        <div>
                            <br>
                            <a>Escribe tu CURP</a>
                            <br>
                            <input class="control" type="text" name="cp_u" id="cp_u" >
                            <br>
                        </div>
                        <div>
                            <br>
                            <a>Edad</a>
                            <br>
                            <input class="control" type=" " name="edad_u" id="edad_u" required >
                            <br>
                        </div>
                        <div>
                            <br>
                            <a>Numero de telefono</a>
                            <br>
                            <input class="control" type="tel" name="tel_u" placeholder="Requerido" required >
                            <br>
                        </div>
                        <div>
                            <br>
                            <a>Domicilio</a>
                            <br>
                            <input class="control" type="text" name="dom_u" id="dom_u" placeholder="Eje: Sección Zapata No.50 Gutiérrez Zamora Altotonga ver.">
                            <br>
                        </div>
                        <div>
                            <br>
                            <a>Fotografia para perfil</a>
                            <br>
                            <input class="control" type="file" name="foto_u" id="foto_u" >
                            <br>
                        </div>
                        <div>
                            <br>
                            <a>¿Qué tipo de usuario eres? </a>
                            <br>
                            <select class="form-select control" id="tipo_u" name="tipo_u" required>
                                <option value="Comprador">Comprador</option>
                                <option value="Productor">Productor</option>
                                
                            </select>
                            <br>
                        </div>
                        <br>
                        <!--Solo envio de dts-->
                        <form>
                            <button class="boton" type="post"  id="Registrar_ufrm">Registrar</button>
                        </form>
                    </div>
        </form>

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
      
      <h2 class="fn">Creado por Candelario Hernandez Nepomuceno  y Yovani Aburto Agapito
      </h2>
      
    </footer>

    <!--
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap&libraries=&v=weekly" async></script>
            -->
    
    <script src="./js/jquery-3.6.0.js"></script>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
      
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="./js/registro_usuario.js"></script>
</body>

</html>
</body>

</html>