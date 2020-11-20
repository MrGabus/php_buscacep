<?php

require_once "vendor/autoload.php";

use gabri\php_buscacep\Search;

$busca = new Search;

$resultado = $busca->getAdressFromZipcode('14150000');

print_r($resultado);