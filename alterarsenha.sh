#!/bin/bash
tput setaf 7 ; tput setab 4 ; tput bold ; printf '%35s%s%-10s\n' "Change User Password" ; tput sgr0
echo ""
echo -e "\033[1;33mLIST OF USERS AND YOUR PASSWORDS: \033[0m"
echo""
_userT=$(awk -F: '$3>=1000 {print $1}' /etc/passwd | grep -v nobody)
i=0
unset _userPass
while read _user; do
	i=$(expr $i + 1)
	_oP=$i
	[[ $i == [1-9] ]] && i=0$i && oP+=" 0$i"
	if [[ -e "/etc/SSHPlus/senha/$_user" ]]; then
		_senha="$(cat /etc/SSHPlus/senha/$_user)"
	else
		_senha='Null'
	fi
	suser=$(echo -e "\033[1;31m[\033[1;36m$i\033[1;31m] \033[1;37m- \033[1;32m$_user\033[0m")
    ssenha=$(echo -e "\033[1;33mPassword\033[1;37m: $_senha")
    printf '%-60s%s\n' "$suser" "$ssenha"
	_userPass+="\n${_oP}:${_user}"
done <<< "${_userT}"
num_user=$(awk -F: '$3>=1000 {print $1}' /etc/passwd | grep -v nobody | wc -l)
echo ""
echo -ne "\033[1;32mEnter or select a user \033[1;33m[\033[1;36m1\033[1;31m-\033[1;36m$num_user\033[1;33m]\033[1;37m: " ; read option
user=$(echo -e "${_userPass}" | grep -E "\b$option\b" | cut -d: -f2)
if [[ -z $option ]]
then
	tput setaf 7 ; tput setab 1 ; tput bold ; echo "" ; echo "Empty or invalid field!" ; echo "" ; tput sgr0
	exit 1
elif [[ -z $user ]]
then
	tput setaf 7 ; tput setab 1 ; tput bold ; echo "" ; echo "You entered an empty or invalid name!" ; echo "" ; tput sgr0
	exit 1
else
	if [[ `grep -c /$user: /etc/passwd` -ne 0 ]]
	then
		echo -ne "\n\033[1;32mNew password for user \033[1;33m$user\033[1;37m: "; read password
		sizepass=$(echo ${#password})
		if [[ $sizepass -lt 4 ]]
		then
			tput setaf 7 ; tput setab 1 ; tput bold ; echo "" ; echo "Password is empty or invalid! use at least 4 characters" ; echo "" ; tput sgr0
			exit 1
		else
			ps x | grep $user | grep -v grep | grep -v pt > /tmp/rem
			if [[ `grep -c $user /tmp/rem` -eq 0 ]]
			then
				echo "$user:$password" | chpasswd
				tput setaf 7 ; tput setab 1 ; tput bold ; echo "" ; echo "The user password $user has been changed to: $password" ; echo "" ; tput sgr0
				echo "$password" > /etc/SSHPlus/senha/$user
				exit 1
			else
				echo ""
				tput setaf 7 ; tput setab 4 ; tput bold ; echo "User logged in. Disconnecting..." ; tput sgr0
				pkill -f $user
				echo "$user:$password" | chpasswd
				tput setaf 7 ; tput setab 1 ; tput bold ; echo "" ; echo "The user password $user has been changed to: $password" ; echo "" ; tput sgr0
				echo "$password" > /etc/SSHPlus/senha/$user
				exit 1
			fi
		fi
	else
		tput setaf 7 ; tput setab 4 ; tput bold ; echo "" ; echo "The User $user Not found!" ; echo "" ; tput sgr0
	fi
fi
