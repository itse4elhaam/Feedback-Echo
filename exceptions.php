<?php
    function inverse($x){
        if(!$x){
            throw new Exception("Div by zero not possible");
        }

        return 1/$x;
    }

    
    try {
        echo inverse(10);
        echo inverse(0);
        echo inverse(5);
    } catch (\Throwable $th) {
        echo "ok";
    }