<?php

require_once "../config/Database.php";
require_once "../apps/models/persona.php";

$database = new Database();
$conexion = $database->conectar();

if ($conexion) {
    echo "Conexion exitosa<br><br>";
} else {
    echo "Conexion fallida";
}

$consulta1 = new PersonaModel();
$personas = $consulta1->listar();

print_r($personas);