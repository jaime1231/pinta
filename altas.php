<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "root"; // Usuario por defecto de XAMPP
$password = ""; // Contraseña vacía por defecto
$dbname = "pinta";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$id_p  = $_POST['producto'];
$nombre_del_producto= $_POST['nombre'];
$precio = $_POST['precio'];
$Descripcion = $_POST['descripcion'];

// Preparar y ejecutar la consulta
include("conexion.php");
$sql = "INSERT INTO produ (id_p, nombre_del_producto, precio, Descripcion)
        VALUES ($id_p, '$nombre_del_producto', $precio, '$Descripcion')";
        $resultado = mysqli_query($conexion,$sql);

 if ($resultado) {
     echo "Nuevo registro creado con éxito";
 } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }
 
 
 $conn->close();
 ?>