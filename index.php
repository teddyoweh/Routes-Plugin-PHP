<?php
$route = new Route();
$route->add('/users','test/users.php'); // Adding /users to the route
$route->add('/register','test/reg.php'); // Adding /register to the route
$route->error404 = 404
$route->init(); // Starting the routing
 
?>