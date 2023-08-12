<?php

use libraries\baseController;
use libraries\baseView;

class errorManagement extends baseController
{


    function __construct()
    {
        parent::__construct();

        $this->view -> message="değişken ile gelen mesaj.";


        $this->view->render("errors/index");
    }

}