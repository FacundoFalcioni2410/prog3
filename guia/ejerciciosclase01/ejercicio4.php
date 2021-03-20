<?php
    $counter = 0;
    $accumulator = 0;

    do
    {
        $counter++;
        echo("number: " . $counter . "<br>");
        $accumulator += $counter;
    }while(($accumulator + $counter) < 1000);

    echo("total numbers added: " . $counter . "<br>");
    echo("result: " . $accumulator);
?>