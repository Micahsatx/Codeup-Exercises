<?php

// $number = [
//     1,
//     2,
//     3,
//     4,
//     5,
// ];

// // var_dump($number);
// // print_r($number);

// echo $number[3] . PHP_EOL;


$arrayOfPeople = [
    [
        'first_name' => 'Micah',
        'last_name' => 'Johnson',
        'email' => 'MicahJohnson1983@gmail.com',
        'phone' => '3282979',
    ],
    [
        'first_name' => 'Rachel',
        'last_name' => 'Moczygemba',
        'email' => 'Rmoczygemba@gmail.com',
        'phone' => '6834166',
    ],
    [
        'first_name' => 'Emily',
        'last_name' => 'Johnson',
        'email' => 'emilyjohnson712@gmail.com',
        'phone' => '4147205',
    ],
];

// print the entire array
print_r($arrayOfPeople);
// print one data type from within the array
echo $arrayOfPeople[2]['phone'] . PHP_EOL;