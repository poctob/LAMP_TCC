<html>
<title>Tasks</title>

<head>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>

<body>

<div id="container">
<div class="card" style="width: 60rem;">

    <div class="card-header">
        <form action="CreateTaskView.php">
            <input class="btn btn-success btn-lg" type="submit" value="create">
        </form>
    </div>

<div class="card-body">

<?php
require_once "TaskController.php";
$taskController = new TaskController();
$all_tasks = $taskController->getAllTasks();

echo '<ul class="list-group">

<li class="list-group-item"> 
<div class="row">

<div class="col-sm">#</div>
<div class="col-sm">Title</div>
<div class="col-sm">Date Created</div>
<div class="col-sm">Date Completed</div>
<div class="col-sm"></div>

</div>
</li>';


foreach ($all_tasks as $task) {

    $class = $task->getIsComplete() ? 
    'style="text-decoration: line-through"' :
    '';

    $button = !$task->getIsComplete() ? 
    '<button type="submit" class="btn btn-primary">Complete</button>' :
    '';

    echo '   
        <li class="list-group-item"> 
        <form method = "post" action = "TaskController.php" name = "createForm' . $task->getId() .'">
        <input type="hidden" name="taskId" value=' . $task->getId() . '>
        <div class="row">'
        . '<div class="col-sm">' . $task->getId() . '</div>' 
        . '<div class="col-sm"' . $class .'>'. $task->getTitle() . '</div>'
        . '<div class="col-sm">'. $task->getDateCreated() . '</div> '
        . '<div class="col-sm">'. $task->getDateCompleted() . '</div>'
        . '<div class="col-sm">'. $button . '</div></div></form></li>';
}

    echo '</ul>';
?>
</div>
</div>
</div>


</body>
</html>
