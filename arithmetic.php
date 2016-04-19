<?php



function add($a, $b)
{
    // check to see if a and b are numeric.  if so run the return code
    if(isNumeric($a, $b)){
        return $a + $b;
    // otherwise run the errorfunction that returns the error message
    } else {
        return errorFunction($a, $b);
    }
}

function subtract($a, $b)
{
    // check to see if a and b are numeric.  if so run the return code
    if(isNumeric($a, $b)){
        return $a - $b;
    // otherwise run the errorfunction that returns the error message    
    } else {
        return errorFunction($a, $b);  
    }
}

function multiply($a, $b)
{
    // check to see if a and b are numeric.  if so run the return code
    if(isNumeric($a, $b)){
        return $a * $b;
    // otherwise run the errorfunction that returns the error message
    } else {
        return errorFunction($a, $b);   
    }
}

function divide($a, $b)
{
    // if user is trying to divide by zero return error message
    if($b == 0){
        return "Error: Cant divide by 0.";   
    // otherwise continue to check if its numeric 
    } else {
        // if its numeric do a/b
        if(isNumeric($a, $b)){
            return $a / $b;
        // if provided values are not numeric then run errorFunction which spits
        // out error message
        } else {
            return errorFunction($a, $b);   
        }
    }
}

function modulas($a, $b)
{
    // check to see if a and b are numeric.  if so run the return code
    if(isNumeric($a, $b)){
        return $a % $b;
    // otherwise run the errorfunction that returns the error message
    } else {
        return errorFunction($a, $b);  
    }
}

// function that checks to see if a and b are numeric.  
function isNumeric($a, $b)
{
    return is_numeric($a) || is_numeric($b);
}
// function returns the error message.
function errorFunction($a, $b)
{
    return "ERROR: Arguments \$a and \$b must be numbers";
}


echo add('shits','broke') .  PHP_EOL;
echo subtract(6,4) . PHP_EOL;
echo multiply(6,4) . PHP_EOL;
echo divide(6,0) . PHP_EOL;
echo modulas(6,4) . PHP_EOL;
