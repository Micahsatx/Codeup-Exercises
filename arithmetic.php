<?php

$a = 15;
$b = 20;

function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
    // return a - b;
    // return a + -b
    return add($a, -$b);
}

function multiply($a, $b)
{
    return $a * $b;
}

function divide($a, $b)
{
    return $a / $b;
}

function modulas($a, $b)
{
    return $a % $b;
}


echo add($a,$b) .  PHP_EOL;
echo subtract($a,$b) . PHP_EOL;
echo multiply(6,4) . PHP_EOL;
echo divide(6,3) . PHP_EOL;
echo modulas(6,5) . PHP_EOL;
