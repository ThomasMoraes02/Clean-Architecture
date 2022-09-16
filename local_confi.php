<?php 

$config_database = [
    // "DB_DRIVER" => "sqlite",
    "DB_DRIVER" => "mysql",
    "DB_HOST" => "127.0.0.1",
    "DB_NAME" => "student",
    "DB_USER" => "root",
    "DB_PASS" => "123456"
];

// $this->connection = new PDO("mysql:host=127.0.0.1;dbname=student", "root", "123456");

// if($DB_DRIVER == "sqlite") {
//     $instace = "sqlite:" . __DIR__ . "../database/database.sqlite";
// }

$configApp = [];
$configApp['DATABASE'] = $config_database;