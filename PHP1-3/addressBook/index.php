<html>
<title>Address Book</title>
<head>Address Book</head>
<body>
    <div id="addressBook">
        <form action="create.php">
            <input type="submit" value="create" />
        </form>
        <table border="2">

<?php
require_once "addressBook.php";
$addressBook = new AddressBook();
$all_contacts = $addressBook->getAllContacts();

foreach ($all_contacts as $contact) {
    echo "<tr>";
    echo "<td>";
    echo $contact->prettyPrint();
    echo "</td>";
    echo "<td>";
    echo "<form method='post' action='update.php'>";
    echo "<input type='hidden' name='Id' value='" . $contact->getId() . "' />";
    echo "<input type='submit' value='Update' />";
    echo "</form>";
    echo "</td>";
    echo "<td>";
    echo "<form method='post' action='delete.php'>";
    echo "<input type='hidden' name ='Id' value='" . $contact->getId() . "' />";
    echo "<input type='submit' value='Delete' />";
    echo "</form>";
    echo "</td>";
    echo "</tr>";
}

?>
    </table>
    </div>
</body>
</html>

