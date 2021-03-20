<?php
    $numero = new NumberFormatter("es", NumberFormatter::SPELLOUT);

    for($i = 20; $i <= 60; $i++)
    {
        echo($numero -> format($i) . "<br>");
    }
?>