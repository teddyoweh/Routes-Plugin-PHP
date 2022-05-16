import platform
import os
import shutil

class RouteSet:
    def __init__(self) :
        self.ostype =  platform.system()
        self.url = 'https://github.com/teddyoweh/Routes-Plugin-PHP/archive/refs/heads/main.zip'
        self.windowscmdinstall ='powershell -c "Invoke-WebRequest -Uri {}  -OutFile ./file.zip" '.format(self.url)
        self.windowscmdunzip = 'powershell Expand-Archive -LiteralPath file.zip -DestinationPath ./'
        
        
        if str(self.ostype).lower() == 'windows':
            self.windows()
    def windows(self):
        os.system(self.windowscmdinstall)
        
        os.system('mkdir app')
        os.system(self.windowscmdunzip)
        os.system('cd app')
        os.rename('Routes-Plugin-PHP-main','app')
        
        os.system('')
RouteSet()