<?php

include __DIR__ . '/functions.php';

$n1 = $_POST['number1'];
$n2 = $_POST['number2'];
$res = $_POST['operator'];

switch ($res) {
    case 'sum':    
        echo mySum($n1,$n2);
        break;

    case 'subtraction':
        echo myDif($n1,$n2);
        break;

    case 'multiplication':
        echo myMul($n1,$n2);
        break;

    case 'division':
        echo myDiv($n1,$n2);
        break;

    default:
        echo 'Неизвестный оператор';    
}