<?php
    echo(date("d:m:Y") . "<br>");
    echo(date("d:m:Y:h:i:s"));
    $month = date("m");

    echo("<br>");

    switch($month)
    {
        case "01":
        case "02":
        case "03":
            echo("Es verano");
            break;
        case "04":
        case "05":
        case "06":
            echo("Es otoño");
            break;
        case "07":
        case "08":
            echo("Es invierno");
            break;
        default:
            echo("Es primavera");
            break;
    }
?>