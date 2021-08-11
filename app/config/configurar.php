<?php 

// configuracion de acceso a la base de datos
define('DB_HOST', 'localhost');
define('DB_USUARIO', 'root');
define('DB_PASSWORD', '');
define('DB_NOMBRE', 'masterfiles');

// ruta de la aplicacion
define('RUTA_APP', dirname(dirname(__FILE__)));

// ruta url
define('RUTA_URL', 'http://localhost/proyecto_tienda');

// nombre del sitio
define('NOMBRE_SITIO', 'Tienda');

define('PUBLIC_DIR', str_replace('index.php','', $_SERVER['PHP_SELF']));
