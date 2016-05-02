<?php

class Log
{
    public $fileName;
    public $handle;
    public $currentDate;
    public $currentTime;
    
    public function logMessage($logLevel, $message)
    {
        // get the date
        $this->currentDate = date("Y-m-d");
        // get the time
        $this->currentTime = date('h:i:s');
        // use handle for connection
        // $currentDate . $currentTime . then "[level]" (this comes from $loglevel)
        // $logLevel comes from the first value in the logmessage function, which is INFO or ERROR
        fwrite($this->handle, $this->currentDate . ' ' . $this->currentTime . "[$logLevel]" . $message . PHP_EOL);
        
    }
            
        
    public function __construct($prefix)
    {
        // $prefix = log;
        // make a file name and use a string to say log.2016-05-19.log
        // $this->filename = "$prefix-$currentDate.log";
        $this->fileName = "$prefix-YYYY-MM-DD.log";

        // making the connection to the filename specified above
        $this->handle = fopen($this->fileName, 'a');

    }

    public function __destruct()
    {

        fclose($this->handle);
        echo "did it work?\n";
    }

    // message will be provided when the function is called!
    public function logInfo($message)
    {
        $this->logMessage("INFO", $message);
    }

    // message will be provided when the function is called!
    public function logError($message)
    {
        $this->logMessage("ERROR", $message);
    }
}


?>