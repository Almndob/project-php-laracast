<?php
// dd($_SERVER); is a helper function that will dump the value of the variable and stop the execution of the script
function dd($value)   {
    echo "<pre>";
    var_dump($value);

    echo "</pre>";
    die();// stop execution

}
// this function will check if the current url is the same as the one passed as an argument
function urlIs($url){
    return $_SERVER['REQUEST_URI'] === $url;
}

function authorize($condition, $status = Response::FORBIDDEN){
//happend when the user need a note exists in DB but this note belong to another user (Forbidden 403) الوصول الغير مصرح به 
    //this code authorized the cuurent user create the given note
    if(!$condition){
        abbort($status);
    }
}
//This function will help us to generate the full path of the file we want to include in our views and controllers
function base_path($path){
    return  BASE_PATH . $path;
}
function view($path, $attributes = []){
    // Converts array keys into variables so they can be used directly in the view.
    //improt variables from the attributes array to be used in the view
    extract($attributes);
    require base_path('views/'. $path);
}
