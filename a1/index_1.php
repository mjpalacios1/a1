
        <?php
        error_reporting(0);
        include 'servicioAnuncio.php';
        // Se instancia a la clase REST
         $api=new servicioAnuncio();
         //Se llama al metodo API para que procese las peticiones del cliente
         $api->API();
        ?>
   