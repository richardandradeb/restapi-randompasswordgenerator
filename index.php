<?php

use Richard\RandomPasswordGeneratorApi\RandomPasswordGenerator;

require_once __DIR__.'/vendor/autoload.php';

header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

date_default_timezone_set("America/Sao_Paulo");

$generate = new RandomPasswordGenerator($_SERVER['REQUEST_METHOD']);
echo $generate->generateRandomPassword();