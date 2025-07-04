<?php
require_once '/laragon/www/carrinhopshoping/BackEnd/config.php';

$pdo->exec("CREATE TABLE IF NOT EXISTS products (
id INT,
name VARCHAR (255) NOT NULL,
price FLOAT NOT NULL,
image VARCHAR (255) NOT NULL
)");


$pdo->exec("CREATE TABLE IF NOT EXISTS cart (
id INT,
name VARCHAR (255) NOT NULL,
price FLOAT NOT NULL,
image VARCHAR (255) NOT NULL,
qty INT
)");

$pdo->exec("CREATE TABLE IF NOT EXISTS orders (
id INT,
name VARCHAR (255) NOT NULL,
number int NOT NULL,
emaiL VARCHAR (255) UNIQUE NOT NULL,
method ENUM ('Debito', 'Credito') DEFAULT 'Credito',
code_art INT,
street VARCHAR (255) NOT NULL,
city VARCHAR (255) NOT NULL,
state VARCHAR (255) NOT NULL,
country VARCHAR (255) NOT NULL,
pin_code INT,
total_products VARCHAR (255) NOT NULL,
total_price FLOAT
)");
?>