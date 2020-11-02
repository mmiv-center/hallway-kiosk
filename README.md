# The hallway-kiosk at MMIV

The hallway display is powered by a raspberry pi 3B+. The setup is simple and documented in this repository.

### Install

Switch to automatic login for the 'pi' user account.

Copy the slack-downloader.php to /root/. Add a propper token to the file! Set up a cron job for the root user to pull the data from slack
```
*/10 * * * * /root/slack-downloader.php; cp -R /root/data/hallway-kiosk/* /var/www/html/data/
```

Install the xdotool using 'apt install xdotool'.

Move the xsessionrc.txt file into the 'pi' users home directory:
```
cp xessionrc.txt /home/pi/.xsessionrc
```

