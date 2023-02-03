<?php

class Task
{
    private $id;
    private $name;
    private $description;
    private $dueDate;
    private $completed;

    public function __construct($id, $name, $description, $dueDate, $completed)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->dueDate = $dueDate;
        $this->completed = $completed;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getDueDate()
    {
        return $this->dueDate;
    }

    public function isCompleted()
    {
        return $this->completed;
    }

    public function setCompleted($completed)
    {
        $this->completed = $completed;
    }
}
