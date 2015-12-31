#!/bin/bash

#Check for serial ports
echo "Checking for Arduino.."
case $(ls /dev | grep ACM | wc -l) in 
	"0") 
		echo "No arduino detected. Check connections."
		;;
	"1")
		echo "Found exactly one Arduino. Good"
		ARDUINO="/dev/$(ls /dev | grep ACM)"
		;;
	"*")
		echo "Something is *seriously* wrong."
		echo "More than one serial port detected. NOT good."
		;;
esac

#Check for minicom
if [ -n "$(pidof minicom)" ]; then 
	echo "Killing minicom"
	sudo pkill minicom
	echo "Starting minicom"
	minicom -D $ARDUINO -b 9600 -o &
else
	echo "Starting minicom"
	minicom -D $ARDUINO -b 9600 -o &
fi

#Check for /dev/ttyACM permissions
if [ "$(ls -l $ARDUINO | cut -d ' ' -f 3)" != "www-data" ]; then
	echo "Arduino not owned by server. Fixing.."
	sudo chown www-data:dialout $ARDUINO
	echo "Fixed."
fi

#Check lighttpd is running
if [ -z "$(pidof lighttpd)" ]; then
	echo "Lighttpd is not running."
	echo "Starting lighttpd."
	sudo lighttpd -f /etc/lighttpd/lighttpd.conf
fi

