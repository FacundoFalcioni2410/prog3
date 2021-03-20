<?php
    $a = 2;
    $b = 1;
    $c = 3;

    if($a != $b && $c != $b && $a != $c)
    {
        if($a > $b)
        {
            if($b > $c)
            {
                if($c > $a)
                {
                    echo('El valor del medio es: ' . $c);
                }
                else
                {
                    echo('El valor del medio es: ' . $a);
                }
            }
            else if($c > $a)
            {
                if($c > $b)
                {
                    echo('El valor del medio es: ' . $b);
                }
                else
                {
                    echo('El valor del medio es: ' . $a);
                }
            }
        }
        else if($a > $c)
        {
            if($b > $c)
            {
                echo('El valor del medio es: ' . $b);
            }
            else
            {
                echo('El valor del medio es: ' . $c);
            }
        }
        else if($b > $c)
        {
            if($c > $a)
            {
                echo('El valor del medio es: ' . $c);
            }
            else
            {
                echo('El valor del medio es: ' . $a);
            }
        }
        else if($c > $a)
        {
            if($c > $b)
            {
                echo('El valor del medio es: ' . $b);
            }
            else
            {
                echo('El valor del medio es: ' . $a);
            }
        }
    }
    else
    {
        echo('No hay valor del medio');
    }
?>