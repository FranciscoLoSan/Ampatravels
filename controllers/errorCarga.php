<?php
class ErrorCarga extends Controller{

    function __construct(){
        parent::__construct();
        echo '<p>Error al cargar recurso</p>';
    }
}