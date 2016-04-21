<?php
// string of physicist that isnt grammatically correct
$famousFakePhysicists = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// explode the string to turn the string into an array
$famousFakePhysicists = explode(', ', $famousFakePhysicists);
// required to set a variable equal to the return of the function(withvaluegiven)
$outsideFunctionReadableVersion = humanizedList($famousFakePhysicists);


function humanizedList($famousFakePhysicists)
{
// pops off the last index of the array, 'tony stark'
$removedFamousFakePhysicists = array_pop($famousFakePhysicists);
// implodes each idex of the array and adds a ','
$famousFakePhysicists = implode(', ',$famousFakePhysicists);
// concatinate each person on the list with 'and' then also 'tony stark'
$readableVersion = $famousFakePhysicists . ' and ' . $removedFamousFakePhysicists;
// return the value or the function so it can be captured in the variable up top
return $readableVersion;
}

// run the function
humanizedList($famousFakePhysicists);
// echo a statement with the variable with the value of the return to the function after it ran
echo "Some of the most famous fictional theoretical physicists are {$outsideFunctionReadableVersion}.";