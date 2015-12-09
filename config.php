<?php
$_GET['a'] = (isset($_GET['a']))?$_GET['a']:"Inicio";
if($_SERVER["SERVER_NAME"] != "localhost")
{
    #error_reporting(E_ALL);
    error_reporting(0);
	define('PATH', "http://".$_SERVER['SERVER_NAME'].DIRECTORY_SEPARATOR);
	define('ABSPATH', dirname(__FILE__).DIRECTORY_SEPARATOR);
}
else
{
    define("ERRORTRACE",TRUE);
        if(ERRORTRACE) {error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);}
	define('PATH', "http://localhost/music2.com/");
	define("ABSPATH", $_SERVER['DOCUMENT_ROOT'] .'/music2.com/');
}

define("AUTHOR", "Brenda Ventolero");

