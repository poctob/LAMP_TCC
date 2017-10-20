<?php

require_once "addressBook.php";

$person = new Person();
$person->setFirstName($_POST["firstName"]);
$person->setLastName($_POST["lastName"]);

$address = new Address();
$address->setStreet($_POST["street"]);
$address->setCity($_POST["city"]);
$address->setState($_POST["state"]);
$address->setZip($_POST["zip"]);

$contact = new Contact();
$contact->setPerson($person);
$contact->setAddress($address);
$contact->setPhoneNumber($_POST["phoneNumber"]);
$contact->setType($_POST["type"]);
$contact->setComment($_POST["comment"]);
$contact->setEmail($_POST["email"]);
$contact->setNote($_POST["note"]);

// print_r($contact);
$addressBook = new AddressBook();
try {
    $addressBook->addContact($contact);
    header("Location: index.php");
    exit();
} catch (Exception $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
}
