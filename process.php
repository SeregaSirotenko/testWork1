<?php

include 'functions.php';

$n1 = $_POST['number1'];
$n2 = $_POST['number2'];
$res = $_POST['operator'];

switch ($res) {
    case 'Sum':
        echo mySum($n1,$n2);
        break;

    case 'Subtraction':
        echo myDif($n1,$n2);
        break;

    case 'Multiplication':
        echo myMul($n1,$n2);
        break;

    case 'Division':
        echo myDiv($n1,$n2);
        break;

    default:
        echo "Неизвестный оператор";    
}

?>