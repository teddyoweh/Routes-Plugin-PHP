import os
url = 'https://github.com/teddyoweh/Routes-Plugin-PHP/archive/refs/heads/main.zip'
windowscmdinstall ='powershell -c "Invoke-WebRequest -Uri {}  -OutFile ./filea.zip" '.format(url)
os.system(windowscmdinstall)