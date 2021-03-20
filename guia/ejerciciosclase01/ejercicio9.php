<?php
    $array = Array();
    $accumulator = 0;
    $average;

    for($i = 0; $i < 5; $i++)
    {
        array_push($array, rand(1,10));
    }

    foreach($array as $item)
    {
        $accumulator += $item;
    }

    $average = $accumulator / 5;

    if($average === 6)
    {
        echo('Los numeros tienen un promedio exacto de 6');
    }
    else if($average < 6)
    {
        echo('Los numeros tienen un promedio menor a 6, exactamente es de: ' . $average);
    }
    else
    {
        echo('Los numeros tienen un promedio mayor a 6, exactamente es de: ' . $average);
    }
?>