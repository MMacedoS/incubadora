<?php

header('Content-Type: text/html; charset=utf-8');
define('ROTA_GERAL', "http://$_SERVER[HTTP_HOST]/incubadora");

require __DIR__ . "/APP/Config/autoload.php";

$route = new Route();
$route->run();