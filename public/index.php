<?php
    //THIS shuld take me to the lara-cast folder and then to the public folder and then to the index.php file
    const   BASE_PATH = __DIR__ . '/../';//we define the base path to be used in the router to make it more flexible and avoid hardcoding the path in the router
   
    require BASE_PATH . 'functions.php';
    require base_path('database.php');
    require base_path('Response.php');
    require base_path('router.php');



?>