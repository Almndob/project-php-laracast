<?php
$page = "Create Note";
$config = require('config.php');
$db = new Database($config['database']);
$errors = [];
$seccus = [];
$userId = 1;//this is the id of the current user who create the note, we will use it to authorized the user to create the note and to store the note in the database with the user id
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    //check if a note is empty do not store the note in DB
      if(empty(trim($_POST['body']))){

        $errors['body'] = 'You inserted an empty note, Try again!';

    }

    if(!$errors){

        $db->query(
            'INSERT INTO notes (body, user_id) VALUES (:body, :user_id)',
            [
                ':body' => trim($_POST['body']),
                ':user_id' => $userId
            ]
        );

        $seccus['saveNote'] = 'Note created successfully!';
    }
}

require 'views/note-create.view.php';