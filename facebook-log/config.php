<?php

//carga del archivo de configuracion
require_once 'vendor/autoload.php';

//carga de sesion
if(!session_id())
{
    session_start();
}

$facebook = new \Facebook\Facebook([
    //id app
    'app_id'        =>  '283872357043103',
    //id secreto de la app
    'app_secret'    =>  'da378961968fde72d87d03111ea74ee6',
    // version de sdk de facebook
    'default_graph_version'  => 'v2.10'

]);

?>
