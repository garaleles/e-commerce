<?php

namespace libraries;

class baseView
{
    function __construct()
    {
      //  echo "Views görevde!" . "<br>";
    }

    public function render($fileName)
        {
            require_once "views/" . $fileName . ".php";
        }

}