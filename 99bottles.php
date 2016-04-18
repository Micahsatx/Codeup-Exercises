<?php

$bottlesOfBeerOnWall = 99;


    echo "{$bottlesOfBeerOnWall} bottles of beer on the wall. {$bottlesOfBeerOnWall} bottles of beer.";
    echo " Take one down pass it around" . ' ' . ($bottlesOfBeerOnWall - 1) . ' ' . "bottles of beer on the wall.\n";
    $bottlesOfBeerOnWall--;


do{    
    if ($bottlesOfBeerOnWall <= 1){
        echo "{$bottlesOfBeerOnWall} bottle of beer on the wall. {$bottlesOfBeerOnWall} bottle of beer.";
        echo " Take one down pass it around" . ' ' . ($bottlesOfBeerOnWall - 1) . ' ' . "bottles of beer on the wall.\n";
        $bottlesOfBeerOnWall--;
    } else {
        echo "{$bottlesOfBeerOnWall} bottles of beer on the wall. {$bottlesOfBeerOnWall} bottles of beer.";
    echo " Take one down pass it around" . ' ' . ($bottlesOfBeerOnWall - 1) . ' ' . "bottles of beer on the wall.\n";
    $bottlesOfBeerOnWall--;
    }
} while ($bottlesOfBeerOnWall >= 1);
