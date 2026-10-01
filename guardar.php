<?php
// Conexión a la base de datos
conexion = new mysqli("localhost", "root", "", "buscamed_db");

// Verificar conexión
if (conexion->connect_error) {
    die("Error de conexión: " . conexion->connect_error);
}

// Recibir datos del formulario
email = _POST['email'];
password = _POST['password'];

// Insertar en la tabla usuarios
sql = "INSERT INTO usuarios (email, password) VALUES ('email', 'password')";

if (conexion->query(sql) === TRUE) {
    echo "✅ Usuario registrado correctamente.";
} else {
    echo "❌ Error: " . conexion->error;
}

conexion->close();
?>
