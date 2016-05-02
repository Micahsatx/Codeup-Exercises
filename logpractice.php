<?php
// $file = new File('file.txt');
// $file->append('hello joshua!');
// $file->close();

class File
{
    public $handle;

    public function __construct($fileName)
    {
        $this->handle = fopen($fileName, 'a');

    }

    public function append($message)
    {
        fwrite($this->handle, $message);
    }
    
    public function closeIt()
    {
        fclose($this->handle);
    }
}