#!/bin/bash

fun_ip () {
if [[ -e /etc/MEUIPADM ]]; then
IP="$(cat /etc/MEUIPADM)"
else
MEU_IP=$(ip addr | grep 'inet' | grep -v inet6 | grep -vE '127\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}' | grep -o -E '[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}' | head -1)
MEU_IP2=$(wget -qO- ipv4.icanhazip.com)
[[ "$MEU_IP" != "$MEU_IP2" ]] && IP="$MEU_IP2" || IP="$MEU_IP"
echo "$MEU_IP2" > /etc/MEUIPADM
fi
}

fun_bar () {
comando[0]="$1"
comando[1]="$2"
 (
[[ -e $HOME/fim ]] && rm $HOME/fim
${comando[0]} -y > /dev/null 2>&1
${comando[1]} -y > /dev/null 2>&1
touch $HOME/fim
 ) > /dev/null 2>&1 &
 tput civis
echo -ne "\033[1;33m["
while true; do
   for((i=0; i<18; i++)); do
   echo -ne "\033[1;31m#"
   sleep 0.1s
   done
   [[ -e $HOME/fim ]] && rm $HOME/fim && break
   echo -e "\033[1;33m]"
   sleep 1s
   tput cuu1
   tput dl1
   echo -ne "\033[1;33m["
done
echo -e "\033[1;33m]\033[1;37m -\033[1;32m OK !\033[1;37m\n"
tput cnorm
}
antiddos (){
fun_bar "service ssh restart" "service squid3 restart"
if [ -d '/usr/local/ddos' ]; then
	if [ -e '/usr/local/sbin/ddos' ]; then
		rm -f /usr/local/sbin/ddos
	fi
	if [ -d '/usr/local/ddos' ]; then
		rm -rf /usr/local/ddos
	fi
	if [ -e '/etc/cron.d/ddos.cron' ]; then
		rm -f /etc/cron.d/ddos.cron
	fi
	sleep 4s
	echo -e "$barra"
	echo -e "\E[32;1;37m VPSPLUS Anti-DDos Disable Now\E[0m"
	return 1
else
	mkdir /usr/local/ddos
fi
fun_bar "service ssh restart" "service squid3 restart"
wget -q -O /usr/local/ddos/ddos.conf https://raw.githubusercontent.com/AAAAAEXQOSyIpN2JZ0ehUQ/ADM-ULTIMATE-NEW-FREE/master/Install/ddos.conf -o /dev/null
wget -q -O /usr/local/ddos/ddos.conf http://www.inetbase.com/scripts/ddos/ddos.conf -o /dev/null
wget -q -O /usr/local/ddos/LICENSE http://www.inetbase.com/scripts/ddos/LICENSE -o /dev/null
wget -q -O /usr/local/ddos/ignore.ip.list http://www.inetbase.com/scripts/ddos/ignore.ip.list -o /dev/null
wget -q -O /usr/local/ddos/ddos.sh http://www.inetbase.com/scripts/ddos/ddos.sh -o /dev/null
chmod 0755 /usr/local/ddos/ddos.sh
cp -s /usr/local/ddos/ddos.sh /usr/local/sbin/ddos
/usr/local/ddos/ddos.sh --cron > /dev/null 2>&1
sleep 2s
echo -e "$barra"
echo -e  "\E[32;1;37m VPSPLUS Anti-DDos Enable Now\E[0m"
echo ""
}
backup (){
#BACKUP ANTI-DDOS
fun_bar "mkdir /root/scripts"
wget -O /root/scripts/listcron.sh http://www.inetbase.com/scripts/listcron.sh -o /dev/null
fun_bar "mkdir /root/scripts/ddos"
wget -O /root/scripts/ddos/LICENSE http://www.inetbase.com/scripts/ddos/LICENS -o /dev/null
wget -O /root/scripts/ddos/ddos.conf http://www.inetbase.com/scripts/ddos/ddos.conf -o /dev/null
wget -O /root/scripts/ddos/ddos.sh http://www.inetbase.com/scripts/ddos/ddos.sh -o /dev/null
wget -O /root/scripts/ddos/ignore.ip.list http://www.inetbase.com/scripts/ddos/ignore.ip.list -o /dev/null
echo "#BACKUP DE SCRIPT ANTIDDOS" > /root/scripts/Importante.txt
wget -O /root/scripts/ddos/install.ddos http://www.inetbase.com/scripts/ddos/install.ddos -o /dev/null
wget -O /root/scripts/ddos/install.sh http://www.inetbase.com/scripts/ddos/install.sh -o /dev/null
wget -O /root/scripts/ddos/uninstall.ddos http://www.inetbase.com/scripts/ddos/uninstall.ddos -o /dev/null
wget -O /root/scripts/ddos/uninstall.sh http://www.inetbase.com/scripts/ddos/uninstall.sh -o /dev/null
fun_bar "service ssh restart" "service squid3 restart"
echo -e "$barra"
echo -e "BACKUP ANTIDDOS CON SUCESSO"
echo -e "$barra"
echo -e "Ruta del backup: /root/scripts"
}

[[ -e /usr/local/ddos/ddos.conf ]] && ddos=$(echo -e "\033[1;32m◉ ") || ddos=$(echo -e "\033[1;31m○ ")

echo -e  "\E[44;1;37m     VPSPLUS Anti-DDos    \E[0m"
echo ""
echo -e "\033[1;31m[\033[1;36m01\033[1;31m] \033[1;37m• \033[1;33mAnti-DDos $ddos\033[1;31m
[\033[1;36m00\033[1;31m] \033[1;37m• \033[1;33mBACK \033[1;32m<\033[1;33m<\033[1;31m< \033[0m"
echo ""
echo -e "\033[0;34m━━━━━━━━━━━━━━━━━━━━━━\033[0m"
tput civis
echo -ne "\033[1;32mOptions \033[1;33m?\033[1;31m?\033[1;37m "; read x
tput cnorm
clear
case $x in
	0 | 00)
	menu
	;;
	200|0200)
	backup
	;;
	1|01)
	antiddos
	;;
	656)
	echo -e "\033[1;31mClosing...\033[0m"
	sleep 2
	clear
	exit;
	;;
	*)
	echo -e "\033[1;31mInvalid Option !\033[0m"
	sleep 2
esac






