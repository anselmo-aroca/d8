<?php

require dirname(__DIR__).'/prueba/vendor/autoload.php';

use \ANS\src\libs;

$mensaje = new libs();

echo "esto es una prueba ".$mensaje->hola()."...";

