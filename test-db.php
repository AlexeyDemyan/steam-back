<?php

$env = file_get_contents(__DIR__."/.env");

// echo $env['DB_USERNAME'];

var_dump($env);

// $host = env('DB_HOST');
// $port = env('DB_PORT');
// $database = env('DB_DATABASE');
// $user = env('DB_USERNAME');
// $password = env('DB_PASSWORD');

// $conStr = "pgsql:host={$host};port={$port};dbname={$database};user={$user};password={$password}";
// $pdo = new \PDO($conStr);
