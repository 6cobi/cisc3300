<?php
namespace controllers;

use models\User; // Use the User class from models namespace

class UserController {
    public function index() {
        // Instantiate a User object
        $user = new User();

        // Use var_dump to print the output of getAllUsers()
        var_dump($user->getAllUsers());
    }
}
