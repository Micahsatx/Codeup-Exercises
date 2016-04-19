<?php

 // Set the default timezone
date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
// $dayOfWeek = date('N');

// switch($dayOfWeek) {
//     case 1:
//         echo "Today is Monday\n";
//         break;
//     case 2:
//         echo "Today is Tuesday\n";
//         break;
//     case 3:
//         echo "Today is Wednesday\n";
//         break;
//     case 4:
//         echo "Today is Thursday\n";
//         break;
//     case 5:
//         echo "Today is Friday\n";
//         break;
//     case 6:
//         echo "Today is Saturday\n";
//         break;
//     case 7:
//         echo "Today is Sunday\n";
//         break;
//  }


$dayOfWeek = date('N');

if ($dayOfWeek == 1) {
    echo 'Today is Monday' . PHP_EOL;
} elseif ($dayOfWeek == 2) {
    echo 'Today is Tuesday' . PHP_EOL;
} elseif ($dayOfWeek == 3) {
    echo 'Today is Wednesday' . PHP_EOL;
} elseif ($dayOfWeek == 4) {
    echo 'Today is Thursday' . PHP_EOL;
} elseif ($dayOfWeek == 5) {
    echo 'Today is Friday' . PHP_EOL;
} elseif ($dayOfWeek == 6) {
    echo 'Today is Saturday' . PHP_EOL;
} elseif ($dayOfWeek == 7) {
    echo 'Today is Sunday' . PHP_EOL;
}
