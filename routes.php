<?php
 
 
class Route{
    public $routes =array();
    public $notfound ='';
    
    public function add(string $location,string $file){
        $this->routes[$location] = $file;

    }

    public function init()
    {
    
        foreach ($this->routes as $path => $content) {
            if ($path == $_SERVER['PATH_INFO']) {
                
               include $content;
                 
            } 
               
        
        }
        if(in_array($_SERVER['PATH_INFO'],$this->routes)){
            if(strlen($this->notfound)!==0) {
                include $this->notfound;
            }else{
                echo 'Error 404 page not found';
            }
        }
    }
        
        
 
}

?>