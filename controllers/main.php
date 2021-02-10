<?php
class Main extends Controller{
    function __construct(){
        parent::__construct();
        echo "<p>Nuevo controlador Main</p>";
    }

    function Saludo() {
        echo "<p>Ejecutaste el metodo Saludo</p>";
    }
}