<?php
/*
    Routing
*/

// define('URL', 'https://hujinn.com/');

// Get 'q' parameter (default is home)
$q = !empty($_GET['q']) ? $_GET['q'] : 'home';

// Set '404' as default controller
$controller = '404'; 

// Home
if($q === 'home')
{
    $controller = 'home';
}

// Contact
if($q === 'contact')
{
    $controller = 'contact';
}

// Include the right controller
include 'views/pages/'.$controller.'.php';