<?php
require_once "addressBook.php";

$id = $_POST["Id"];
$addressBook = new AddressBook();
$addressBook->deleteContact($id);
header("Location: index.php");
