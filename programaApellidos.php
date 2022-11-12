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

//--------------------PUNTO C DE LA EXPLICACION 2 --------------------
/**
 * muestra el resumen de jugadores
 * @return array
 */
function cargarResumenJugador()
{
    $resumenJugador = [];
    $resumenJugador[0] = ["jugador" => "majo", "partidas" => 2, "puntaje" => 15, "victorias" => 1, "intento1" => 0, "intento2" => 0, "intento3" => 0, "intento4" => 1, "intento5" => 0, "intento6" => 1];
    $resumenJugador[1] = ["jugador" => "rudolf", "partidas" => 2, "puntaje" => 30, "victorias" => 2, "intento1" => 0, "intento2" => 0, "intento3" => 2, "intento4" => 0, "intento5" => 0, "intento6" => 0];
    $resumenJugador[2] = ["jugador" => "pink2000", "partidas" => 2, "puntaje" => 20, "victorias" => 2, "intento1" => 0, "intento2" => 0, "intento3" => 0, "intento4" => 1, "intento5" => 0, "intento6" => 1];
    $resumenJugador[3] = ["jugador" => "lucas", "partidas" => 1, "puntaje" => 0, "victorias" => 0, "intento1" => 0, "intento2" => 0, "intento3" => 0, "intento4" => 0, "intento5" => 0, "intento6" => 1];
    $resumenJugador[4] = ["jugador" => "maria", "partidas" => 1, "puntaje" => 13, "victorias" => 1, "intento1" => 0, "intento2" => 1, "intento3" => 0, "intento4" => 0, "intento5" => 0, "intento6" => 0];
    $resumenJugador[5] = ["jugador" => "mario", "partidas" => 2, "puntaje" => 28, "victorias" => 2, "intento1" => 1, "intento2" => 0, "intento3" => 0, "intento4" => 0, "intento5" => 0, "intento6" => 1];
    return ($resumenJugador);
}


//-------------------- PUNTO 1 DE LA EXPLICACION 3 --------------------
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

//-------------------- PUNTO 2 DE LA EXPLICACION 3 --------------------
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

//-------------------- PUNTO 3 DE LA EXPLICACION 3 --------------------
/**
 *muestra el menu de opciones que tendra nuestro programa wordix, y retornara el numero de la eleccion elegida 
 */

function seleccionarOpcion()
{
    //int $opcionElegida
    //int $numMax
    //int $numMin
    //array $lasOpciones

    $lasOpciones[1] = "1)Jugar wordix con una palabra elegida.";
    $lasOpciones[2] = "2)Jugar al wordix con una palabra aleatoria.";
    $lasOpciones[3] = "3)Mostrar una partida.";
    $lasOpciones[4] = "4)Mostrar la primera partida ganadora.";
    $lasOpciones[5] = "5)Mostrar resumen de jugador.";
    $lasOpciones[6] = "6)mostrar listado de partidas ordenadas por jugador y por palabra.";
    $lasOpciones[7] = "7)agregar una palabra de 5 letras a wordix.";
    $lasOpciones[8] = "8)Salir.";

    $numMax = count($lasOpciones);
    $numMin = 1;

    echo "\n" . $lasOpciones[1] . "\n";
    echo "\n" . $lasOpciones[2] . "\n";
    echo "\n" . $lasOpciones[3] . "\n";
    echo "\n" . $lasOpciones[4] . "\n";
    echo "\n" . $lasOpciones[5] . "\n";
    echo "\n" . $lasOpciones[6] . "\n";
    echo "\n" . $lasOpciones[7] . "\n";
    echo "\n" . $lasOpciones[8] . "\n";
    echo "\n" . "ingrese una opcion del menu:";

    $opcionElegida = solicitarNumeroEntre($numMin, $numMax);
    return $opcionElegida;
}

//--------------------PUNTO 4 DE LA EXPLICACION 3 (ESTA EN EL wordix.php LINEA 150) --------------------
//--------------------PUNTO 5 DE LA EXPLICACION 3 (ESTA EN EL wordix.php LINEA 30)--------------------

//--------------------PUNTO 6 DE LA EXPLICACION 3 --------------------
/** dado un numero de partida muestra en pantalla los datos de la misma
 * @param array $partidas
 * @param int $numPartida
 * @return 
 */
function datosPartida($arrayPartidas, $numPartida)
{
    echo "*******************************************************************";
    echo "\nPartida Wordix $numPartida: palabra " . $arrayPartidas[$numPartida]["palabraWordix"];
    echo "\nJugador: " . $arrayPartidas[$numPartida]["jugador"];
    echo "\nPuntaje: " . $arrayPartidas[$numPartida]["puntaje"];
    if (($arrayPartidas[$numPartida]["puntaje"]) > 0) {
        echo "\nIntento: " . $arrayPartidas[$numPartida]["intentos"];
    } else {
        echo "\nIntento: No adivino la palabra";
    }
    echo "\n*******************************************************************";
}



//--------------------PUNTO 7 EXPLICACION 3 --------------------

/**
 * (agrega una nueva palabra al juego)
 * @return array 
 */
