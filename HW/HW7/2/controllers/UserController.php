<?php
   namespace controllers;

   use models\User;

   class UserController {
       public function getHtmlPage() {
           include './views/users.html';
       }

       public function getJsonData() {
           $jsonFile = './data/users.json';
           echo file_get_contents($jsonFile);
       }
   }