<?php

use libraries\baseController;

class settings extends baseController {
    function __construct(){
        parent::__construct();
        echo "<p>Ayarlar denetleyicisi</p>";
    }
    function test($values=false){
        echo "<p>Test fonksiyonu</p>";
        if($values){
            echo "<p>Parametre: ".$values."</p>";
        }

    }
}
