<html>
<title>Address Book</title>

<head>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>

<body>

<div id="container">
<div class="card" style="width: 40rem;">

    <div class="card-header">
        <form action="create.php">
            <input class="btn btn-success btn-lg" type="submit" value="create">
        </form>
    </div>

    <div class="card-body">

    <div id="accordion" role="tablist">

<?php
require_once "addressBook.php";
$addressBook = new AddressBook();
$all_contacts = $addressBook->getAllContacts();

foreach ($all_contacts as $contact) {

    echo '<div class="card">
    <div class="card-header" role="tab" id="headingOne">
      <h5 class="mb-0">
        <a data-toggle="collapse" href="#collapse' . $contact->getId() . '"
        aria-expanded="true" aria-controls="collapse' . $contact->getId() . '">
         ' . $contact->getPerson()->prettyPrint() . '
        </a>
      </h5>
    </div>';

    echo '<div id="collapse' . $contact->getId() . '" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
    <div class="card-body">';

    echo '<div class="container">
            <div class="row">

    <div class="col">';
    echo $contact->prettyPrint();
    echo '</div>';

    echo '<div class="col-2">';
    echo "<form method='post' action='update.php'>";
    echo "<input type='hidden' name='Id' value='" . $contact->getId() . "' />";
    echo "<input class='btn btn-warning' type='submit' value='Update' />";
    echo "</form>";
    echo '</div>';

    echo '<div class="col-2">';
    echo "<form method='post' action='delete.php'>";
    echo "<input type='hidden' name ='Id' value='" . $contact->getId() . "' />";
    echo "<input class='btn btn-danger' type='submit' value='Delete' />";
    echo "</form>";
    echo '</div></div></div>';

    echo '</div></div></div>';
}

?>
    </div>
    </div>
    </div>
    </div>
</body>
</html>

