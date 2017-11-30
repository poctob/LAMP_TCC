<?php

class Task
{
    private $id;
    private $title;
    private $is_complete;
    private $date_created;
    private $date_completed;

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }
    
    public function setTitle($title) {
        $this->title = $title;
    }

    public function getTitle() {
        return $this->title;
    }
    
    public function setIsComplete($is_complete) {
        $this->is_complete = $is_complete;
    }

    public function getIsComplete() {
        return $this->is_complete;
    }
    
    public function setDateCreated($date_created) {
        $this->date_created = $date_created;
    }

    public function getDateCreated() {
        return $this->date_created;
    }
    
    public function setDateCompleted($date_completed) {
        $this->date_completed = $date_completed;
    }

    public function getDateCompleted() {
        return $this->date_completed;
    }
}
