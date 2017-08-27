<?php

header('Content-Type: text/html; charset=utf-8');

/**
*@param numeric $x integer to output
*@param numeric $y integer to output
*@author Sergey
*@return numeric
*/
function mySum(integer $x, integer $y){
    return $x + $y;
}

/**
*@param numeric $x integer to output
*@param numeric $y integer to output
*@author Sergey
*@return numeric
*/
function myDif($x, $y){
    return $x - $y;
}

/**
*@param numeric $x integer to output
*@param numeric $y integer to output
*@author Sergey
*@return numeric
*/
function myMul($x, $y){
    return $x * $y;
}

/**
*@param numeric $x integer to output
*@param numeric $y integer to output
*@author Sergey
*@return numeric
*/
function myDiv($x, $y){
    if ($x == 0 || $y == 0) {
        echo "На 0 делить нельзя!!!";
    }else{
        return $x / $y;
    }
}

?>