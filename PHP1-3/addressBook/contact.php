<?php

require_once "address.php";
require_once "person.php";

class Contact
{

    private $id;

    private $person;
    private $phone_number;
    private $email;
    private $address;
    private $type;
    private $comment;
    private $notes;

    public function __construct()
    {
        $this->person = new Person();
        $this->address = new Address();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getPerson()
    {
        return $this->person;
    }

    public function setPerson($person)
    {
        $this->person = $person;
    }

    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    public function setPhoneNumber($phone_number)
    {
        $this->phone_number = $phone_number;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getComment()
    {
        return $this->comment;
    }

    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    public function getNote()
    {
        return $this->note;
    }

    public function setNote($note)
    {
        $this->note = $note;
    }

    public function prettyPrint()
    {
        return
        $this->person->prettyPrint() .
        "<br />" .
        $this->address->prettyPrint() .
            "<br />" .
            "$this->type <br />
                 $this->phone_number <br />
                 $this->email <br />
                 $this->note <br />
                 $this->comment";
    }

}
