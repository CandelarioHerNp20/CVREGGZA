<?php
//llamada al archivo de configuracion config.php
include('./config.php');

$facebook_output = '';

$facebook_helper = $facebook->getRedirectLoginHelper();

if(isset($_GET['code']))
{
 if(isset($_SESSION['access_token']))
 {
  $access_token = $_SESSION['access_token'];
 }
 else
 {
  $access_token = $facebook_helper->getAccessToken();

  $_SESSION['access_token'] = $access_token;

  $facebook->setDefaultAccessToken($_SESSION['access_token']);
 }
//token con para obtener los datos del usuario
 $_SESSION['user_id'] = '';
 $_SESSION['user_name'] = '';
 $_SESSION['user_email_address'] = '';
 $_SESSION['user_image'] = '';

 $graph_response = $facebook->get("/me?fields=name,email", $access_token);

 $facebook_user_info = $graph_response->getGraphUser();

 if(!empty($facebook_user_info['id']))
 {
  $_SESSION['user_image'] = 'http://graph.facebook.com/'.$facebook_user_info['id'].'/picture';
 }

 if(!empty($facebook_user_info['name']))
 {
  $_SESSION['user_name'] = $facebook_user_info['name'];
 }

 if(!empty($facebook_user_info['email']))
 {
  $_SESSION['user_email_address'] = $facebook_user_info['email'];
 }
 
}
else
{
 // Get login url
    $facebook_permissions = ['email']; // Optional permissions
    //poner el url de la pagina web dentro de getLoginUrl('') para poder guardar la sesion
    $facebook_login_url = $facebook_helper->getLoginUrl('https://cvreggza.com.mx/facebook-log', $facebook_permissions);
    
    // Boto de facebook para login
    $facebook_login_url = '<div align="center"><a href="'.$facebook_login_url.'" class="btn btn-primary" type="button">Login</a></div>';
}



?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Index</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  
 </head>
 <body>
  <div class="container">
   <br />
   <h2 align="center">Logearse con facebook</h2>
   <br />
   <div class="panel panel-default">
    <?php 
    //para solicitar acceso a la cuenta de facebook en caso de no estar logeado
    if(isset($facebook_login_url))
    {
     echo $facebook_login_url;
    }
    // en caso contrario se mostrarn los siguintes eelentos
    else
    {
     echo '<div class="panel-heading">Bienvenido usuario: </div><div class="panel-body">';
     echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';
     echo '<h3><b>Nombre :</b> '.$_SESSION['user_name'].'</h3>';
     echo '<h3><b>Correo :</b> '.$_SESSION['user_email_address'].'</h3>';
     echo '<h3><a href="logout.php">Logout</h3></div>';
    }
    ?>
   </div>
  </div>
 </body>
</html>
