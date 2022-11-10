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

/** dado un numero de partida muestra en pantalla los datos de la misma
 * @param array $partidas
 * @param int $numPartida
 * @return 
 */
function datosPartida($arrayPartidas, $numPartida){
    echo "*******************************************************************";
    echo "\nPartida Wordix $numPartida: palabra ".$arrayPartidas[$numPartida]["palabraWordix"];
    echo "\nJugador: ".$arrayPartidas[$numPartida]["jugador"];
    echo "\nPuntaje: ".$arrayPartidas[$numPartida]["puntaje"];
    if (($arrayPartidas[$numPartida]["puntaje"])>0){
        echo "\nIntento: ".$arrayPartidas[$numPartida]["intentos"];
    }
    else {
        echo "\nIntento: No adivino la palabra";
    }
    echo "\n*******************************************************************";
    }

/**
 * (muestra las primeras 10 partidas del wordix)
 * 
 */
function cargarPartidas()
{
    $coleccionPartidas = [];
     $coleccionPartidas[0] = ["palabraWordix" => "QUESO", "jugador" => "majo", "intentos" => 6, "puntaje" => 0];
     $coleccionPartidas[1] = ["palabraWordix" => "CASAS", "jugador" => "rudolf", "intentos" => 3, "puntaje" => 14];
     $coleccionPartidas[2] = ["palabraWordix" => "GOTAS", "jugador" => "pink2000", "intentos" => 6, "puntaje" => 10];
     $coleccionPartidas[3] = ["palabraWordix" => "PISOS", "jugador" => "rudolf", "intentos" => 3, "puntaje" => 16];
     $coleccionPartidas[4] = ["palabraWordix" => "MELON", "jugador" => "pink2000", "intentos" => 4, "puntaje" => 10];
     $coleccionPartidas[5] = ["palabraWordix" => "ABEJA", "jugador" => "lucas", "intentos" => 6, "puntaje" => 0];
     $coleccionPartidas[6] = ["palabraWordix" => "HUEVO", "jugador" => "maria", "intentos" => 2, "puntaje" => 13];
     $coleccionPartidas[7] = ["palabraWordix" => "TINTO", "jugador" => "majo", "intentos" => 4, "puntaje" => 15];
     $coleccionPartidas[8] = ["palabraWordix" => "NAVES", "jugador" => "mario", "intentos" => 6, "puntaje" => 12];
     $coleccionPartidas[9] = ["palabraWordix" => "GOTAS", "jugador" => "mario", "intentos" => 1, "puntaje" => 16];

 
   
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
