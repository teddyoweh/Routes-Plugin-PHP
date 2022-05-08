<?php
$route = new Route();
$route->add('/','test/app.php'); // Home Page
$route->add('/users','test/users.php'); // Adding /users to the route
$route->add('/register','test/reg.php'); // Adding /register to the route
$route->error404('test/error.php'); // Adding 404 Error Page
$route->init(); // Starting the routing
 
?>

This plugin can be embedded in PHP application to give the web application specific routes/href location
https://github.com/teddyoweh/Routes-Plugin-PHP

#php #backenddeveloper #programming #plugins #Python #pythonprogramming 