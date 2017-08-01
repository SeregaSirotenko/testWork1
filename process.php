<?php

include 'functions.php';

$n1 = $_POST['number1'];
$n2 = $_POST['number2'];
$res = $_POST['operator'];

switch ($res) {
	case 'Сложение':
		echo mySum($n1,$n2);
		break;

	case 'Вычитание':
		echo myDif($n1,$n2);
		break;

	case 'Умножение':
		echo myMul($n1,$n2);
		break;

	case 'Деление':
		echo myDiv($n1,$n2);
		break;
}

?>