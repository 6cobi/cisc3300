<?php
   $uriArray = explode("/", $_SERVER["REQUEST_URI"]);
   require_once './models/User.php';
   require_once './controllers/UserController.php';

   use controllers\UserController;

   $userController = new UserController();

   if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_SERVER['REQUEST_URI'] === '/users') {
       $userController->getJsonData();
   } else {
       $userController->getHtmlPage();
   }
