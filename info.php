<?php
// Título del archivo
echo "<h1>Información del Servidor</h1>";

// 1. Información de PHP
echo "<h2>PHP Information</h2>";
phpinfo();

// 2. Información de Apache (si está disponible)
echo "<h2>Apache Information</h2>";
if (function_exists('apache_get_version')) {
    echo "<p><strong>Versión de Apache:</strong> " . apache_get_version() . "</p>";
} else {
    echo "<p><strong>Apache:</strong> No se puede obtener la versión (¿Está corriendo como módulo?)</p>";
}

// 3. Información de MySQL (versión del cliente)
echo "<h2>MySQL Information</h2>";
if (function_exists('mysqli_get_client_info')) {
    echo "<p><strong>Cliente MySQL:</strong> " . mysqli_get_client_info() . "</p>";
} else {
    echo "<p><strong>MySQL:</strong> Extensión MySQL no disponible</p>";
}

// Nota: Para ver si MySQL está activo, puedes intentar conectarte
echo "<h3>Estado de conexión a MySQL</h3>";
$conexion = new mysqli("localhost", "root", "", "mysql");
if ($conexion->connect_error) {
    echo "<p style='color: red;'>❌ Error de conexión a MySQL: " . $conexion->connect_error . "</p>";
} else {
    echo "<p style='color: green;'>✅ Conexión a MySQL exitosa</p>";
    $conexion->close();
}
?>
