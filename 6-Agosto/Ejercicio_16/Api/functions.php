<?php

function responder($status, $mensaje, $datos = null)
{
    http_response_code($status);

    echo json_encode([
        "estado" => $status,
        "mensaje" => $mensaje,
        "datos" => $datos
    ]);

    exit;
}


function buscarPorId($videojuegos, $id)
{
    foreach ($videojuegos as $videojuego) {

        if ($videojuego["id"] == $id) {
            return $videojuego;
        }
    }

    return null;
}



function obtenerTodos($videojuegos)
{
    responder(
        200,
        "Videojuegos obtenidos correctamente",
        $videojuegos
    );
}



function obtenerUno($videojuegos, $id)
{
    $videojuego = buscarPorId($videojuegos, $id);

    if ($videojuego === null) {
        responder(404, "Videojuego no encontrado");
    }

    responder(
        200,
        "Videojuego encontrado correctamente",
        $videojuego
    );
}



function crearVideojuego(&$videojuegos)
{
    $body = file_get_contents("php://input");

    $datos = json_decode($body, true);

    if (
        !isset($datos["nombre"]) ||
        !isset($datos["precio"]) ||
        !isset($datos["descripcion"]) ||
        !isset($datos["url_imagen"])
    ) {
        responder(400, "Faltan datos obligatorios");
    }

    $nuevoId = 1;

    if (count($videojuegos) > 0) {
        $ids = array_column($videojuegos, "id");
        $nuevoId = max($ids) + 1;
    }

    $nuevoVideojuego = [
        "id" => $nuevoId,
        "nombre" => $datos["nombre"],
        "precio" => $datos["precio"],
        "descripcion" => $datos["descripcion"],
        "url_imagen" => $datos["url_imagen"]
    ];

    $videojuegos[] = $nuevoVideojuego;

    responder(
        201,
        "Videojuego creado correctamente",
        $nuevoVideojuego
    );
}




function modificarVideojuego(&$videojuegos, $id)
{
    $indice = null;

    foreach ($videojuegos as $key => $videojuego) {

        if ($videojuego["id"] == $id) {
            $indice = $key;
            break;
        }
    }

    if ($indice === null) {
        responder(404, "Videojuego no encontrado");
    }

    $body = file_get_contents("php://input");

    $datos = json_decode($body, true);

    if (
        !isset($datos["nombre"]) ||
        !isset($datos["precio"]) ||
        !isset($datos["descripcion"]) ||
        !isset($datos["url_imagen"])
    ) {
        responder(400, "Faltan datos obligatorios");
    }

    $videojuegos[$indice]["nombre"] = $datos["nombre"];
    $videojuegos[$indice]["precio"] = $datos["precio"];
    $videojuegos[$indice]["descripcion"] = $datos["descripcion"];
    $videojuegos[$indice]["url_imagen"] = $datos["url_imagen"];

    responder(
        200,
        "Videojuego modificado correctamente",
        $videojuegos[$indice]
    );
}





function eliminarVideojuego(&$videojuegos, $id)
{
    $indice = null;

    foreach ($videojuegos as $key => $videojuego) {

        if ($videojuego["id"] == $id) {
            $indice = $key;
            break;
        }
    }

    if ($indice === null) {
        responder(404, "Videojuego no encontrado");
    }

    $videojuegoEliminado = $videojuegos[$indice];

    unset($videojuegos[$indice]);

    $videojuegos = array_values($videojuegos);

    responder(
        200,
        "Videojuego eliminado correctamente",
        $videojuegoEliminado
    );
}
