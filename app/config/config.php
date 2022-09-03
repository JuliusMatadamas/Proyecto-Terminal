<?php

// Credenciales de la base de datos
if ($_SERVER['SERVER_ADDR'] == "::1")
{
    define ('DB_HOST', 'localhost');
    define ('DB_USER', 'root');
    define ('DB_PASSWORD', '');
    define ('DB_NAME', 'dpt');
}
else
{
    define ('DB_HOST', 'fdb21.awardspace.net');
    define ('DB_USER', '3110776_jumz');
    define ('DB_PASSWORD', ')W/mkMF23l4S4?.h');
    define ('DB_NAME', '3110776_jumz');
}

// Raíz de la aplicación
define ('APP_ROOT' , dirname(dirname(__FILE__)));

// Url de la aplicación
$_SERVER['SERVER_ADDR'] == "::1" ? define('URL_ROOT', 'http://localhost/proyecto-terminal') : define('URL_ROOT', 'http://juliocmatadamasz.dx.am');

// Nombre del sitio
define ('APP_NAME', 'SICOI');
