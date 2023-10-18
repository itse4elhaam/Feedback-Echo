<?php

    $file = "./files/user.txt";

    if(file_exists($file)){
        $handle = fopen($file, 'r');

        $contents = fread($handle, filesize($file));

        fclose($handle);

        echo $contents;
    }
    else{
        $handle = fopen($file, 'w');
        $contents = 'Brad' . PHP_EOL . 'Elhaam';
        fwrite($handle, $contents);
        fclose($handle);
    }