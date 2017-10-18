<?php

class FileHandler
{

    private $fileName;

    public function __construct($fileName)
    {
        $this->fileName = $fileName;
    }

    public function readFile()
    {
        $data = file_get_contents($this->fileName) or
        die("Unable to read file!");

        $contacts = unserialize($data);
        return $contacts;
    }

    public function writeFile($contacts)
    {

        $data = serialize($contacts);
        file_put_contents($this->fileName, $data) or
        die("Unable to save file");
    }
}
