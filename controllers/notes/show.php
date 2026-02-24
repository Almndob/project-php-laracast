<?php

    $config = require(base_path('config.php'));
    $db= new Database($config['database']);
    $page = "A Note";
    $currentUserId = 1;

    $note = $db->query("select * from notes where id= :id", [
    
        ':id'=> $_GET['id']
        
        ])->findOrFail();


    //this code authorized the cuurent user create the given note
    authorize($note['user_id'] === $currentUserId);
    

require base_path('views/notes/show.view.php');