<?php
date_default_timezone_set('America/Chicago');

function logMessage($logLevel, $message)
{
    // get the date
    $currentDate = date("Y-m-d");
    // get the time
    $currentTime = date('h:i:s');
    // make a file name and use a string to say log.2016-05-19.log
    $filename = "log-$currentDate.log";
    // making the connection to the filename specified above
    $handle = fopen($filename, 'a');

    // use handle for connection
    // $currentDate . $currentTime . then "[level]" (this comes from $loglevel)
    // $logLevel comes from the first value in the logmessage function, which is INFO or ERROR
    fwrite($handle, $currentDate . ' ' . $currentTime . "[$logLevel]" . $message . PHP_EOL);

    fclose($handle);
}

// message will be provided when the function is called!
function infoMessage($message)
{
    logMessage("INFO", $message);
}
infoMessage("This is an INFO message");

// message will be provided when the function is called!
function errorMessage($message)
{
    logMessage("ERROR", $message);
}
errorMessage("This is an ERROR message");


