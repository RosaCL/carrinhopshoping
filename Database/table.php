<?php
require_once '/laragon/www/carrinhopshoping/BackEnd/config.php';

$pdo->exec("CREATE TABLE IF NOT EXISTS products (
id INT,
name VARCHAR (255) NOT NULL,
price FLOAT NOT NULL,
image VARCHAR (255) NOT NULL
)");

?>