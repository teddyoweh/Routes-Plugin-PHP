import platform
import os
import shutil

class RouteSet:
    def __init__(self) :
        self.ostype =  platform.system()
        self.url = 'https://github.com/teddyoweh/Routes-Plugin-PHP/archive/refs/heads/main.zip'
        self.windowscmdinstall ='powershell -c "Invoke-WebRequest -Uri {}  -OutFile ./file.zip" '.format(self.url)
        self.windowscmdunzip = 'Expand-Archive -LiteralPath file.zip -DestinationPath ./app'
        
        
        if self.
    def windows(self):
        os.system(self.windowscmdinstall)
        os.mkdir('app')
        os.system(self.windowscmdunzip)
        os.system('cd app')
        shutil.move('Routes-Plugin-PHP-main','./')
        
        os.system('')
print("OS in my system : ",my_os)