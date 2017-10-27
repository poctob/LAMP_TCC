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
    <div id="createNewContact" class="card">
    <div class="card-body">
    <form method="post" action="doCreate.php">


    <div class="form-group">
        <div class="form-row">

        <div class="col-4">
            <input type="text" class="form-control" name="firstName" placeholder="First name"></input>
        </div>

        <div class="col-4">
            <input type="text" class="form-control" name="lastName" placeholder="Last Name"></input>
        </div>

        </div>
    </div>

    <div class="form-group">
        <div class="form-row">
            <div class="col-8">
                <input type="text" class="form-control" name="street" placeholder="Street"></input>
            </div>
        </div>

        <div class="form-row">
            <div class="col-4">
                <input type="text" class="form-control" placeholder="City" name="city"></input>
            </div>
            <div class="col-2">
                <input type="text" class="form-control" name="state" placeholder="State"></input>
            </div>
            <div class="col-2">
                <input type="text" name="zip" class="form-control" placeholder="Zip"></input>
            </div>
        </div>
     </div>

     <div class="form-group">

        <div class="form-row">
            <div class="col-8">
                <input type="text" class="form-control" name="type" placeholder="Type"></input>
            </div>
        </div>

        <div class="form-row">
            <div class="col-4">
                <input type="text" class="form-control" name="phoneNumber" placeholder="Phone"></input>
            </div>

            <div class="col-4">
                <input type="text" class="form-control" name="email" placeholder="Email"></input>
            </div>
        </div>

        <div class="form-row">
            <div class="col-8">
                <textarea rows="3" class="form-control" name="note" placeholder="Note"></textarea>
            </div>
        </div>

         <div class="form-row">
            <div class="col-8">
                <textarea rows="3" class="form-control" name="comment" placeholder="Comment"></textarea>
          </div>
        </div>
    </div>

        <input class="btn btn-primary" type="submit" value="Create">
    </form>
    </div>
    </div>
</body>
</html>
