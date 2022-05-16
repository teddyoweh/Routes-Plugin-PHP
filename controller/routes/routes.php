<?php
 
 
class Route{
    private $routes =array(); // Empty Route Dictionary that would contain all routes and pages ( file )
    private $notfound =''; // Empty Not Found Variable
    private $homepage = '';
    
    private $controller = './controller/';
    private $pages = './controller/pages/';
    private $styleslocation = './controller/pages/styles/';
    private $scriptlocation = './controller/pages/scripts/';
    private $scriptjquerylocation = './controller/pages/scripts/static/jquery/';
    private $stylesstaticlocation = './controller/pages/styles/static/';
    private $scriptstaticlocation = './controller/pages/scripts/static/';
    
    private $bootstrapstylelocation = './controller/pages/styles/static/bootstrap';
    private $bootstrapscriptlocation = './controller/pages/scripts/static/bootstrap';
    private $boxiconsstylelocation = './controller/pages/styles/boxicons';
    private $fontawesomestylelocation = './controller/pages/styles/font-awesome';


    public function add(string $location,string $file){ // Adding Routes Function 

        $this->routes[$location] = $this->$pages.$file; // Assigning routes and pages ( files ) as key and item in a dictionary

    }
    public function error404($notfoundpath){ // Not Found ( Error 404 ) Function
        
        $this->notfound = $notfoundpath; // Assigning the notfound path variable to a page 

    }
    public function addstylesheets($stylesheet){ // Adding Stylesheets Function
        echo "<link rel='stylesheet'href='$this->styleslocation$stylesheet'> "; // Assigning the stylesheet href to the stylesheet file location
    }
    public function loadpyscripts($loca){ // Adding Scripts Function
        if ($loca == 'web'){
            echo '
            <link rel="stylesheet" href="https://pyscript.net/alpha/pyscript.css" />
            <script defer src="https://pyscript.net/alpha/pyscript.js"></script>
            ';

        }else if ($loca == 'local'){
            echo "
            <link rel='stylesheet' href='$this->stylesstaticlocation/pyscript.css' />
            <script defer src='$this->scriptstaticlocation/pyscript.js'></script>
            ";
        }
    }
    public function loadbootstrap($loca){ // Adding Scripts Function
        if ($loca == 'web'){
            echo '
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
            ';

        }else if ($loca == 'local'){
            $botdir = scandir($this->bootstrapstylelocation);
            foreach ($botdir as $key => $value) {
                if($value != '.' or '..'){
                    echo "<link rel='stylesheet' href='$this->bootstrapstylelocation/$value' />";
                } 
            }
            $botdir1 = scandir($this->bootstrapscriptlocation);
            foreach ($botdir1 as $key1 => $value1) {
                if($value1 != '.' or '..'){
                    echo "  <script defer src='$this->bootstrapscriptlocation/$value1'></script>";
                } 
            }
            
        }
    }
    public function loadboxicon($loca){ // Adding Scripts Function
        if ($loca == 'web'){
            echo '
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
            ';

        }else if ($loca == 'local'){
            $botdir = scandir($this->$boxiconsstylelocation);
            foreach ($botdir as $key => $value) {
                if($value != '.' or '..'){
                    echo "<link rel='stylesheet' href='$this->boxiconsstylelocation/$value' />";
                } 
            }
             
            
        }
    }
    public function loadfontawesome($loca){ // Adding Scripts Function
        if ($loca == 'web'){
            echo '
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            
            ';

        }else if ($loca == 'local'){#yi
            $botdir = scandir($this->fontawesomestylelocation);
            foreach ($botdir as $key => $value) {
                if($value != '.' or '..'){
                    echo "<link rel='stylesheet' href='$this->fontawesomestylelocation/$value' />";
                } 
            }
            
        }
    }
    public function loadjquery($loca){ // Adding Scripts Function
        if ($loca == 'web'){
            echo '
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            
            ';

        }else if ($loca == 'local'){
            $botdir = scandir($this->$scriptjquerylocation);
           
            foreach ($botdir as $key => $value) {
                if($value != '.' or '..'){
                    echo "<script src='$this->$scriptjquerylocation/$value></script>"
                } 
            }
            
        }
    }
    public function addscripts($script){ // Adding Scripts Function
        echo "<script src='$this->scriptlocation$script'></script> "; // Assigning the script src to the scripts file location/
    }
    public function homepage($homepage){ // Not Found ( Error 404 ) Function
        
        $this->$homepage= $homepage; //Error404 Assigning the notfound path variable to a page 

    }
    public function init()  // initializing all the routes
    {
    
        foreach ($this->routes as $path => $content) {  // Reading the Dictionary off all routes and the pages ( file )
            if($_SERVER['PATH_INFO'] == ''or '/'){
                include $this->$pages.$this->$homepage;
            }
            else if ($path == $_SERVER['PATH_INFO']) { // If the path in the dictionary is the current location of the website
                
               include $this->$pages.$content; // Including the file assigned to the path 
                 
            } 
               
        
        }
        if(in_array($_SERVER['PATH_INFO'],$this->routes)){ // If the current location of the website is no in the dictionary
            if(strlen($this->notfound)!==0) { 
                include $this->$pages.$this->notfound; // Assigning the not found page to a file
            }else{
                echo 'Page not found'; // Echo the message Page not found on the website if the error404 function as not initialized 
            }
        }
    } 
        
        

}

?>