function agregarPalabra($colecPalabras, $palabraNueva)
{
    //int $cantPalabras
    $cantPalabras = count($colecPalabras);
    $colecPalabras[$cantPalabras] = $palabraNueva;
    return $colecPalabras;
}

//--------------------PUNTO 8 EXPLICACION 3 --------------------
/** 
* (retorna el índice de la primera partida ganada por un jugador)
* @param array $collecionPartida
* @param string $nombJugador
*/
function primeraVictoria ($nombJugador, $coleccionPartidas){
    //$num int
    
    $f=9;
    $valor =- 1;
    for($n=0; $n<=$f; $n++){
        if (($coleccionPartidas[$n]["jugador"]==$nombJugador) && ($coleccionPartidas[$n]["puntaje"] != 0)){
            $valor = 1;
            $indice = $n;
        }
        
    }
    if($valor == -1){
        return $valor;
    }else{
        
        echo "\n"."palabra jugada:".$coleccionPartidas[$indice]["palabraWordix"]."\n";
        echo "\n"."jugador:".$coleccionPartidas[$indice]["jugador"]."\n";
        echo "\n"."intentos realizados:".$coleccionPartidas[$indice]["intentos"]."\n";
        echo "\n"."puntaje:".$coleccionPartidas[$indice]["puntaje"]."\n";
    }

}

//--------------------PUNTO 9 EXPLICACION 3 --------------------
/**
 * muestra el resumen de un jugador especifico
 * @param string $nombreJugador 
 * @return array
 */
function resumenUnJugador($nombreJugador)
{
    // array $arrayJugadores
    $arrayJugadores = cargarResumenJugador();

    for ($i = 0; $i < count($arrayJugadores); $i++) {
        if ($arrayJugadores[$i]["jugador"] == $nombreJugador) {
            echo "*******************************";
            echo "\nJugador: " . $arrayJugadores[$i]["jugador"];
            echo "\nPartidas: " . $arrayJugadores[$i]["partidas"];
            echo "\nPuntaje Total: " . $arrayJugadores[$i]["puntaje"];
            echo "\nVictorias: " . $arrayJugadores[$i]["victorias"];
            echo "\nPorcentaje de victorias: " . $arrayJugadores[$i]["victorias"] * 100 / $arrayJugadores[$i]["partidas"] . "%";
            echo "\nAdivinadas: \n";
            echo "  Intento 1: " . $arrayJugadores[$i]["intento1"] . "\n";
            echo "  Intento 2: " . $arrayJugadores[$i]["intento2"] . "\n";
            echo "  Intento 3: " . $arrayJugadores[$i]["intento3"] . "\n";
            echo "  Intento 4: " . $arrayJugadores[$i]["intento4"] . "\n";
            echo "  Intento 5: " . $arrayJugadores[$i]["intento5"] . "\n";
            echo "  Intento 6: " . $arrayJugadores[$i]["intento6"] . "\n";
            echo "*******************************";
        }
    }
}
/** --------------------- PUNTO 10 DE LA EXPLICACION 3 ---------------------
 * solicita al usuario el nombre de un jugador y lo retorna en minusculas
 * @param 
 * @return 
 */

function solicitarJugador()
{
    //string $nombreSolicitado
    echo "ingrese un nombre:\n";
    $soliNomb = trim(fgets(STDIN));
    $primLetra = str_split($soliNomb);
    $vof = ctype_alpha($primLetra[0]);
    //echo strlen($soliNomb)."\n";
    while ($vof == false) {
        echo "el nombre no es valido\n";
        echo "ingrese otro nombre: ";
        $soliNomb = trim(fgets(STDIN));
        $primLetra = str_split($soliNomb);
        $vof = ctype_alpha($primLetra[0]);
    }
    if ($vof == true) {
        $soliNomb = strtolower($soliNomb);
        echo "\n" . $soliNomb;
    }
}
//--------------------PUNTO 11 EXPLICACION 3 --------------------
/**
 * ( muestra la colección de partidas ordenada por el nombre del jugador y por la palabra)
 * @param array $coleccPartidas
 */
function ordenarColeccionPartidas($coleccPartidas){

    /**
    * (ordena por nombre del jugador)
    *@param string $a
    *@param string $b
    *@return int
    */
    function ordenadoxNombre($a,$b,){
        if($a["jugador"]==$b["jugador"]){
            $orden=0;
        }
        elseif($a["jugador"]<$b["jugador"]){
            $orden=-1;
        }
        else{
            $orden=1;
        }
        return $orden;   
    }

    /**
    * (ordena por palabras)
    *@param string $a
    *@param string $b
    *@return int
    */
    function ordenadoxPalabra($a,$b,){
        if($a==$b){
            $orden=0;
        }
        elseif($a<$b){
            $orden=-1;
        }
        else{
            $orden=1;
        }
        return $orden;  
    }

    uasort($coleccPartidas, 'ordenadoxNombre');
    echo "********** ORDENADO POR NOMBRE **********\n";
    print_r($coleccPartidas);

    uasort($coleccPartidas, 'ordenadoxPalabra');
    echo "********** ORDENADO POR PALABRA **********\n";
    Print_r($coleccPartidas);

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
