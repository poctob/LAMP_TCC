<?php
namespace Traits;

require_once("databaseHandler.php");

trait DatabaseConnected
{
    private $databaseHandler;

    public function getDatabaseHandler() {
        if($this->databaseHandler == null) {
            $this->databaseHandler = new \DatabaseHandler();
        }
        return $this->databaseHandler;
    }
}