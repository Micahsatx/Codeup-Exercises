<?php

$bottlesOfBeerOnWall = 99;

do {
    echo "{$bottlesOfBeerOnWall} bottles of beer on the wall. {$bottlesOfBeerOnWall} bottles of beer.";
    echo " Take one down pass it around" . ' ' . ($bottlesOfBeerOnWall - 1) . ' ' . "bottles of beer on the wall.\n";
    $bottlesOfBeerOnWall--;
} while ($bottlesOfBeerOnWall >= 1);
