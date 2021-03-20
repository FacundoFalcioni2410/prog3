<?php
    $animales = array();
    $numeros = array();
    $lenguajes = array();
    $main = array();

    array_push($animales, "Perro", "Gato", "Raton", "Araña", "Mosca");
    array_push($numeros, "1986", "1996", "2015", "78", "86");
    array_push($lenguajes, "php", "mysql", "html5", "typescript", "ajax");

    $main = array_merge($animales, $numeros, $lenguajes);

    foreach($main as $item)
    {
        echo($item . "<br>");
    }
?>