<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "CONCESIONARIO";

// Conectar a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener los datos del formulario
$placa = $_POST['placa'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$color = $_POST['color'];

// Insertar datos en la tabla AUTO
$sql = "INSERT INTO AUTO (Placa, Marca, Modelo, Color) VALUES ('$placa', '$marca', $modelo, '$color')";

if ($conn->query($sql) === TRUE) {
    echo "Registro insertado con éxito";
} else {
    echo "Error al insertar registro: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
