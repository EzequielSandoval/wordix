<?php
include_once("wordix.php");

/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/* Apellido, Nombre. Legajo. Carrera. mail. Usuario Github */

/* Menard, Andres. FAI-4309. TUDW. andres.menard@est.fi.uncoma.edu.ar. @userAndres99 */
/* Sandoval, Ezequiel. FAI-3211. TUDW. ezequiel.sandoval@est.fi.uncoma.edu.ar. @EzequielSandoval */
/* Calderon Exequiel. FAI-4432. TUDW . mario.calderon@est.fi.uncoma.edu.ar. @CalderonExe22 */
/* Lucero, Santiago. FAI-4129. TUDW. santiago.lucero@est,fi.uncoma.edu.ar. @santylucero */

/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/

//-------------------- PUNTO 1 DE LA EXPLICACION 3 --------------------
/**                           
 * Obtiene una colección de palabras
 * @return array
 */
function cargarColeccionPalabras(){
    //array $coleccionPalabras
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
 * @return array
 */
function cargarPartidas(){
    //array $coleccion, $pa1, $pa2, $pa3, $pa4, $pa5, $pa6, $pa7, $pa8, $pa9, $pa10, $pa11, $pa12
    /*
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

    // return ($coleccionPartidas); */

    $coleccion = [];
    $pa1 = ["palabraWordix" => "SUECO", "jugador" => "kleiton", "intentos" => 0, "puntaje" => 0];
    $pa2 = ["palabraWordix" => "YUYOS", "jugador" => "briba", "intentos" => 0, "puntaje" => 0];
    $pa3 = ["palabraWordix" => "HUEVO", "jugador" => "zrack", "intentos" => 3, "puntaje" => 9];
    $pa4 = ["palabraWordix" => "TINTO", "jugador" => "cabrito", "intentos" => 4, "puntaje" => 8];
    $pa5 = ["palabraWordix" => "RASGO", "jugador" => "briba", "intentos" => 0, "puntaje" => 0];
    $pa6 = ["palabraWordix" => "VERDE", "jugador" => "cabrito", "intentos" => 5, "puntaje" => 7];
    $pa7 = ["palabraWordix" => "CASAS", "jugador" => "kleiton", "intentos" => 5, "puntaje" => 7];
    $pa8 = ["palabraWordix" => "GOTAS", "jugador" => "kleiton", "intentos" => 0, "puntaje" => 0];
    $pa9 = ["palabraWordix" => "ZORRO", "jugador" => "zrack", "intentos" => 4, "puntaje" => 8];
    $pa10 = ["palabraWordix" => "GOTAS", "jugador" => "cabrito", "intentos" => 0, "puntaje" => 0];
    $pa11 = ["palabraWordix" => "FUEGO", "jugador" => "cabrito", "intentos" => 2, "puntaje" => 10];
    $pa12 = ["palabraWordix" => "TINTO", "jugador" => "briba", "intentos" => 0, "puntaje" => 0];

    array_push($coleccion, $pa1, $pa2, $pa3, $pa4, $pa5, $pa6, $pa7, $pa8, $pa9, $pa10, $pa11, $pa12);
    return $coleccion;
}

//-------------------- PUNTO 3 DE LA EXPLICACION 3 --------------------
/**                                                                                             
 *muestra el menu de opciones que tendra nuestro programa wordix, y retornara el numero de la eleccion elegida
 *@return int 
 */

function seleccionarOpcion()
{
    //int $opcionElegida, $numMax, $numMin
    //array $lasOpciones

    $lasOpciones[0] = "1)Jugar wordix con una palabra elegida.";
    $lasOpciones[1] = "2)Jugar al wordix con una palabra aleatoria.";
    $lasOpciones[2] = "3)Mostrar una partida.";
    $lasOpciones[3] = "4)Mostrar la primera partida ganadora.";
    $lasOpciones[4] = "5)Mostrar resumen de jugador.";
    $lasOpciones[5] = "6)mostrar listado de partidas ordenadas por jugador y por palabra.";
    $lasOpciones[6] = "7)agregar una palabra de 5 letras a wordix.";
    $lasOpciones[7] = "8)Salir.";

    $numMax = count($lasOpciones);
    $numMin = 1;

    echo "\n" . $lasOpciones[0] . "\n";
    echo "\n" . $lasOpciones[1] . "\n";
    echo "\n" . $lasOpciones[2] . "\n";
    echo "\n" . $lasOpciones[3] . "\n";
    echo "\n" . $lasOpciones[4] . "\n";
    echo "\n" . $lasOpciones[5] . "\n";
    echo "\n" . $lasOpciones[6] . "\n";
    echo "\n" . $lasOpciones[7] . "\n";
    echo "\n" . "ingrese una opcion del menu: ";

    $opcionElegida = solicitarNumeroEntre($numMin, $numMax);
    return $opcionElegida;
}

//--------------------PUNTO 4 DE LA EXPLICACION 3 (ESTA EN EL wordix.php LINEA 150) --------------------
//--------------------PUNTO 5 DE LA EXPLICACION 3 (ESTA EN EL wordix.php LINEA 30)--------------------

//--------------------PUNTO 6 DE LA EXPLICACION 3 --------------------
/** dado un numero de partida muestra en pantalla los datos de la misma
 * @param array $arrayPartidas
 * @param int $numPartida
 * @return 
 */
function datosPartida($arrayPartidas, $numPartida)
{
    echo "*******************************************************************";
    echo "\nPartida Wordix " . ($numPartida + 1) . ": palabra " . $arrayPartidas[$numPartida]["palabraWordix"];
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
 * @param array $colecPalabras
 * @param string $palabraNueva                                          
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
 * (retorna el índice de la primera partida ganada por un jugador, si no gano ninguna, retorna -1.)
 * @param array $coleccionPartidas
 * @param string $nombJugador
 */
function primeraVictoria($nombJugador, $coleccionPartidas)
{
    //int $f, $n, $indice int
    //array $total
    $indice = 0;
    $total = $coleccionPartidas;
    $f = 0;
    $n = 0;
    // cuenta la cantidad de elementos del arreglo
    foreach ($total as $indice) {
        $f = $f + 1;
    }
    while ($n < $f && ($coleccionPartidas[$n]["jugador"] != $nombJugador || $coleccionPartidas[$n]["puntaje"] == 0)) {
        $n = $n + 1;
    }
    if ($n == $f) {
        $n = -1;
    }
    return $n;
}


//--------------------PUNTO 9 EXPLICACION 3 --------------------
/**
 *(dado un nombre y una coleccion de partias, realiza un resumen en base al nombre y lo muestra)
 *@param array $colePartidas
 *@param string $nomJugador
 */
function devuelveResumen($colePartidas, $nomJugador)
{
    //array $resumen
    $resumen =
        [
            "jugador" => "",
            "partidas" => 0,
            "puntaje" => 0,
            "victorias" => 0,
            "intento1" => 0,
            "intento2" => 0,
            "intento3" => 0,
            "intento4" => 0,
            "intento5" => 0,
            "intento6" => 0
        ];
    for ($i = 0; $i < count($colePartidas); $i++) {
        if ($colePartidas[$i]["jugador"] == $nomJugador) {
            $resumen["jugador"]  = $nomJugador;
            $resumen["partidas"] = $resumen["partidas"] + 1;
            $resumen["puntaje"]  = $resumen["puntaje"]  + $colePartidas[$i]["puntaje"];
            if ($colePartidas[$i]["puntaje"] != 0) {
                $resumen["victorias"] = $resumen["victorias"] + 1;
            }
            switch ($colePartidas[$i]["intentos"]) {
                case 1:
                    $resumen["intento1"] = $resumen["intento1"] + 1;
                    break;
                case 2:
                    $resumen["intento2"] = $resumen["intento2"] + 1;
                    break;
                case 3:
                    $resumen["intento3"] = $resumen["intento3"] + 1;
                    break;
                case 4:
                    $resumen["intento4"] = $resumen["intento4"] + 1;
                    break;
                case 5:
                    $resumen["intento5"] = $resumen["intento5"] + 1;
                    break;
                case 6:
                    $resumen["intento6"] = $resumen["intento6"] + 1;
                    break;
            }
        }
    }
    echo "\n*******************************";
    echo "\nJugador: " . $resumen["jugador"];
    echo "\nPartidas: " . $resumen["partidas"];
    echo "\nPuntaje Total: " . $resumen["puntaje"];
    echo "\nVictorias: " . $resumen["victorias"];
    echo "\nPorcentaje de victorias: " . $resumen["victorias"] * 100 / $resumen["partidas"] . "%";
    echo "\nAdivinadas: \n";
    echo "  Intento 1: " . $resumen["intento1"] . "\n";
    echo "  Intento 2: " . $resumen["intento2"] . "\n";
    echo "  Intento 3: " . $resumen["intento3"] . "\n";
    echo "  Intento 4: " . $resumen["intento4"] . "\n";
    echo "  Intento 5: " . $resumen["intento5"] . "\n";
    echo "  Intento 6: " . $resumen["intento6"] . "\n";
    echo "*******************************";
}

/** --------------------- PUNTO 10 DE LA EXPLICACION 3 ---------------------
 * solicita al usuario el nombre de un jugador y lo retorna en minusculas                                                                          
 * @return string
 */
function solicitarJugador()
{
    //string $nombreSolicitado
    //boolean $vof
    //array $primLetra
    echo "\ningrese un nombre: ";
    $soliNomb = trim(fgets(STDIN));
    $primLetra = str_split($soliNomb);
    $vof = ctype_alpha($primLetra[0]);
    while ($vof == false) {
        echo "\nel nombre no es valido\n";
        echo "ingrese otro nombre: ";
        $soliNomb = trim(fgets(STDIN));
        $primLetra = str_split($soliNomb);
        $vof = ctype_alpha($primLetra[0]);
    }
    if ($vof == true) {
        $soliNomb = strtolower($soliNomb);
    }
    return $soliNomb;
}
//--------------------PUNTO 11 EXPLICACION 3 --------------------
/**
 * (ordena por nombre del jugador, si el nombre es el mismo lo ordena por palabra )
 *@param array $a
 *@param array $b
 *@return int
 */
function ordenado($a, $b,)
{
    // int $orden
    if ($a["jugador"] == $b["jugador"]) {
        if ($a["palabraWordix"] == $b["palabraWordix"]) {
            $orden = 0;
        } elseif ($a["palabraWordix"] < $b["palabraWordix"]) {
            $orden = -1;
        } else {
            $orden = 1;
        }
    } elseif ($a["jugador"] < $b["jugador"]) {
        $orden = -1;
    } else {
        $orden = 1;
    }
    return $orden;
}

/**
 * ( muestra la colección de partidas ordenada por el nombre del jugador y por la palabra)
 * @param array $coleccPartidas
 */
function ordenarColeccionPartidas($coleccPartidas)
{
    uasort($coleccPartidas, 'ordenado');
    echo "********** ORDENADO POR NOMBRE (EN CASO DE QUE EL NOMBRE SEA EL MISMO LO ORDENA POR PALABRA) **********\n";
    print_r($coleccPartidas);
}

/**
 * (agrega una nueva partida al juego)
 * @param array $colecPartida
 * @param array $partidaNueva
 * @return array                                          
 */
function agregarPartida($colecPartida, $partidaNueva)
{
    //int $totalPartidas
    $totalPartidas = count($colecPartida);
    $colecPartida[$totalPartidas] = $partidaNueva;
    return $colecPartida;
}

/*--------------------------FUNCIONES COMPLEMENTARIAS------------------------------*/
/** 
 * busca si la palabra ingresada se encuentra dentro del arreglo.
 * @param array $colePalabras
 * @param string $palabraAbuscar
 * @return boolean
 */
function buscarPalabra($colecPalabras, $palabraAbuscar)
{
    //int $e
    //boolean $rtaPalabra
    $e = 0;
    while ((($e < count($colecPalabras)) && !(strtoupper($palabraAbuscar) == $colecPalabras[$e]))) {
        $e = $e + 1;
    }
    if ($e < count($colecPalabras)) {
        $rtaPalabra = true;
    } else {
        $rtaPalabra = false;
    }
    return $rtaPalabra;
}

//------------------------------------------------------------------
/** 
 * busca si el nombre de un jugador esta dentro del arreglo de partidas jugadas.
 * @param array $coleccionPar
 * @param string $nombr
 * @return boolean
 */
function buscarNombre($coleccionPar, $nombr)
{
    //int $i,
    //boolean $resultadoBusqueda
    $i = 0;
    while (($i < count($coleccionPar)) && !($nombr == $coleccionPar[$i]["jugador"])) {
        $i = $i + 1;
    }
    if ($i < count($coleccionPar)) {
        $resultadoBusqueda = true;
    } else {
        $resultadoBusqueda = false;
    }
    return $resultadoBusqueda;
}

/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//DECLARACION DE VARIABLES:

// int $opcion,$cantidadPalabras,$numeroPalabra,$i,$sumaPalaAleatoria,$numeroPalaAleatoria,$cantPartidas,$var,$numPartidaVer,$llave,$resultado, $palabraDisp
// string $jugadorWordix,$palNueva,$nombreEstadis
// array $verColeccionPartidas,$verColeccionPalabras,$partida
// boolean $esPalabraUsada, $jugadorExis, $nombreEstadisExist, $palabraExiste

//Inicialización de variables:
$verColeccionPartidas = cargarPartidas();
$verColeccionPalabras = cargarColeccionPalabras();
$opcion = 0;
$cantidadPalabras = 0;
$numeroPalabra = 0;
$sumaPalaAleatoria = 0;
$numeroPalaAleatoria = 0;
$cantPartidas = 0;
$numPartidaVer = 0;
$llave = 0;
$jugadorWordix = "";
$palNueva = "";
$nombreEstadis = "";
//$partida = jugarWordix("MELON", strtolower("MaJo"));
//print_r($partida);
//imprimirResultado($partida);



//Proceso:
do {
    $opcion = seleccionarOpcion();

    //La sentencia switch es similar a una serie de sentencias IF en la misma expresión.
    //En muchas ocasiones, es posible que se quiera comparar la misma variable (o expresión)
    //con muchos valores diferentes, y ejecutar una parte de código distinta dependiendo de a que valor es igual.

    switch ($opcion) {
        case 1:
            # 1) jugar wordix con palabra elegida
            $jugadorWordix = solicitarJugador();
            echo "ingrese un numero de palabra para jugar: \n";
            $cantidadPalabras = count($verColeccionPalabras);
            $numeroPalabra = solicitarNumeroEntre(1, $cantidadPalabras);
            $i = 0;

            /*for ($i = 0; $i < count($verColeccionPartidas); $i++) {
                if (($jugadorWordix == $verColeccionPartidas[$i]["jugador"]) && ($verColeccionPalabras[$numeroPalabra - 1] == $verColeccionPartidas[$i]["palabraWordix"])) {
                    echo "la palabra " . $verColeccionPalabras[$numeroPalabra - 1] .  " ya fue utilizada por el jugador: " . $jugadorWordix . "\n";
                    echo "ingrese otro numero de palabra para jugar: ";
                    $numeroPalabra = solicitarNumeroEntre(1, $cantidadPalabras);
                    $i = -1;
                } 
            }*/

            do {
                while ($i < count($verColeccionPartidas) && ($jugadorWordix != $verColeccionPartidas[$i]["jugador"] || $verColeccionPalabras[$numeroPalabra - 1] != $verColeccionPartidas[$i]["palabraWordix"])) {
                    $i = $i + 1;
                }
                if ($i < count($verColeccionPartidas)) {
                    echo "la palabra " . $verColeccionPalabras[$numeroPalabra - 1] .  " ya fue utilizada por el jugador: " . $jugadorWordix . "\n";
                    echo "ingrese otro numero de palabra para jugar: ";
                    $numeroPalabra = solicitarNumeroEntre(1, $cantidadPalabras);
                    $i = 0;
                }
            } while ($i == 0);

            $partida = jugarWordix($verColeccionPalabras[$numeroPalabra - 1], strtolower($jugadorWordix));
            //(VER EL AGREGADO DE PARTIDAS)
            //echo "*********ANTES DE AGREGAR LA PARTIDA********";
            //print_r($verColeccionPartidas);
            $verColeccionPartidas = agregarPartida($verColeccionPartidas, $partida);
            //echo "*********DESPUES DE AGREGAR LA PARTIDA********";
            //print_r($verColeccionPartidas);
            //$resumenPartida = devuelveResumen($verColeccionPartidas, $jugadorWordix);
            //$resumenJugadores = agregarPartida($resumenJugadores, $resumenPartida);
            break;
        case 2:
            #2) jugar wordix con palabra aleatoria
            $sumaPalaAleatoria = (count($verColeccionPalabras) - 1);
            $numeroPalaAleatoria = rand(0, $sumaPalaAleatoria);
            $jugadorWordix = solicitarJugador();
            $i = 0;

            /*for ($i = 0; $i < count($verColeccionPartidas); $i++) {
                if (($jugadorWordix == $verColeccionPartidas[$i]["jugador"]) && ($verColeccionPalabras[$numeroPalaAleatoria] == $verColeccionPartidas[$i]["palabraWordix"])) {
                    $numeroPalaAleatoria = rand(0, $sumaPalaAleatoria);
                    $i = -1;
                } 
            }*/
            do {
                while ($i < count($verColeccionPartidas) && ($jugadorWordix != $verColeccionPartidas[$i]["jugador"] || $verColeccionPalabras[$numeroPalaAleatoria] != $verColeccionPartidas[$i]["palabraWordix"])) {
                    $i = $i + 1;
                }
                if ($i < count($verColeccionPartidas)) {
                    $numeroPalaAleatoria = rand(0, $sumaPalaAleatoria);
                    $i = 0;
                }
            } while ($i==0);
            $partida = jugarWordix($verColeccionPalabras[$numeroPalaAleatoria], strtolower($jugadorWordix));
            //(VER EL AGREGADO DE PARTIDAS)
            //echo "*********ANTES DE AGREGAR LA PARTIDA********";
            //print_r($verColeccionPartidas);
            $verColeccionPartidas = agregarPartida($verColeccionPartidas, $partida);
            //echo "*********DESPUES DE AGREGAR LA PARTIDA********";
            //print_r($verColeccionPartidas);
            //$resumenPartida = devuelveResumen($verColeccionPartidas, $jugadorWordix);
            //$resumenJugadores = agregarPartida($resumenJugadores, $resumenPartida);
            break;
        case 3:
            #3) Mostrar una partida
            $cantPartidas = count($verColeccionPartidas);
            $var = 1;
            echo "\n" . "ingrese un numero de partida para visualizar:" . "\n";
            $numPartidaVer = solicitarNumeroEntre($var, $cantPartidas);
            datosPartida($verColeccionPartidas, $numPartidaVer - 1);
            break;
        case 4:
            $jugadorWordix = solicitarJugador();
            $jugadorExis = buscarNombre($verColeccionPartidas, $jugadorWordix);
            $llave = primeraVictoria($jugadorWordix, $verColeccionPartidas);
            $i = 0;
            if (($llave == -1) && ($jugadorExis == true)) {
                echo "\n" . "el jugador " . $jugadorWordix . " no gano " . "\n";
            } elseif (($llave == -1) && ($jugadorExis == false)) {
                echo "\n" . "NO EXISTE JUGADOR" . "\n";
            } else {
                datosPartida($verColeccionPartidas, $llave);
            }
            break;
        case 5:
            #5) Mostrar estadisticas jugador
            $nombreEstadis = solicitarJugador();
            $nombreEstadisExist = buscarNombre($verColeccionPartidas, $nombreEstadis);

            $resultado = 0;

            if ($nombreEstadisExist == true) {
                $resultado = 1;
            }

            while (($resultado == 0)) {
                echo "el jugador ingresado no a jugado ninguna partida \n";
                $nombreEstadis = solicitarJugador();
                $nombreEstadisExist = buscarNombre($verColeccionPartidas, $nombreEstadis);
                if ($nombreEstadisExist == true) {
                    $resultado = 1;
                }
            }
            devuelveResumen($verColeccionPartidas, $nombreEstadis);
            break;
        case 6:
            #6) Mostrar el listado de partidas ordenadas por jugador y por palabra
            ordenarColeccionPartidas($verColeccionPartidas);
            break;
        case 7:
            #7) Agregar una palabra de 5 letras a Wordix

            $palNueva = leerPalabra5Letras();
            $palabraExiste = buscarPalabra($verColeccionPalabras, $palNueva);
            if ($palabraExiste == false) {
                $palabraDisp = 1;
            } else {
                $palabraDisp = 0;
            }
            while ($palabraDisp == 0) {
                echo "esa palabra ya existe, ingrese otra: " . "\n";
                $palNueva = leerPalabra5Letras();
                $palabraExiste = buscarPalabra($verColeccionPalabras, $palNueva);
                if ($palabraExiste == false) {
                    $palabraDisp = 1;
                } else {
                    $palabraDisp = 0;
                }
            }
            $verColeccionPalabras = agregarPalabra($verColeccionPalabras, $palNueva);
            break;
        case 8:
            echo "********";
            echo "FIN DEL PROGRAMA";
            echo "*********";
            break;
    }
} while ($opcion != 8);
