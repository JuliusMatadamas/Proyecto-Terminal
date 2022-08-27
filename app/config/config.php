<?php

// Raíz de la aplicación
define ('APP_ROOT' , dirname(dirname(__FILE__)));

// Url de la aplicación
$_SERVER['SERVER_ADDR'] == "::1" ? define('URL_ROOT', 'http://localhost/proyecto-terminal') : define('URL_ROOT', 'http://dptjumz.atwebpages.com');

// Nombre del sitio
define ('APP_NAME', 'SICOI');
