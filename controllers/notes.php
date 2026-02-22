<?php
// require 'database.php';

$page = 'Notes';

$config = require('config.php');

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

//  $notesInfo = $db->query("SELECT * FROM notes")->fetchAll();

//  dd($notes['body']);

require 'views/notes.view.php';


