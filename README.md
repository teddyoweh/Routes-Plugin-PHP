# Routes Plugin PHP
This plugin can be embedded in PHP application to give the web application specific routes/href location and for entering specific/locations for each page in a web application

# Usage

```PHP
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

?>

```
## Pages
All the pages are located in ``` ./controller/pages```

## Scripts
All the scripts are located in ``` ./controller/scripts/```

## Stylesheets
All the pages are located in ``` ./controller/styles/```

## Extracomponents
- [Bootstrap](https://getbootstrap.com/)
- [Boxicon](https://boxicons.com/)
- [Jquery](https://jquery.com/)
- [FontAwesome-Icons](https://fontawesome.com/)
- [PyScript](https://pyscript.net/)

There are two args when loading the extracomponents ```local``` and ```web```
```PHP
<?php

$route->loadbootstrap('local');
$route->loadpyscripts('local');

```
# Installation
```sh
git clone https://github.com/teddyoweh/Routes-Plugin-PHP.git
```
```sh
cd Routes-Plugin-PHP
```
### Testing
```PHP
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



?>
 
```
#### Starting Test Server
```sh
php -S localhost:8000
```
### Moving Plugin
```sh
 cp routes.php /new_directory
```
License
----

MIT License

Copyright (c) 2021 Teddy Oweh

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.


Hire me: `teddyoweh`
