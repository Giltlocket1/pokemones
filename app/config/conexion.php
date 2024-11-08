<?php
$servidor = "localhost";
$nombre_db = "progra_web";//nombre de la base datos
$usuario = "root";//usuario
$pass = "";

try { // atrapa errores
    $conexion = new PDO("mysql:host=$servidor;dbname=$nombre_db;,$usuario,$pass");
} catch (PDOException $e) {
    echo "se ha generado un error de conexion: $e";
}
