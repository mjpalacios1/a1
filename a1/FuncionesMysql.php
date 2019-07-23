<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type:application/json");

include_once "ConexionMysql.php";
include_once "ControladorAnuncios.php";

class FuncionesMysql
{
    
function consultarDatos(){
    $bdd = new ConexionBDD();
    $conexion = $bdd->connect();// se realiza la conexion a la bd
    $controlador = new ControladorAnuncios($conexion);// se instancia al controlador 
    $resultado = $controlador->obtenerAnuncios();

    if ($resultado->rowCount())
    {
            $arregloEmpresas = array();
            while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) //devuelve un arreglo
            {
                    array_push($arregloEmpresas, $fila);
            }
            echo json_encode($arregloEmpresas); // se codifica el arreglo a formato json
    }
    else
    {
            echo json_encode("");
    }
}

function IngresarDatos(){
    $bdd = new ConexionBDD();
    $conexion = $bdd->connect();
    $controlador = new ControladorAnuncios($conexion);
    $anuncio->fecha_inicio= $_REQUEST["inicio"];
    $anuncio->fecha_fin= $_REQUEST["fin"];
    $anuncio->salario= $_REQUEST["salario"];
    $anuncio->empresa= 6;
    $anuncio->detalle= $_REQUEST["detalle"];
    $controlador->crearAnuncio($anuncio);
    echo json_encode("Se ha registrado correctamente");// se envia una respuesta a la peticion en formato JSON
}
    function EliminarDatos($codigo){
        $bdd = new ConexionBDD();
        $conexion = $bdd->connect();
        $controlador = new ControladorAnuncios($conexion);
        $controlador->EliminarDatos($codigo);
        echo json_encode("Se ha eliminado correctamente");// se envia una respuesta a la peticion en formato JSON
    }
}


