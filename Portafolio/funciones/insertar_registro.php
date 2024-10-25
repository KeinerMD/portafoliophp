<?php require '../includes/conexion_bd.php';

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];
$fecha = date("Y-m-d H:i:s");

$sql = "INSERT INTO formulario (nombre, telefono, correo, mensaje, fecha) VALUES (?, ? , ? , ?, ?)";

$stmt = mysqli_prepare($conexion, $sql);
mysqli_stmt_bind_param($stmt, "sisss", $nombre, $telefono, $correo, $mensaje, $fecha);

if (mysqli_stmt_execute($stmt)) {
    echo "El mensaje ha sido enviado correctamente.";
} else {
    echo "Hubo un error al enviar el mensaje: " . mysqli_stmt_error($stmt);
}

mysqli_stmt_close($stmt);
mysqli_close($conexion);