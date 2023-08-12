<?php

use libraries\baseController;

class mainController extends baseController{
    function __construct(){
        parent::__construct();

        $this->view->render('indexes/index');
    }
}
