#!/bin/bash
if [ -d "/etc/squid/" ]; then
    payload="/etc/squid/payload.txt"
elif [ -d "/etc/squid3/" ]; then
	payload="/etc/squid3/payload.txt"
fi
tput setaf 7 ; tput setab 4 ; tput bold ; printf '%35s%s%-10s\n' "Add Host to Squid Proxy" ; tput sgr0
if [ ! -f "$payload" ]
then
	tput setaf 7 ; tput setab 4 ; tput bold ; echo "" ; echo "Arquivo $payload not found" ; tput sgr0
	exit 1
else
	tput setaf 2 ; tput bold ; echo ""; echo "Current Domains in File $payload:" ; tput sgr0
	tput setaf 3 ; tput bold ; echo "" ; cat $payload ; echo "" ; tput sgr0
	read -p "Enter the domain you want to add to the list.: " host
	if [[ -z $host ]]
	then
		tput setaf 7 ; tput setab 4 ; tput bold ; echo "" ; echo "You entered an empty or non-existent domain!" ; echo "" ; tput sgr0
		exit 1
	else
		if [[ `grep -c "^$host" $payload` -eq 1 ]]
		then
			tput setaf 7 ; tput setab 4 ; tput bold ; echo "" ; echo "The domain $host already exists in the file $payload" ; echo "" ; tput sgr0
			exit 1
		else
			if [[ $host != \.* ]]
			then
				tput setaf 7 ; tput setab 4 ; tput bold ; echo "" ; echo "You must add a domain by starting it with a dot" ; echo "Example: .stophvps.xyz" ; echo "No need to add subdomains for domains already in file" ; echo "That is, it is not necessary to add amirnet4.com" ; echo "if the domain .amirnet4.com já already in the file." ; echo ""; tput sgr0
				exit 1
			else
				echo "$host" >> $payload && grep -v "^$" $payload > /tmp/a && mv /tmp/a $payload
				tput setaf 7 ; tput setab 1 ; tput bold ; echo "" ; echo "File $payload updated, domain was successfully added:" ; tput sgr0
				tput setaf 3 ; tput bold ; echo "" ; cat $payload ; echo "" ; tput sgr0
				if [ ! -f "/etc/init.d/squid3" ]
				then
					service squid3 reload
				elif [ ! -f "/etc/init.d/squid" ]
				then
					service squid reload
				fi	
				tput setaf 7 ; tput setab 1 ; tput bold ; echo "" ; echo "Proxy Squid Proxy Successfully Reloaded!" ; echo "" ; tput sgr0
				exit 1
			fi
		fi
	fi
fi
