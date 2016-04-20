<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


function searchArray($names)
{

    $result = array_search('Tina', $names);
    // null, 0 , & empty string all get converted to false.  therefore we say
    //  if 0 !== false then run the code below.   otherwise leaving off
    // !== will convert 0 to false, then false == false and any code wont run
    if ($result !== false) {
        echo $names[$result] . PHP_EOL;
    } else {
        echo "Cant find that person.\n";
    }
}

echo searchArray($names);