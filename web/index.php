<?php
// web/index.php

require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . "/../app/AppKernel.php";

date_default_timezone_set("Europe/Berlin");

use Symfony\Component\HttpFoundation\Request;

Dotenv::load(__DIR__ . '/../');

$request = Request::createFromGlobals();
$kernel = new AppKernel($_SERVER['SYMFONY_ENV'], (bool)$_SERVER['SYMFONY_DEBUG']);
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
