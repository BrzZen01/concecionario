<?php
$servername = "localhost";
$username = "root"; // Cambia esto si tienes un usuario diferente
$password = ""; // Deja en blanco si no has establecido una contraseña

// Conectar a la base de datos MySQL (XAMPP debe estar en ejecución)
$conn = new mysqli($servername, $username, $password);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Crear la base de datos CONCESIONARIO
$sql = "CREATE DATABASE IF NOT EXISTS CONCESIONARIO";
if ($conn->query($sql) === TRUE) {
    echo "Base de datos CONCESIONARIO creada con éxito";
} else {
    echo "Error al crear la base de datos: " . $conn->error;
}

// Seleccionar la base de datos
$conn->select_db("CONCESIONARIO");

// Crear la tabla AUTO
$sql = "CREATE TABLE IF NOT EXISTS AUTO (
    Placa VARCHAR(6) PRIMARY KEY,
    Marca VARCHAR(15),
    Modelo INT,
    Color VARCHAR(10)
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabla AUTO creada con éxito";
} else {
    echo "Error al crear la tabla: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
