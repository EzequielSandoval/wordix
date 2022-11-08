<?php
include_once("wordix.php");

/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/* Apellido, Nombre. Legajo. Carrera. mail. Usuario Github */
/* ... COMPLETAR ... */



/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/

/**
 * Obtiene una colección de palabras
 * @return array
 */
function cargarColeccionPalabras()
{
    $coleccionPalabras = [
        "MUJER", "QUESO", "FUEGO", "CASAS", "RASGO",
        "GATOS", "GOTAS", "HUEVO", "TINTO", "NAVES",
        "VERDE", "MELON", "YUYOS", "PIANO", "PISOS",
        "PERRO", "HABLO", "DANDO", "ABEJA", "GAFAS"
    ];

    return ($coleccionPalabras);
}

/**
 * 
 * 
 */
function cargarPartidas()
{
    $coleccionPartidas = [];
    // $coleccionParidas[0] = ["palabraWordix" => "MUJER", "jugador" => "juan", "intentos" => 0, "puntaje" => 0];
    // $coleccionParidas[1] = ["palabraWordix" => "QUESO", "jugador" => "majo", "intentos" => 0, "puntaje" => 0];
    // $coleccionParidas[2] = ["palabraWordix" => "GOTAS", "jugador" => "andres", "intentos" => 0, "puntaje" => 0];
    // $coleccionParidas[3] = ["palabraWordix" => "TINTO", "jugador" => "santiago", "intentos" => 0, "puntaje" => 0];
    // $coleccionParidas[4] = ["palabraWordix" => "GAFAS", "jugador" => "juan", "intentos" => 0, "puntaje" => 0];
    // $coleccionParidas[5] = ["palabraWordix" => "VERDE", "jugador" => "ezequiel", "intentos" => 0, "puntaje" => 0];
    // $coleccionParidas[6] = ["palabraWordix" => "PERRO", "jugador" => "maria", "intentos" => 0, "puntaje" => 0];
    // $coleccionParidas[7] = ["palabraWordix" => "MUJER", "jugador" => "juan", "intentos" => 0, "puntaje" => 0];
    // $coleccionParidas[8] = ["palabraWordix" => "YUYOS", "jugador" => "daniela", "intentos" => 0, "puntaje" => 0];
    // $coleccionParidas[9] = ["palabraWordix" => "CASAS", "jugador" => "marcos", "intentos" => 0, "puntaje" => 0];

 
    // $coleccionPartidas = [
    //     "palabraWordix" => $palabra,
    //     "jugador"  => $jugador,
    //     "intentos" => $intento,
    //     "puntaje" => $puntaje,
    // ];
}

/* ... COMPLETAR ... */



/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:


//Inicialización de variables:


//Proceso:




$partida = jugarWordix("MELON", strtolower("MaJo"));
//print_r($partida);
//imprimirResultado($partida);



/*
do {
    $opcion = ...;

    
    switch ($opcion) {
        case 1: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 1

            break;
        case 2: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 2

            break;
        case 3: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 3

            break;
        
            //...
    }
} while ($opcion != X);
*/
