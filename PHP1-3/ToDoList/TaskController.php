<?php
require_once "Task.php";
require_once "DBController.php";

class TaskController
{
    private $DBController;

    public function createTask($title) {
        $task = new Task();
        $mysqldate = date ("Y-m-d H:i:s", time());

        $task->setTitle ($title);
        $task->setIsComplete (0);
        $task->setDateCreated ($mysqldate);

        $DBController = new DBController();
        $DBController->insertItem($task);

        header("Location: ListTasksView.php");
        exit();
    }

    public function getAllTasks() {
        $DBController = new DBController();
        return $DBController->readDatabase();
    }

    public function completeTask($id) {

        $task = new Task();
        $mysqldate = date ("Y-m-d H:i:s", time());

        $task->setIsComplete (1);
        $task->setDateCompleted ($mysqldate);

        $DBController = new DBController();
        $DBController->updateItem($task, $id);

        header("Location: ListTasksView.php");
        exit();
    }

}


if(isset($_POST["title"])) {
    $title = $_POST["title"];
    $taskController = new TaskController();
    $taskController->createTask($title);
}

if(isset($_POST["taskId"])) {
    $taskId = $_POST["taskId"];
    $taskController = new TaskController();
    $taskController->completeTask($taskId);
}