<?php

header('Content-Type: text/html; charset=utf-8');

/**
* Функция выполняет математическую операцию сложение
*
* @author Sergey
* @param numeric $x integer to output
* @param numeric $y integer to output
* @return numeric
*/
function mySum($x, $y) {
    return $x + $y;
}

/**
* Функция выполняет математическую операцию вычитание
*
* @author Sergey
* @param numeric $x integer to output
* @param numeric $y integer to output
* @return numeric
*/
function myDif($x, $y) {
    return $x - $y;
}

/**
* Функция выполняет математическую операцию умножение
*
* @author Sergey
* @param numeric $x integer to output
* @param numeric $y integer to output
* @return numeric
*/
function myMul($x, $y) {
    return $x * $y;
}

/**
* Функция выполняет математическую операцию деление
*
* @author Sergey
* @param numeric $x integer to output
* @param numeric $y integer to output
* @return numeric
*/
function myDiv($x, $y) {
    if ($x == 0 || $y == 0) {
        echo 'На 0 делить нельзя!!!';
    } else {
        return $x / $y;
    }
}
