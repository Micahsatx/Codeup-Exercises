<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

 

// check each person within the names array.  Tina in the array $names, dana, mike, amy, etc
// the first function searchArray only searches one array and essentially assigns each $person
// a value of true or false.
function searchArray($person, $names)
{
    // search the people within the array names.   searches all 5
    $result = array_search($person, $names);
    // null, 0 , & empty string all get converted to false.  therefore we say
    //  if 0 !== false then run the code below.   otherwise leaving off
    // !== will convert 0 to false, then false == false and any code wont run
    if ($result !== false) {
        return true;
    } else {
        return false;
    }
}

// now that searchArray assigned true or false to each $person
// we can compare the two arrays, $names & $compare
function compareArrays($names, $compare)
{
    // give an initial value to a new variable
    $numberOfThingsInCommon = 0;
    // each itiration compares a $person(i name in the array) to the array of $names.
    foreach($names as $person){
        // if that person is in the $compare array then label it true
        // then run the code that increases the index of $numberOfDifferences
        if (searchArray($person, $compare) == true) {
            $numberOfThingsInCommon++ ;
        }
    }
    // return the value outside the if statement
    return $numberOfThingsInCommon;
}
// so now run the second function, that will inturn call the searchArray function
echo compareArrays($names, $compare) . PHP_EOL;




// this is a brilliant way of re-writing the second function.  the difference
// is this prints out the names that are different instead of the number
// of differences.  exercise stated they wanted the number and not the names
// 

// function compareArrays($names, $compare)
// {
//     $comparisonResult = array_diff($names, $compare);
//     print_r($comparisonResult);
// }

// echo compareArrays($names, $compare);