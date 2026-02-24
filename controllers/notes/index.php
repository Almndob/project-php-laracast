<?php
// require 'database.php';



$config = require(base_path('config.php'));

$db = new Database($config['database']);

// dd($db);
$notesInfo = $db->query("
    SELECT notes.id,
           users.name,
           users.email,
           notes.body
    FROM notes
    INNER JOIN users ON notes.user_id = users.id;
")->get();



view("notes/index.view.php",[
    'page' => 'Notes',
    'notesInfo' => $notesInfo
]);


