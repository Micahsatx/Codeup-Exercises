<?php
// name of file
// $filename = 'cities.txt';

// // connection(bookmark)
// // 'r' means you can read it.. not write, not append, ONLY read
// $handle = fopen($filename, 'r');

// // gets the contents of the file from the $handle(bookmark)
// $contents = fread($handle, filesize($filename));
// // dont forget to do this EVERYTIME
// fclose($handle);

// $array = explode('\n', $contents)



$filename = 'contacts.txt';

function parseContacts($filename)
{
    $handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));
    
    $contacts = explode("\n", $contents);
    array_pop($contacts);
    
    $newContacts = [];
    fclose($handle);

    foreach ($contacts as $person) {
        $newArray = [];
        $contactsInfo = explode("|", $person);
        $name = $contactsInfo[0];
        $number = $contactsInfo[1];
        // $number = str_replace(3, '-', $name);
        $newArray = ['name' => $name, 'number' => $number];
        array_push($newContacts, $newArray);

           // string substr ( string $string , int $start [, int $length ] )
    //     $string = 'bcadef abcdef';
    // $substr = 'a';
    // $attachment = '+++';

    // //$position = strpos($string, 'a');

    // $newstring = str_replace($substr, $substr.$attachment, $string);

    }
    return $newContacts;
}
var_dump(parseContacts('contacts.txt'));  







   

