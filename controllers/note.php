<?php

    $config = require('config.php');
    $db= new Database($config['database']);
    $page = "A Note";
    $currentUserId = 1;

    $note = $db->query("select * from notes where id= :id", [
    
        ':id'=> $_GET['id']
        
        ])->findOrFail();


    //this code authorized the cuurent user create the given note
    authorize($note['user_id'] === $currentUserId);
    

require 'views/note.view.php';