<?php



if ($argc <3){
    echo "you didnt give me starting and ending values.  Please provide starting & finshing values\n";
    echo "provide a min value: ";
    $usersMinValue = trim(fgets(STDIN));
    echo "provide a max value: ";
    $usersMaxValue = trim(fgets(STDIN));
} else {
    $usersMinValue = $argv[1];
    $usersMaxValue = $argv[2];
}



for ($usedValue = $usersMinValue; $usedValue <= $usersMaxValue; $usedValue += 2) {
    echo "\$usedValue has a value of {$usedValue}\n";
}
