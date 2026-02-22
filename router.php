<?php
 $routes = require 'routes.php';// this file will return an array of routes and their corresponding controllers

 // this variable will help us identify the current page
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
//this function will remove the name of the folder from the url and return the remaining part of the url
$uri = str_replace('/lara-cast', '', $uri);//إزالة اسم المجلد:
//   dd($uri);
// if($uri === '/'){
//     require 'controllers/index.php';
// }else if($uri === '/about'){
//     require 'controllers/about.php';
//     echo "About Page";

// }else if($uri === '/contact'){
//     require 'controllers/contact.php';
// }



function routeToController($uri, $routes){
//this is if satatement used to how we can use the array above to route the user to the correct page by using require
    if(array_key_exists($uri, $routes)){
        require $routes[$uri];
    }else{
        abbort();
    }
}
routeToController($uri, $routes);

function abbort($code = 404){
    http_response_code($code);
   require 'views/' . $code . '.view.php'; 
    die();
}