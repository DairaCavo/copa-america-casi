<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "copaamerica";

// Crear conexion
$con = new mysqli($servername, $username, $password, $database);

// Comprobar conexion
if ($con->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
}



?>