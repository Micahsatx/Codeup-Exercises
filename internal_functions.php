<?php

// TODO: Create your inspect() function here

// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value

echo 'Inspecting $num1:' . PHP_EOL;
echo inspect($num1) . PHP_EOL;

echo 'Inspecting $num2:' . PHP_EOL;
echo inspect($num2) . PHP_EOL;

echo 'Inspecting $num3:' . PHP_EOL;
echo inspect($num3) . PHP_EOL;

echo 'Inspecting $num4:' . PHP_EOL;
echo inspect($num4) . PHP_EOL;

echo 'Inspecting $null:' . PHP_EOL;
echo inspect($null) . PHP_EOL;

echo 'Inspecting $bool1' . PHP_EOL;
echo inspect($bool1) . PHP_EOL;

echo 'Inspecting $bool2' . PHP_EOL;
echo inspect($bool2) . PHP_EOL;

echo 'Inspecting $string1' . PHP_EOL;
echo inspect($string1) . PHP_EOL;

echo 'Inspecting $string2' . PHP_EOL;
echo inspect($string2) . PHP_EOL;

echo 'Inspecting $array1' . PHP_EOL;
echo inspect($array1) . PHP_EOL;

echo 'Inspecting $array2' . PHP_EOL;
echo inspect($array2) . PHP_EOL;

function inspect($elementToInspect)
{
    if (is_string($elementToInspect)){ 
        return "This is a string with the value \"{$elementToInspect}\"";
    } elseif (is_bool($elementToInspect)){
        // ternary operator that check if it is a bool
        // if its a bool it will print true if not print false
        return "This is a bool with a value of " . ($elementToInspect ? 'true' : 'false');
    } elseif (is_array($elementToInspect)){
        // if its an array with value print array
        // if its an empty array print empty array
        return "The value is an " . ($elementToInspect ? 'array' : 'empty array');
    } elseif (is_null($elementToInspect)){
        return "The value is NULL";
    } elseif (is_float($elementToInspect)){
        // change the format of the ElementToInspect to have 1 decimal point.  (prints 0.0 and 14.4)
        return "This has a value of " . number_format($elementToInspect, 1);
    } elseif (is_int($elementToInspect)){
        return "This has a value of {$elementToInspect}";
    }
};