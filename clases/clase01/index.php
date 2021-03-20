<?php
    // echo "Hello world! <br>";
    // echo "testing";

    #phpinfo()

    // $name = "Facundo";

    // echo ($name);

    $vec = array(1,2,"3",4);
    $vec[4] = 9;
    #echo($vec);

    var_dump($vec);

    for($i=0; $i < count($vec); $i++)
    {
        echo($vec[$i] . "<br>");
    }

    echo "<br>";

    foreach($vec as $item)
    {
        echo($item . "<br>");
    }

    echo "<br>";

    array_push($vec, 7);

    for($i=0; $i < count($vec); $i++)
    {
        echo($vec[$i] . "<br>");
    }
?>