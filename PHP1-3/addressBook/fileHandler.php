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
        // $contacts = json_decode($data);
        $contacts = unserialize($data);
        return $contacts;
    }

    public function writeFile($contacts)
    {
        // print_r($contacts);
        // echo "<br />";
        //$data = json_encode((array) $contacts[0]);
        $data = serialize($contacts);
        // echo $data;

        file_put_contents($this->fileName, $data) or
        die("Unable to save file");
    }
}
