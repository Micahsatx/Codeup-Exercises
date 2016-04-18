<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach($things as $random){
    if (is_integer($random)) {
        echo "{$random} is an array\n";
    } else if (is_float($random)) {
        echo "{$random} is a float\n";
    } else if (is_bool($random)) {
        echo "{$random} is a boolean\n";
    } else if (is_array($random)) {
        echo "{$random} is an array\n";
    } else if (is_null($random)) {
        echo "{$random} is bull\n";
    } else if (is_string($random)) {
        echo "{$random} is a string\n";
    }
}