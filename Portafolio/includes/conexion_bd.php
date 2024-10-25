<?php
$servidor = 'localhost';
$usuario = 'root';
$password = 'root';
$bd = 'portafolio';

$conexion = mysqli_connect($servidor, $usuario, $password, $bd);

if (!$conexion) {
    die('Error en la conexión: ' . mysqli_connect_error());
}
