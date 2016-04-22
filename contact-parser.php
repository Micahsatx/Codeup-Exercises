<?php

$filename = 'contacts.txt';

function parseContacts($filename)
{
    // establish a connection to the file ($handle)
    $handle = fopen($filename, 'r');
    // set the file its reading equal to $contents
    // filesize is the actualy size of the file
    // and $filename is the variable assigned to the actual file
    $contents = fread($handle, filesize($filename));
    
    // the file starts as a string and explodes it into an array of 4
    // then sets it equal to $contacts 
    $eachContact = explode("\n", $contents);
    // theres an extra array since it explodes at the end of a new line
    array_pop($eachContact);
    
    // the array that the info within the function will be pushed to.
    $finalArrayOfContacts = [];
    fclose($handle);

    foreach ($eachContact as $individualPersonNameAndNumber) {
        // new array which will be used to push the inner 2 arrays onto
        $associativeArrayWithNameNumber = [];
        // the name of the each array that contains both name and number
        // but that array is not yet split into 2 arrays
        $individualsContactInfo = explode("|", $individualPersonNameAndNumber);
        // assigning the index 0 & 1 to a variable
        
        // inputting the '-' into a specific location in the phone number
        // putting the first one in at the start of the string[0] and a length of 3
        $areaCode = substr ($individualsContactInfo[1], 0, 3);
        // putting the second '-' starting at index 3 and going 3 spaces from there
        $firstThree = substr ($individualsContactInfo[1], 3, 3);
        // start at index 6 and go 4 more
        $lastFour = substr ($individualsContactInfo[1], 6, 4);
        // now concatinate the 3 variables with '-' in the middle
        // assign that into $number
        $number =  "{$areaCode}-{$firstThree}-{$lastFour}";
        // name variable and number variable accessed using there index of
        // $individualsContactInfo
        $name = $individualsContactInfo[0];
        // splitting $individualsContactInfo into 2 arrays within it.  one array that
        // puts the names into names and the numbers into numbers
        // this array split into 2 is now called associativeArrayWithNameNumber
        $associativeArrayWithNameNumber = ['name' => $name, 'number' => $number];
        // now push that created split array onto the $finalArrayOfContacts
        array_push($finalArrayOfContacts, $associativeArrayWithNameNumber);

    }
    return $finalArrayOfContacts;
}
var_dump(parseContacts('contacts.txt'));  







   

