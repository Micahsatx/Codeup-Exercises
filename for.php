<?php



if ($argc <3){
    echo "you need to provide starting and ending values.\n";
    echo "provide a min value: ";
    $usersMinValue = trim(fgets(STDIN));
    echo "provide a max value: ";
    $usersMaxValue = trim(fgets(STDIN));
    echo "what do you want to increment by? ";
    $usersIncremintValue = trim(fgets(STDIN));

} else {
    $usersMinValue = $argv[1];
    $usersMaxValue = $argv[2];
    $usersIncremintValue = $argv[3];
}



for ($usedValue = $usersMinValue; $usedValue <= $usersMaxValue; $usedValue += $usersIncremintValue) {
    echo "\$usedValue has a value of {$usedValue}\n";
}
