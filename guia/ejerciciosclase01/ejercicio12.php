<?php
    $lapicera = array('color' => '', 'marca' => '','trazo' => '','precio' => '');

    $lapicera['color'] = "rojo";
    $lapicera['marca'] = "bic";
    $lapicera['trazo'] = "grueso";
    $lapicera['precio'] = 50;

    foreach($lapicera as $item)
    {
    echo "<br>" . $item;

    }
    echo "<br>";
    $lapicera['color'] = "azul";
    $lapicera['marca'] = "fc";
    $lapicera['trazo'] = "fino";
    $lapicera['precio'] = 23;

    foreach($lapicera as $item)
    {
    echo "<br>" . $item;

    }
    echo "<br>";

    $lapicera['color'] = "verde";
    $lapicera['marca'] = "jorge";
    $lapicera['trazo'] = "fino-grueso";
    $lapicera['precio'] = 52;


    foreach($lapicera as $item)
    {
    echo "<br>" . $item;

    }

    echo "<br>";

?>