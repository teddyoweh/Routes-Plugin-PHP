 

<?php
require('./controller/routes/routes.php');
$route = new Route(); 

// Stylesheets and scripts
$route->addscripts('script.js');
$route->addstylesheets('style.scss');

// Extra Components
$route->loadbootstrap('local');
$route->loadpyscripts('local');
$route->loadfontawesome('web');
$route->loadjquery('local');

// Routings

// Basic Pages
$route->homepage('home.php'); // Adding Home Page
$route->error404('error404.php'); // Adding 404 Error Page

// Other Pages
$route->add('/users','users.php');
$route->add('/register','reg.php');

// Starting the routing
$route->init(); 



// All Pages are located in  ./controller/pages
?>
 