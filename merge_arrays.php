<?php

$firstArray = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
$secondArray = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];
 

function combineArrays($firstArray, $secondArray)
{
    // had to create an empty array WITHIN the function so it can access its value
    $combinedArray = [];
    // foreach loop that looks at each index of the first array.
    // it then compares it to the same index of the second array
    foreach($firstArray as $theCurrentIndexExamined){
        // take the first index from the first array and assign it to 
        // a variable.
        $firstNameInFirstArray = array_shift($firstArray);
        // take the first idnex from the second array and assign it to
        // a variable
        $firstNameInSecondArray = array_shift($secondArray);
        // this if/else is what actually compares the 2 variables
        if ($firstNameInFirstArray == $firstNameInSecondArray){
        // if the 2 variables are the same then push the value from
        // the FIRST array onto the new array
            array_push($combinedArray, $firstNameInFirstArray);
        // if the 2 variables are NOT the same then push the value from
        // the first array into the new array, THEN push the value from
        // the second array into the new array
        } elseif ($firstNameInFirstArray != $firstNameInSecondArray) {
            array_push($combinedArray, $firstNameInFirstArray);
            array_push($combinedArray, $firstNameInSecondArray);
        }
    }
    // print the array outside of the loop so you only get 1 printed array 
    print_r($combinedArray);    
}
// run the function to make it work!
combineArrays($firstArray, $secondArray);


