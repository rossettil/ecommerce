<?php
$host = "localhost";
$db = "ecommerce";
$user = "root";
$password = "";

try {
    $conexion = new PDO (
        "mysql:host=$host;dbname=$db",
        $user,
        $password
    );
} catch (PDOException $error) {
    die("Error de conexion " . $error->getMessage());
}