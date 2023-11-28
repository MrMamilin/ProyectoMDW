<?php
$server = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "pesos_finanzas";

$conn = new mysqli($server, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
