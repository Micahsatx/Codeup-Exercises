<?php



if ($argc <3){
    echo "you need to provide starting and ending values.\n";
    // exit;
    $usersMinValue = 0;
    $usersMaxValue = 100;
    $usersIncremintValue = 1;
    // echo "provide a min value: ";
    // $usersMinValue = trim(fgets(STDIN));
    // echo "provide a max value: ";
    // $usersMaxValue = trim(fgets(STDIN));
    // echo "what do you want to increment by? ";
    // $usersIncremintValue = trim(fgets(STDIN));

} else {
    $usersMinValue = $argv[1];
    $usersMaxValue = $argv[2];
    $usersIncremintValue = $argv[3];
}
if (!is_numeric($usersMinValue))  { 
    echo "you didnt give me a number dummy!";
}
if (!is_numeric($usersMaxValue))  { 
    echo "you didnt give me a number dummy!";
}



for ($usedValue = $usersMinValue; $usedValue <= $usersMaxValue; $usedValue += $usersIncremintValue) {
    echo "Your number is now {$usedValue} and we are now incrementing it by {$usersIncremintValue}\n";
}
