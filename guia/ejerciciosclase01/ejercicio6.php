<?php
    $operator = '*';
    $op1 = 10;
    $op2 = 4;

    switch($operator)
    {
        case '+':
            echo("Result: " . $op1 + $op2);
            break;
        case '-':
            echo("Result: " . $op1 - $op2);
            break;
        case '*':
            echo("Result: " . $op1 * $op2);
            break;
        default:
            if($op2 !== 0)
            {
                echo("Result: " . $op1 / $op2);
            }
            else
            {
                echo("No se puede dividir por 0");
            }
            break;
    }
?>