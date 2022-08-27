<?php
// Se carga el archivo de configuración
require_once 'config/config.php';

// Se cargan las librerías

spl_autoload_register (function($className){
    require_once 'libraries/' . $className . '.php';
});
