<?php
require_once 'Log.php';
// require_once 'logpractice.php';
date_default_timezone_set('America/Chicago');

$fileName = new Log('cli');

$fileName->logMessage("INFO","This is the log level message");
$fileName->logInfo("This is an INFO message");
$fileName->logError("This is an ERROR message");

// extra practice related to logpractice.php
$file = new File('file.txt');
$file->append('hello joshua!');
$file->closeIt();

// objects bundle state and behavior together..
// the name, the info message, the error message.  they all modify the state