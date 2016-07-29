<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "pruebas";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	// prepare and bind
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$comentario = $_POST['comentario'];
	$stmt = $conn->prepare("INSERT INTO comentarios (Nombre, Correo, Comentario) VALUES (?, ?, ?)");
	$stmt->bind_param("sss", $nombre, $correo, $comentario);
	$stmt->execute();
	$stmt->close();
	$conn->close();
	
	
?>
<script language='JavaScript'> 
                alert('Recibido, Gracias');
                window.location.href = 'index.html'; 
                </script>";
	