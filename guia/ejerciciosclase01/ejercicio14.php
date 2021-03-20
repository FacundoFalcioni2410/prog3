<?php
    $animales = array();
    $numeros = array();
    $lenguajes = array();
    $arrayIndexado = array();

    array_push($animales, "Perro", "Gato", "Raton", "Araña", "Mosca");
    array_push($numeros, "1986", "1996", "2015", "78", "86");
    array_push($lenguajes, "php", "mysql", "html5", "typescript", "ajax");

    $arrayIndexado = array($animales, $numeros, $lenguajes);
    $vecAsociativo = array("animales" => $animales, "numeros" => $numeros, "lenguajes" => $lenguajes);


    foreach($arrayIndexado as $item)
    {
        foreach($item as $items)
        {
            echo($items . "<br>");
        }
    }

    foreach($vecAsociativo as $item)  //3 
    {
        foreach($item as $items) // 5
        {
            echo "<br>" . $items;
        }
    }
?>