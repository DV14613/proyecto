<?php
define ("APPNAME","proyecto");
define ("APP_PORT","80");
define ("DEFAULT_CONTROLLER","DashboardController");
define ("ACTION_DEFAULT","dashboard");

define ("portDB","3306");
define ("serverDB","127.0.0.1:".portDB);
define ("userDB","barberia");
define ("pwdDB","1233491302");
define ("database","barberia");



//Ruta de URL general de la aplicacion
$tmpRuta=explode(APPNAME, $_SERVER['PHP_SELF']);
define ("BASE_URL","http://".$_SERVER['SERVER_NAME'].":".APP_PORT.$tmpRuta[0].APPNAME."/");


//Ruta de URL de los assets
define ("BASE_ASSETS",BASE_URL."views/assets/"); 
//Ruta relativa hacia la base de la App
/* $tmpRuta=explode('controllers', $_SERVER['SCRIPT_FILENAME']);
define ("BASE_RELATIVE",$tmpRuta[0]);  */

//Ruta relativa hacia las vistas

$tmpRuta=explode('index.php', $_SERVER['SCRIPT_FILENAME']);
define ("BASE_RELATIVE_VIEWS",$tmpRuta[0]."views/"); 


?>