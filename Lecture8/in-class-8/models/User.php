<?php
namespace models;

class User {
    public function getAllUsers() {
        return [
            ['id' => 1, 'name' => 'Han'],
            ['id' => 2, 'name' => 'Daniel'],
            ['id' => 3, 'name' => 'Jeff']
        ];
    }
}