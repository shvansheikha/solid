<?php

namespace Correct;

class LogStorage
{
    private $fileName;

    public function __construct($fileName)
    {
        $this->fileName = $fileName;
    }

    public function save($text)
    {
        $fp = fopen($this->fileName, "w");
        fwrite($fp, $text);
        fclose($fp);
    }
}