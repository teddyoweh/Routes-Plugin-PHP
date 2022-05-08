<?php
 
 
class Route{
    public $routes =array(); // Empty Route Dictionary that would contain all routes and pages ( file )
    public $notfound =''; // Empty Not Found Variable
    
    public function add(string $location,string $file){ // Adding Routes Function 

        $this->routes[$location] = $file; // Assigning routes and pages ( files ) as key and item in a dictionary

    }
    public function error404($notfoundpath){ // Not Found ( Error 404 ) Function
        
        $this->notfound = $notfoundpath; // Assigning the notfound path variable to a page 

    }
    public function init()  // initializing all the routes
    {
    
        foreach ($this->routes as $path => $content) {  // Reading the Dictionary off all routes and the pages ( file )

            if ($path == $_SERVER['PATH_INFO']) { // If the path in the dictionary is the current location of the website
                
               include $content; // Including the file assigned to the path 
                 
            } 
               
        
        }
        if(in_array($_SERVER['PATH_INFO'],$this->routes)){ // If the current location of the website is no in the dictionary
            if(strlen($this->notfound)!==0) { 
                include $this->notfound; // Assigning the not found page to 
            }else{
                echo 'Page not found'; // Echo the message Page not found on the website if the error404 function as not initialized 
            }
        }
    } 
        
        
 
}

?>