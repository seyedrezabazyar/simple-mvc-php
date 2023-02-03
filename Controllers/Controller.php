<?php

require_once __DIR__ . '/../Models/Task.php';
require_once __DIR__ . '/../Models/TaskModel.php';

class TaskController
{
    private $model;

    public function __construct()
    {
        $this->model = new TaskModel();
    }

    public function updateTask()
    {
        $taskId = $_GET['id'];
        $task = $this->model->getTaskById($taskId);

        if ($task != null && !$task->isCompleted()) {
            $task->setCompleted(true);
            // Update the task in the database
        }
    }

    public function showTasks()
    {
        $tasks = $this->model->getTasks();
        require_once __DIR__ . '/../views/home.php';
    }
}

$controller = new TaskController();
if (isset($_GET['id'])) {
    $controller->updateTask();
}
$controller->showTasks();
