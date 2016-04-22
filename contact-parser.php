<?php

$filename = 'contacts.txt';

// this function takes in exploded array then puts them to variables
// name and number then puts that into an array containing
// one name and one number

// parseIndividual
function dashesAndArrayOfIndividuals($explodedArrayWithName)
{
    
    $name = $explodedArrayWithName[0];
    
    $number = formatPhoneNumbers($explodedArrayWithName[1]);
    
    // splitting $individualsContactInfo into 2 arrays within it.  one array that
    // puts the names into names and the numbers into numbers
    // this array split into 2 is now called associativeArrayWithNameNumber
    $associativeArrayWithNameNumber = ['name' => $name, 'number' => $number];
    // now push that created split array onto the $finalArrayOfContacts
    return $associativeArrayWithNameNumber;
} 


function formatPhoneNumbers($number)
{
// inputting the '-' into a specific location in the phone number
    // putting the first one in at the start of the string[0] and a length of 3
    $areaCode = substr ($number, 0, 3);
    // putting the second '-' starting at index 3 and going 3 spaces from there
    $firstThree = substr ($number, 3, 3);
    // start at index 6 and go 4 more
    $lastFour = substr ($number, 6, 4);
    // now concatinate the 3 variables with '-' in the middle
    // assign that into $number
    $number =  "{$areaCode}-{$firstThree}-{$lastFour}";
    // name variable and number variable accessed using there index of
    // $individualsContactInfo
    return $number;

}


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
    // needs to happen before the explode so its trimming a string
    $eachContact = explode("\n", trim($contents));
    
    fclose($handle);
    // emtpy array that the array with name and number ($associativeArrayWithNameNumber)
    // gets pushed into 
    $finalArrayOfContacts = [];

    foreach ($eachContact as $individualPersonNameAndNumber) {
        // breaking the string of names and numbers and splitting them into
        $individualsContactInfo = explode("|", $individualPersonNameAndNumber);
        // call the function and pass it individualsContactInfo
        // the exploded sring seperated into name and number
        // set all that equal to eachIndividualArray variable
        $eachIndividualArray = dashesAndArrayOfIndividuals($individualsContactInfo);
        // so each iteration of the loop pushes eachIndividualArray
        // onto the final Array
        array_push($finalArrayOfContacts, $eachIndividualArray);
        
    }
    return $finalArrayOfContacts;
}
var_dump(parseContacts('contacts.txt'));  







   

