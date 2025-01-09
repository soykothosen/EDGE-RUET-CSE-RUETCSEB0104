<?php

// Get the current request URI
$request = $_SERVER['REQUEST_URI'];



$request = str_replace('/EDGE-RUET-CSE-RUETCSEB0104/19.Module/1.Project01', '', $request);

// Match the requested path
switch ($request) {
    case '/home':
        echo "Welcome to the Home page!";
        break;
    case '/about':
        echo "<h1>Welcome to the About page!</h1>";
        break;
    case '/':
        echo "Welcome to the Default Home page!";
        break;
    case "/page1":
        include"page1.php";
        break;
    
    case "/page2":

        echo "Page 2";
        break;

    default:
        echo "Page not found!";
        break;  

}




?>