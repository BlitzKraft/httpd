#!/bin/bash

name=$(hostname)

if [[ $name == "PersonaV0" ]]; then 
	echo "Switching to home directory"
	cd ~;
	echo "Removing httpd.."
	rm -rf httpd;
	echo "Removed httpd."
	git clone https://blitzkraft@bitbucket.org/squarefruit/httpd.git;
	cd httpd;
	echo "Cloned into httpd";
	git fetch && git checkout funcs;
	echo "Grabbing branches."
	echo "Cleaning up /var/www/"
	sudo rm -rf /var/www/;
	sudo mkdir /var/www/;
	echo "Copying new files.."
	sudo cp -r * /var/www/;
	echo "Done."
else
	echo "Host name mismatch. Quit"
fi
