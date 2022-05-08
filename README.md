# ROUTES-PHP-PLUGIN
Routing Plugin used for entering specific/locations for each page in a web application.

# Usage
```PHP
$route = new Route()// // Initializing Routing Plugin
$route->add($path,$file); // Assigning and Adding Routes/Location to a file for the Web Application;
$route->error404($file4040); Adding Page Not Found 
```
# Testing
```PHP
<?php
$route = new Route();
$route->add('/','test/app.php'); // Home Page
$route->add('/users','test/users.php'); // Adding /users to the route
$route->add('/register','test/reg.php'); // Adding /register to the route
$route->error404('test/error.php'); // Adding 404 Error Page
$route->init(); // Starting the routing
 
?>
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
