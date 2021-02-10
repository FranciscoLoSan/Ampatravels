<?php 
require_once 'controllers/errorCarga.php';

class App{
    function __construct(){
        echo'<p>Hola desde clase app</p>';
        $url = $_GET['url']; 
        $url = rtrim($url, '/');//[rtrim] elimina caracterer que le indiquemos si hay mas de uno junto en la string
        $url = explode('/', $url);//Busca caracter especial para dividir el string '/'
        $archivoController = 'controllers/'. $url[0] .'.php';
        
        if(file_exists($archivoController)){
            require_once $archivoController;
            $controller = new $url[0];

            if(isset($url[1])){
                $controller -> {$url[1]}();
            }

        } else {
            $controller = new ErrorCarga();
        }
    }

}

?>