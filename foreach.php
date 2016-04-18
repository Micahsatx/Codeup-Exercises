<?php

$entireArray = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

// loop through the entire array
foreach ($entireArray as $objectsWithinArray) {
    // if / elseif statement checks what kind of value the $objectsWithinArray
    // are and echos the type
    if (is_integer($objectsWithinArray)) {
        echo "{$objectsWithinArray} is an array\n";
    } else if (is_float($objectsWithinArray)) {
        echo "{$objectsWithinArray} is a float\n";
    } else if (is_bool($objectsWithinArray)) {
        echo "false is a boolean\n";
    } else if (is_array($objectsWithinArray)) {
        // need to be able to see the types of values WITHIN the array
        // created a new variable valuesWithinInternalArray
        // then echo'd those values.
        foreach ($objectsWithinArray as $valuesWithinInternalArray) {
            echo "$valuesWithinInternalArray\n";
        }
    } else if (is_null($objectsWithinArray)) {
        echo "the value of null is null\n";
    } else if (is_string($objectsWithinArray)) {
        echo "{$objectsWithinArray} is a string\n";
    }
}

// code that checked to see if objectsWithinArray are scalar
foreach($entireArray as $objectsWithinArray){
    if (is_scalar($objectsWithinArray))
        echo "{$objectsWithinArray} is scalar\n";
}

// echoing the entire array 
foreach($entireArray as $objectsWithinArray){
    echo "{$objectsWithinArray}\n";
}