<?php

require_once __DIR__ . '/../Models/User.php';

$user = new User();
$user->setName('Reza Bazyar');

require_once __DIR__ . '/../views/home.php';
