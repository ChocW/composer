<?php

require '../vendor/autoload.php';

$bonjour = new App\Wcs\Hello();

echo $bonjour->talk();

$ehime = new HelloWorld\SayHello();

echo '<br>';

echo $ehime->world();

