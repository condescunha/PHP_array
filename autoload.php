<?php

spl_autoload_register(

    function(string $nameSpaceClass): void{

        $path = "/src";

        $classDirectory = str_replace("\\", DIRECTORY_SEPARATOR, $nameSpaceClass);

        @include_once getcwd() . $path . DIRECTORY_SEPARATOR . "{$classDirectory}.php";

    }
    
);