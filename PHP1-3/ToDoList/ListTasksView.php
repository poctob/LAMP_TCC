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

echo '<table class="table table-striped">
<thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">Title</th>
    <th scope="col">Date Created</th>
    <th scope="col">Date Completed</th>
    <th scope="col"></th>
  </tr>
</thead>
<tbody>';

foreach ($all_tasks as $task) {

    $class = $task->getIsComplete() ? 
    'style="text-decoration: line-through"' :
    '';

    $button = !$task->getIsComplete() ? 
    '<button type="button" class="btn btn-primary" 
        onClick=completeTask('. $task->getId() .')>Complete</button>' :
    '';

    echo '   
      <tr>
        <th scope="row">' . $task->getId() . '</th>
        <td ' . $class . '>' . $task->getTitle() . '</td>
        <td>' . $task->getDateCreated() . '</td>
        <td>' . $task->getDateCompleted() . '</td>
        <td>' . $button . '</td>
      </tr>';
}
  echo  '</tbody>
  </table>';

?>
    </div>
    </div>
    </div>

<script>
    function completeTask(taskId) {

        var form = document.createElement("form");
        form.setAttribute("id", "completeTaskForm");
        form.setAttribute("method", "post");
        form.setAttribute("action", "TaskController.php");

        var hiddenField = document.createElement("input");
        hiddenField.setAttribute("type", "hidden");
        hiddenField.setAttribute("name", "taskId");
        hiddenField.setAttribute("value", taskId);

        form.appendChild(hiddenField);
        
        document.body.appendChild(form);
        form.submit();
    }
</script>

</body>
</html>
