<?php
require_once 'Log.php';
date_default_timezone_set('America/Chicago');

$fileName = new Log('cli');

$fileName->logMessage("INFO","This is the log level message");
$fileName->logInfo("This is an INFO message");
$fileName->logError("This is an ERROR message");