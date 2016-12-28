<?php

require dirname(__DIR__).'/d8/vendor/autoload.php';

use \ANS\src\libs;

$mensaje = new libs();

echo "esto es una ".$mensaje->hola()."...";

