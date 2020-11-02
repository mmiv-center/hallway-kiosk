# The hallway-kiosk at MMIV

The hallway display is powered by a raspberry pi 3B+. The setup is simple and documented in this repository.

### Install

Switch to automatic login for the 'pi' user account.

Move the slack-downloader.php to /root/. Add a propper token to the file! Set up a cron job for the root user to pull the data from slack and copy the resulting images to the website:
```
*/10 * * * * /root/slack-downloader.php; cp -R /root/data/hallway-kiosk/* /var/www/html/data/
```

Install the required packages and start apache2:
```
apt install xdotool unclutter apache2 php
systemctl enable apache2
systemctl start apache2
```

Move the xsessionrc.txt file into the 'pi' users home directory:
```
cp xessionrc.txt /home/pi/.xsessionrc
chown pi:pi /home/pi/.xessionrc
```

Now checkout this repository to /var/www/hml/.