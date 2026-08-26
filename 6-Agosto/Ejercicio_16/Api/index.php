<?php

require_once "data.php";


require_once "functions.php";

$metodo = $_SERVER["REQUEST_METHOD"];
$url = $_SERVER["REQUEST_URI"];
$partes = explode("/", trim($url, "/"));
$id = null;

if (isset($partes[count($partes) - 1])) {

    $ultimo = $partes[count($partes) - 1];

    if (is_numeric($ultimo)) {
        $id = $ultimo;
    }
}

switch ($metodo) {

    case "GET":
        if ($id !== null) {
            obtenerUno($videojuegos, $id);
        }

        obtenerTodos($videojuegos);
        
        break;

    case "POST":
        crearVideojuego($videojuegos);
        break;

    case "PUT":
            
        if ($id === null) {
            responder(400, "Se necesita un ID");
        }

        modificarVideojuego($videojuegos, $id);
        break;

    case "DELETE":
        if ($id === null) {
            responder(400, "Se necesita un ID");
        }
        eliminarVideojuego($videojuegos, $id);

        break;


    default:
        responder(405, "Método no permitido");
}
