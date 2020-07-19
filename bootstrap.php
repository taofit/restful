<?php
require 'vendor/autoload.php';
use Dotenv\Dotenv;
use Src\System\DatabaseConnector;

$dotenv = new DotEnv(__DIR__);
$dotenv->load();

echo getenv('OKTAAUDIENCE');
$dbConnection = (new DatabaseConnector())->getConnection();
