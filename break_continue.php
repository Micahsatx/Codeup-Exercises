<?php

// declare what $i equals, increment by 1 all the way to 100
// this is still looping through it all, but only does something if below
for($i = 1; $i <= 100; $i++){
    
    if($i % 2 !== 0){
        // if $i % is not equal to zero then continue the entire loop
        continue;
    }
        // when $i % is equal to zero then do this and echo it
        echo "$i is even\n";
}

// set what i is equal to and increment it
for($i = 1; $i <= 100; $i++){
    // keep running the loop and echoing below statement
    echo "$i\n";
    // keep running the loop until $i is equal to 10 then run next line of code
    if($i == 10){
        // when it is equal to 10 then run this line and break the loop.
        // if it were a loop inside a loop use break 2;  loop in a loop in a loop use break 3;
        break;
    }
}