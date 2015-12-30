#!/bin/bash

#Check for ACM devices
#declare -i count
count=$(ls /dev | grep ACM | wc -l)

case $count in
	"0")
		echo "No arduino detected."
		exit 1
		;;
	"1")
		export ARDUINO="/dev/$(ls /dev | grep ACM)"
		echo "Arduino detected at $ARDUINO"
		;;
	*)
		echo "More than one serial devices connected. Set ARDUINO manually"
		exit 1
		;;
esac

if [ -n ${ARDUINO+x} ]; then 
#Direction
dir=$1
echo $dir
case $dir in
	"for")
		echo w > $ARDUINO
		;;
	"bak")
		echo s > $ARDUINO
		;;
	"lft")
		echo a > $ARDUINO
		;;
	"rgt")
		echo d > $ARDUINO
		;;
	*)
		echo "Error. Accepted commands are for, bak, lft, rgt."
		;;
esac

fi
		
	
		

		



