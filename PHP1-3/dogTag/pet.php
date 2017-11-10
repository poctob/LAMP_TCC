<?php

require_once "nameTag.php";

abstract class Pet
{
    private $name;
    private $nameTag;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setNameTag($nameTag)
    {
        $this->nameTag = $nameTag;
    }

    public function getNameTag()
    {
        return $this->nameTag->getText();
    }
}
