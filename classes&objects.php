<?php

// IN CLASS EXAMPLES

// this is the class (the blueprint, the plan)
class Person
{
    public $firstName;
    public $lastName;
    public $fruit = array();
}

// instantiated class ($person is the object, instance of plan)
$person = new Person();
$person -> firstName = 'Micah';
$person -> lastName = 'Johnson';
$person -> fruit = ['mango', 'pinneapple'];

vap_dump($person);

// create an instance by putting 'new ____';
// second object with the values identical to the class
$person2 = new Person();
$person2 -> firstName = 'Isaac';
$person2 -> lastName = 'Castillo';

