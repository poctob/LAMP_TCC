<?php

require_once "contact.php";
require_once "fileHandler.php";

class AddressBook
{

    private $contacts;
    private $fileHandler;

    public function __construct()
    {
        $this->fileHandler = new FileHandler("myAddressBook.txt");
        $this->contacts = $this->fileHandler->readFile();
    }

    public function getAllContacts()
    {
        return $this->contacts;
    }

    public function addContact($contact)
    {
        $this->contacts[] = $contact;
        $this->fileHandler->writeFile($this->contacts);
    }

    public function updateContact($old_contact, $new_contact)
    {
        $index = array_search($old_contact, $this->contacts);

        if ($index >= 0) {
            $this->contacts[$index] = $new_contact;
            $this->fileHandler->writeFile($this->contacts);
        }
    }

    public function deleteContact($contact)
    {
        $index = array_search($contact, $this->contacts);

        if ($index >= 0) {
            unset($this->contacts[$index]);
            $this->fileHandler->writeFile($this->contacts);
        }
    }

    public function getContact($first_name)
    {
        foreach ($this->contacts as $contact) {
            if ($contact->getPerson()->getFirstName() == $first_name) {
                return $contact;
            }
        }
    }
}
