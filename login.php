<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "pinta";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$username = $_POST['txtusuario'];
$password = $_POST['txtpassword'];


$sql = "SELECT * FROM users WHERE username = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();


if ($result->num_rows > 0) {

    header("Location: union.html");
    exit(); 
} else {
    echo "Nombre de usuario o contraseña incorrectos.";
}


$stmt->close();
$conn->close();
?>

