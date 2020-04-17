# Author: Andrew Afonso
# https://github.com/andrewbluepiano/SignPi
# On raspbian buster, networking enabled and configed.
# Just logging setup of RPI to be LED controller in iPod sign.
# Pins (working on my B+): 
# Color: 4 (B), 14 (R), 24 (G)
# Power: 7
sudo apt get update 
sudo apt -y install apache2
sudo apt -y install mariadb-server
sudo apt -y install python-setuptools python3-setuptools
wget https://github.com/joan2937/pigpio/archive/master.zip
unzip master.zip
rm master.zip
cd pigpio-master
make
sudo make install
(crontab -l; echo '@reboot sudo pigpiod' ) | crontab -
sudo wget -O /var/www/html/index.php https://raw.githubusercontent.com/andrewbluepiano/SignPi/master/index.php
sudo mkdir /var/www/html/css/
sudo wget -O /var/www/html/css/style.css https://raw.githubusercontent.com/andrewbluepiano/SignPi/master/style.css
