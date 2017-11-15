<?php

require_once "contact.php";
require_once "traits/databaseConnected.php";

class AddressBook
{
    use Traits\DatabaseConnected;

    private $contacts;

    public function __construct()
    {
        $this->contacts = $this->getDatabaseHandler()->readDatabase();
    }

    public function getAllContacts()
    {
        return $this->contacts;
    }

    public function addContact($contact)
    {
        $this->contacts[] = $contact;
        $this->getDatabaseHandler()->insertItem($contact);
    }

    public function updateContact($contact, $id)
    {
        $this->getDatabaseHandler()->updateItem($contact, $id);
    }

    public function deleteContact($id)
    {
        $this->getDatabaseHandler()->deleteItem($id);
    }

    public function getContact($first_name)
    {
        foreach ($this->contacts as $contact) {
            if ($contact->getPerson()->getFirstName() == $first_name) {
                return $contact;
            }
        }
    }

    public function prettyPrint()
    {
        $result = "";
        foreach ($this->contacts as $contact) {
            $result .= "<hr />";
            $result .= $contact->prettyPrint();
            $result .= "<hr />";
        }

        return $result;
    }
}
