<?php


require '../vendor/autoload.php';


/**
 *  @return PDO Devuelve un objeto PDO con la conexion completa
 */
function conectar()
{
    return new \PDO('pgsql:host=localhost,dbname=dni', 'dni', 'dni');
}

/**
 * Se utiliza para solucionar el problema de inyección de código
 * con el htmlspecialchars
 */
function hh($x)
{
    return htmlspecialchars($x ?? '', ENT_QUOTES | ENT_SUBSTITUTE);
}

/**
 *  Obtenemos un valor desde un formulario get
 * 
 *  @par  
 */
function obtener_get($par)
{
    return obtener_parametro($par, $_GET);
}

function obtener_post($par)
{
    return obtener_parametro($par, $_POST);
}

function obtener_parametro($par, $array)
{
    return isset($array[$par]) ? trim($array[$par]) : null;
}

function volver($ruta)
{
    header("Location: /$ruta");
}
