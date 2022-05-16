 

<?php
require('./controller/routes/routes.php');
$route = new Route(); 

// Stylesheets and scripts
$route->addscripts('script.js');
$route->addstylesheets('style.scss');
$route->loadbootstrap('local');
$route->loadpyscripts('local');

// Routings

// Basic Pages
$route->homepage('home.php'); // Adding Home Page
$route->error404('error404.php'); // Adding 404 Error Page

// Other Pages
$route->add('/users','users.php');
$route->add('/register','reg.php');
$route->init(); // Starting the routing



// All Pages are located in  ./controller/pages
?>
 