<?php
   session_start();
    require_once('./Modal_admin/usuarios.php');
    require_once('../User/modal/sesion.php');
    $logeado=false;
    if(isset($_SESSION['Usuario']['nombre_u'])){
        $logeado=true;
        $nombre_user=$_SESSION['Usuario']['nombre_u']." ".$_SESSION['Usuario']['apellidos_u']."".$_SESSION['Usuario']['tipo_u'];

        if($_SESSION['Usuario']['tipo_u'] == ''){
            header('Location: ../Index.php');
        }
        if ($_SESSION['Usuario']['tipo_u'] == "Comprador") {
            header('Location: ../User/Comprador.php');
        }
        if ($_SESSION['Usuario']['tipo_u'] == "Productor") {
            header('Location: ../User/Panel.php');
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
    <title>Panel de administrador</title>
    <link rel="stylesheet" href="../css/Estilo.css">
    <link rel="stylesheet" href="../css/perfil.css">
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
                  <!-- Barra herramientas -->
                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                          <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modal_logout"><img src="../img/exit.svg" width="30px"></button>
                          <button type="button" class="btn btn-dark"><i class="material-icons">settings</i></button>
                        </div>
                  </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-warning" type="submit">Search</button>
                    </form>
                </div>
            </div>
      </nav>

       <!--Tarjeta de perfil de usuario-->
       <section class="container">
            
            <div class="con">
                <div>
                    <div class="hea float-lg-start">
                        <a href="#">
                            <img src="../img/Person_prof.svg" width="200px" class="ima float-start" alt="">
                        </a>
                        <h2>User</h2>
                        <h4>User</h4>
                    <div>
                        <div class="info">
                            <p class="ed">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</P>
                            <a href="#"><img class="icon" src="../img/facebook.svg" width="50px"></a>
                            <a href="#"><img class="icon"  src="../img/twitter.svg" width="50px"></a>
                            <a href="#"><img class="icon"  src="../img/telephone.svg" width="50px"></a>
                        </div>
                    </div>
                </div>
            </div>
         
        </section>
        <br>
        <div class="container">
            <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"># ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellidos</th>
                                <th scope="col">Edad</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Tipo</th>
                            </tr>
                        </thead>
                        <!-- tabla de usuarios-->
                        <tbody class="tabla_usuarios">

                        </tbody>
                    </table>
            </div>
        </div>
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

    <script src="./js/jquery-3.6.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="./js/Admin.js"></script>
    
    <!--Scripts
      <script src="../Recursos/jQuery/jquery-3.6.0.js "></script>
      <script src="../Recursos/bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js "></script>
      <script src="../Recursos/bootstrap-5.0.1-dist/js/bootstrap.min.js "></script>
      -->

</html>
</body>

</html>