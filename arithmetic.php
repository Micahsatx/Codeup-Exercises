<?php



function add($a, $b)
{
    isNumeric($a, $b);
    if(true){
        return $a + $b;
    } else {
        return "ERROR: Both arguments must be numbers\n";  
    }
}

function subtract($a, $b)
{
    isNumeric($a, $b);
    if(true){
        return $a - $b;
    } else {
        return "ERROR: Both arguments must be numbers\n";  
    }
}

function multiply($a, $b)
{
    isNumeric($a, $b);
    if(true){
        return $a * $b;
    } else {
        return "ERROR: Both arguments must be numbers\n";   
    }
}

function divide($a, $b)
{
    isNumeric($a, $b);
    if(true){
        return $a / $b;
    } else {
        return "ERROR: Both arguments must be numbers\n";   
    }
}

function modulas($a, $b)
{
    isNumeric($a, $b);
    if(true){
        return $a % $b;
    } else {
        return "ERROR: Both arguments must be numbers\n";   
    }
}

function isNumeric($a, $b)
{
    return is_numeric($a) || is_numeric($b);
}

// function errorFunction()
// {
//     return "ERROR: Both arguments must be numbers\n";
// }


echo add(6,6) .  PHP_EOL;
echo subtract(6,4) . PHP_EOL;
echo multiply(6,4) . PHP_EOL;
echo divide(6,3) . PHP_EOL;
echo modulas(6,5) . PHP_EOL;
