<?php

    $impares = array();
    $accum = 0;

    echo("Numeros impares: <br>");
    for($i = 1; $i <= 20; $i++)
    {
        if($i % 2 != 0)
        {   
            
            $impares[$accum] = $i;
            $accum++;
        }
    }

    for($j = 0; $j < count($impares); $j++)
    {
        echo($impares[$j] . "<br>");
    }
?> 