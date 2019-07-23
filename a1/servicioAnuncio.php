<?php
error_reporting(0);// evita que se generen mensajes de error para que no se envien en las respuestas a las peticiones
include "FuncionesMysql.php";
class servicioAnuncio{
    
    public function API(){
        // Se instancian los controladores para FIrebase y mysql
         $controlMysql=new FuncionesMysql();
        header('Content-Type: application/JSON');// se establece el formato de la aplicacion
        $request=$_SERVER['REQUEST_METHOD'];// se obtiene el tipo de peticion que realiza el cliente
        switch ($request){
            case 'GET':
                    $controlMysql->consultarDatos();
                
                break;
            case 'POST':
                    if (isset($_POST['eliminar']){

                        $controlMysql->eliminarAnuncio($_POST['eliminar']);

                    }else{
                        $controlMysql->IngresarDatos();
                    }

                break;
        }
    }
}