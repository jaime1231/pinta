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

// Obtener el número del piloto
$id_p = $_GET['producto'] ?? null;

if ($id_p) {
    
    include("conexion.php");
    $sql = "SELECT * FROM produ WHERE id_p='$id_p'";
    $resultado = mysqli_query($conexion,$sql);

    if ($resultado) {
        $produ = $resultado->fetch_assoc();
       
        echo '<!DOCTYPE html>';
        echo '<html lang="es">';
        echo '<head>';
        echo '<meta charset="UTF-8">';
        echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
        echo '<link rel="stylesheet" href="CSS/estilo.css">';
        echo '<title>Modificar Piloto</title>';
        echo '</head>';
        echo '<body>';
        echo '<h2>Modificar Piloto</h2>';
        echo '<form action="guardar.php" method="POST">';
        echo '<input type="hidden" name="producto" value="'.$produ['id_p'].'">';
        echo '<label for="nombre">Nombre:</label>';
        echo '<input type="text" id="nombre" name="nombre" value="'.$produ['nombre_del_producto'].'"><br>';
        echo '<label for="precio">precio:</label>';
        echo '<input type="number" id="precio" name="precio" value="'.$produ['precio'].'"><br>';
        echo '<label for="descripcion">descripcion:</label>';
        echo '<input type="text" id="descripcion" name="descripcion" value="'.$produ['Descripcion'].'"><br>';
        echo '<button type="submit">Guardar Cambios</button>';
        echo '</form>';
        echo '</body>';
        echo '</html>';
    } else {
        echo "No se encontró el piloto con el número proporcionado.";
    }
}


$conn->close();
?>

