<?php
$uriArray = explode("/", $_SERVER["REQUEST_URI"]);

require_once 'models/User.php';
require_once 'controllers/UserController.php';

use controllers\UserController; 

$userController = new UserController();
$userController->index();
