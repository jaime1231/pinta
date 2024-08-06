<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "pinta";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


$id_p  = $_POST['producto']?? null;
$nombre_del_producto = $_POST['nombre']?? '';
$precio = $_POST['precio']?? '';
$Descripcion = $_POST['descripcion']?? '';


if ($id_p) {
    include("conexion.php");
    $sql = "UPDATE produ SET nombre_del_producto ='$nombre_del_producto', precio='$precio', Descripcion='$Descripcion' WHERE id_p='$id_p'";
    $resultado = mysqli_query($conexion,$sql);

    if ($resultado) {
        echo "Los cambios se guardaron correctamente.";
    } else {
        echo "Error al guardar los cambios: " . $conn->error;
    }
} else {
    echo "No se recibió el ID del producto para actualizar.";
}


$conn->close();
?>
