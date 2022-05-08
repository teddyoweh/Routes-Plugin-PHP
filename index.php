<?php
$route = new Route();
$route->add('/','test/app.php'); // Home Page
$route->add('/users','test/users.php'); // Adding /users to the route
$route->add('/register','test/reg.php'); // Adding /register to the route
$route->error404('test/error.php'); // Adding 404 Error Page
$route->init(); // Starting the routing
 
?>