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

// Obtener el número del piloto del formulario
$id_p = $_POST['producto'] ?? null;

if ($id_p) {

    include("conexion.php");
    $sql = "DELETE FROM produ WHERE id_p=$id_p";
    $resultado = mysqli_query($conexion,$sql);

    if ($resultado){
        echo "Producto eliminado con éxito.";
    } else {
        echo "Error al eliminar el producto: " . $conn->error;
    }
}


$conn->close();
?>
