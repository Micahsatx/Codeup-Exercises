<?php

$entireArray = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($entireArray as $objectsWithinArray) {
    if (is_integer($objectsWithinArray)) {
        echo "{$objectsWithinArray} is an array\n";
    } else if (is_float($objectsWithinArray)) {
        echo "{$objectsWithinArray} is a float\n";
    } else if (is_bool($objectsWithinArray)) {
        echo "false is a boolean\n";
    } else if (is_array($objectsWithinArray)) {
        foreach ($objectsWithinArray as $valuesWithinArray) {
            echo "$valuesWithinArray\n";
        }
    } else if (is_null($objectsWithinArray)) {
        echo "the value of null is null\n";
    } else if (is_string($objectsWithinArray)) {
        echo "{$objectsWithinArray} is a string\n";
    }
}

// foreach($entireArray as $objectsWithinArray){
//     if (is_scalar($objectsWithinArray))
//         echo "{$objectsWithinArray} is scalar\n";
// }

// foreach($entireArray as $objectsWithinArray){
//     echo "{$objectsWithinArray}\n";
// }