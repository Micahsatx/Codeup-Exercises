<?php


// start at 1 as long as its less than 100 incrament up by 1
for ($value = 1; $value <= 100; $value++) {
    // if the value is modeulas 15 with a remainder of 0 print fizzbuzz..
    // this should occur first because it happens the least
    if ($value %15 === 0){
        echo "FizzBuzz\n";
    }
    // if the value is modulas of 5 with a remainder 0 print buzz
    // this occurs more than fizz but less than fizzbuzz. so it goes in the middle
    elseif ($value %5 === 0){
        echo "Buzz\n";
    }
    // if the value is modulas of 3 with a remainder of 0 print fizz
    // this occurs very often so it should occur last of the 3
    elseif ($value % 3 === 0)  { 
        echo "Fizz\n";
    // if its not modulas 3/5/15 with a remainder zero then print the value itself
    } else {
        echo "$value\n";
    }
}
