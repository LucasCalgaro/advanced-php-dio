<?php

require_once "vendor/autoload.php";

use lucas\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('87005090');

print_r($resultado);