#!/bin/bash
fun_bar () {
comando[0]="$1"
comando[1]="$2"
 (
[[ -e $HOME/fim ]] && rm $HOME/fim
[[ ! -e /usr/lib/sshplus ]] && rm -rf /bin/menu > /dev/null 2>&1
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
echo -e "\033[1;33m]\033[1;37m -\033[1;32m OK !\033[1;37m"
tput cnorm
}
IP=$(cat /etc/IP)
x="ok"
menu ()
{
velocity () {
aguarde () {
comando[0]="$1"
comando[1]="$2"
 (
[[ -e $HOME/fim ]] && rm $HOME/fim
[[ ! -d /etc/SSHPlus ]] && rm -rf /bin/menu
${comando[0]} > /dev/null 2>&1
${comando[1]} > /dev/null 2>&1
touch $HOME/fim
 ) > /dev/null 2>&1 &
 tput civis
echo -ne "  \033[1;33mWaiting \033[1;37m- \033[1;33m["
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
   echo -ne "  \033[1;33mWaiting \033[1;37m- \033[1;33m["
done
echo -e "\033[1;33m]\033[1;37m -\033[1;32m OK !\033[1;37m"
tput cnorm
}
fun_tst () {
speedtest --share > speed
}
echo ""
echo -e "   \033[1;32mTesting server !\033[0m"
echo ""
aguarde 'fun_tst'
echo ""
png=$(cat speed | sed -n '5 p' |awk -F : {'print $NF'})
down=$(cat speed | sed -n '7 p' |awk -F :  {'print $NF'})
upl=$(cat speed | sed -n '9 p' |awk -F :  {'print $NF'})
lnk=$(cat speed | sed -n '10 p' |awk {'print $NF'})
echo -e "\033[0;34m━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\033[0m"
echo -e "\033[1;32mPING (LATENCIA):\033[1;37m$png"
echo -e "\033[1;32mDOWNLOAD:\033[1;37m$down"
echo -e "\033[1;32mUPLOAD:\033[1;37m$upl"
echo -e "\033[1;32mLINK: \033[1;36m$lnk\033[0m"
echo -e "\033[0;34m━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\033[0m"
rm -rf $HOME/speed
}
#pppports
PROTOCOL=$(grep '^proto ' /etc/openvpn/server.conf | cut -d " " -f 2)
mine_port () {
local portasVAR=$(lsof -V -i tcp -P -n | grep -v "ESTABLISHED" |grep -v "COMMAND" | grep "LISTEN")
local NOREPEAT
local reQ
local Port
while read port; do
reQ=$(echo ${port}|awk '{print $1}')
Port=$(echo {$port} | awk '{print $9}' | awk -F ":" '{print $2}')
[[ $(echo -e $NOREPEAT|grep -w "$Port") ]] && continue
NOREPEAT+="$Port\n"
case ${reQ} in
squid|squid3)
[[ -z $SQD ]] && local SQD="${cor[2]} \033[1;37mProxy Port: \033[1;32m"
SQD+="$Port ";;
apache|apache2)
[[ -z $APC ]] && local APC="${cor[2]} \033[1;37mAPACHE Port: \033[1;32m"
APC+="$Port ";;
ssh|sshd)
[[ -z $SSH ]] && local SSH="${cor[2]} \033[1;37mSSH Port: \033[1;32m"
SSH+="$Port ";;
dropbear)
[[ -z $DPB ]] && local DPB="${cor[2]} \033[1;37mDROPBEAR Port: \033[1;32m"
DPB+="$Port ";;
openvpn)
[[ -z $OVPN ]] && local OVPN="${cor[2]} \033[1;37mOPENVPN: \033[1;32m"
OVPN+="$PROTOCOL $Port ";;
stunnel4|stunnel)
[[ -z $SSL ]] && local SSL="${cor[2]} \033[1;37mSSL port: \033[1;32m"
SSL+="$Port ";;
python|python3)
[[ -z $PY3 ]] && local PY3="${cor[2]} \033[1;37mSOCKS Port: \033[1;32m"
PY3+="$Port ";;
esac
done <<< "${portasVAR}"
[[ ! -z $SQD ]] && echo -e $SQD
[[ ! -z $APC ]] && echo -e $APC
[[ ! -z $SSH ]] && echo -e $SSH
[[ ! -z $DPB ]] && echo -e $DPB
[[ ! -z $OVPN ]] && echo -e $OVPN
[[ ! -z $PY3 ]] && echo -e $PY3
[[ ! -z $SSL ]] && echo -e $SSL
}
#limiter
function limit1 () {
   clear
   echo -e "\n\033[1;32mSTARTING THE LIMITER... \033[0m"
   echo ""
   fun_bar 'screen -dmS limiter limiter' 'sleep 3'
   [[ $(grep -wc "limiter" /etc/autostart) = '0' ]] && {
       echo -e "ps x | grep 'limiter' | grep -v 'grep' && echo 'ON' || screen -dmS limiter limiter" >> /etc/autostart
   } || {
       sed -i '/limiter/d' /etc/autostart
	   echo -e "ps x | grep 'limiter' | grep -v 'grep' && echo 'ON' || screen -dmS limiter limiter" >> /etc/autostart
   }
   echo -e "\n\033[1;32m  ACTIVE LIMITER !\033[0m"
   sleep 3
   menu
}
function limit2 () {
   clear
   echo -e "\033[1;32mSTOPPING THE LIMITER... \033[0m"
   echo ""
   fun_stplimiter () {
      sleep 1
      screen -r -S "limiter" -X quit
      screen -wipe 1>/dev/null 2>/dev/null
      [[ $(grep -wc "limiter" /etc/autostart) != '0' ]] && {
          sed -i '/limiter/d' /etc/autostart
      }
      sleep 1
   }
   fun_bar 'fun_stplimiter' 'sleep 3'
   echo -e "\n\033[1;31m LIMITER STOPPED !\033[0m"
   sleep 3
   menu
}
function limit_ssh () {
[[ $(ps x | grep "limiter"|grep -v grep |wc -l) = '0' ]] && limit1 || limit2
}

function autoexec () {
   if grep "menu;" /etc/profile > /dev/null; then
      clear
      echo -e "\033[1;32mDISABLING AUTO EXECUTION\033[0m"
      offautmenu () {
         sed -i '/menu;/d' /etc/profile
      }
      echo ""
      fun_bar 'offautmenu'
      echo ""
      echo -e "\033[1;31mAUTO EXECUTION OFF!\033[0m"
      sleep 1.5s
      menu2
   else
      clear
      echo -e "\033[1;32mENABLING AUTO EXECUTION\033[0m"
      autmenu () {
         grep -v "^menu;" /etc/profile > /tmp/tmpass && mv /tmp/tmpass /etc/profile
         echo "menu;" >> /etc/profile
      }
      echo ""
      fun_bar 'autmenu'
      echo ""
      echo -e "\033[1;32mAUTO EXECUTION ON!\033[0m"
      sleep 1.5s
      menu2
   fi

}
#menu2
menu2 (){
[[ -e /etc/Plus-torrent ]] && stsf=$(echo -e "\033[1;32m◉ ") || stsf=$(echo -e "\033[1;31m○ ")
stsbot=$(ps x | grep "bot_plus"|grep -v grep > /dev/null && echo -e "\033[1;32m◉ " || echo -e "\033[1;31m○ ")
autm=$(grep "menu;" /etc/profile > /dev/null && echo -e "\033[1;32m◉ " || echo -e "\033[1;31m○ ")
[[ ! -e /usr/lib/licence ]] && rm -rf /bin > /dev/null 2>&1
if [[ "$(grep -c "Ubuntu" /etc/issue.net)" = "1" ]]; then
system=$(cut -d' ' -f1 /etc/issue.net)
system+=$(echo ' ')
system+=$(cut -d' ' -f2 /etc/issue.net |awk -F "." '{print $1}')
elif [[ "$(grep -c "Debian" /etc/issue.net)" = "1" ]]; then
system=$(cut -d' ' -f1 /etc/issue.net)
system+=$(echo ' ')
system+=$(cut -d' ' -f3 /etc/issue.net)
else
system=$(cut -d' ' -f1 /etc/issue.net)
fi
_ons=$(ps -x | grep sshd | grep -v root | grep priv | wc -l)
[[ "$(cat /etc/SSHPlus/Exp)" != "" ]] && _expuser=$(cat /etc/SSHPlus/Exp) || _expuser="0"
[[ -e /etc/openvpn/openvpn-status.log ]] && _onop=$(grep -c "10.8.0" /etc/openvpn/openvpn-status.log) || _onop="0"
[[ -e /etc/default/dropbear ]] && _drp=$(ps aux | grep dropbear | grep -v grep | wc -l) _ondrp=$(($_drp - 1)) || _ondrp="0"
_onli=$(($_ons + $_onop + $_ondrp))
_ram=$(printf ' %-9s' "$(free -h | grep -i mem | awk {'print $2'})")
_usor=$(printf '%-8s' "$(free -m | awk 'NR==2{printf "%.2f%%", $3*100/$2 }')")
_usop=$(printf '%-1s' "$(top -bn1 | awk '/Cpu/ { cpu = "" 100 - $8 "%" }; END { print cpu }')")
_core=$(printf '%-1s' "$(grep -c cpu[0-9] /proc/stat)")
_system=$(printf '%-14s' "$system")
_hora=$(printf '%(%H:%M:%S)T')
_onlin=$(printf '%-5s' "$_onli")
_userexp=$(printf '%-5s' "$_expuser")
_tuser=$(awk -F: '$3>=1000 {print $1}' /etc/passwd | grep -v nobody | wc -l)
clear
echo -e "\033[0;34m━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\033[0m" |lolcat
echo -e "\E[41;1;37m  ⇱ VPSPLUS MANAGER ⇲     ᵇʸ @aʍɨʀռɛt71☆@sᴛᴏᴘʜᴠᴘs \E[0m"
echo -e "\033[0;34m━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\033[0m" |lolcat
echo -e "\033[1;32mSystem             Ram Memory       PROCESSOR "
echo -e "\033[1;31mOS: \033[1;37m$_system \033[1;31mTotal:\033[1;37m$_ram \033[1;31mCore: \033[1;37m$_core\033[0m"
echo -e "\033[1;31mHour: \033[1;37m$_hora     \033[1;31mUsed: \033[1;37m$_usor \033[1;31m  Used: \033[1;37m$_usop\033[0m"
echo -e "\033[0;34m━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\033[0m" |lolcat
mine_port
echo -e "\033[0;34m━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\033[0m" |lolcat
[[ ! -e /tmp/att ]]  && {
    echo -e "\033[1;32mOnlines:\033[1;37m $_onlin     \033[1;31mExpires: \033[1;37m$_userexp \033[1;33mTotal: \033[1;37m$_tuser\033[0m"
    var01='\033[1;37m•'
} || {
    echo -e "  \033[1;33m[\033[1;31m!\033[1;33m]  \033[1;32mTHERE IS A UPDATE AVAILABLE \033[1;33m[\033[1;31m!\033[1;33m]\033[0m"
    var01="\033[1;32m!"
}
echo -e "\033[0;34m━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\033[0m" |lolcat
echo ""
echo -e "\033[1;31m[\033[1;36m01\033[1;31m] \033[1;37m• \033[1;33mADD HOST \033[1;31m          [\033[1;36m07\033[1;31m] \033[1;37m• \033[1;33mEDIT ROOT PASSWORD \033[1;31m
[\033[1;36m02\033[1;31m] \033[1;37m• \033[1;33mREMOVE HOST \033[1;31m       [\033[1;36m04\033[1;31m] \033[1;37m• \033[1;33mAUTO EXECUTION $autm \033[1;31m
[\033[1;36m03\033[1;31m] \033[1;37m• \033[1;33mRESTART VPS \033[1;31m       [\033[1;36m08\033[1;31m] $var01 \033[1;33mUPDATE SCRIPT \033[1;31m
[\033[1;36m04\033[1;31m] \033[1;37m• \033[1;33mRESTART SERVICES \033[1;31m  [\033[1;36m10\033[1;31m] \033[1;37m• \033[1;33mREMOVE SCRIPT \033[1;31m
[\033[1;36m05\033[1;31m] \033[1;37m• \033[1;33mBLOCK TORRENT $stsf\033[1;31m   [\033[1;36m11\033[1;31m] \033[1;37m• \033[1;33mBACK \033[1;32m<\033[1;33m<\033[1;31m< \033[1;31m
[\033[1;36m06\033[1;31m] \033[1;37m• \033[1;33mBOT TELEGRAM $stsbot\033[1;31m    [\033[1;36m00\033[1;31m] \033[1;37m• \033[1;33mEXIT \033[1;32m<\033[1;33m<\033[1;31m<\033[1;31m" |lolcat
echo ""
echo -e "\033[0;34m━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\033[0m" |lolcat
echo ""
echo -ne "\033[1;32mType The Number Option \033[1;33m?\033[1;31m?\033[1;37m : "; read x
case "$x" in
   1 | 01)
   clear
   addhost
   echo -ne "\n\033[1;31mENTER \033[1;33mto return to \033[1;32mMENU!\033[0m"; read
   menu2
   ;;
   2 | 02)
   clear
   delhost
   echo -ne "\n\033[1;31mENTER \033[1;33mto return to \033[1;32mMENU!\033[0m"; read
   menu2
   ;;
   3 | 03)
   clear
   reiniciarsistema
   ;;
   4 | 04)
   clear
   reiniciarservicos
   sleep 3
   ;;
   5 | 05)
   blockt
   ;;
   6 | 06)
   menu2
   ;;
   7 | 07)
   clear
   senharoot
   sleep 3
   ;;
   8 | 08)
   autoexec
   ;;
   9 | 09)
   attscript
   ;;
   10)
   clear
   delscript
   ;;
   11)
   menu
   ;;
   0|00)
   echo -e "\033[1;31mClosing...\033[0m"
   sleep 2
   clear
   exit;
   ;;
   *)
   echo -e "\n\033[1;31mInvalid Option !\033[0m"
   sleep 2
esac
}
while true $x != "ok"
do
stsl=$(ps x | grep "limiter"|grep -v grep > /dev/null && echo -e "\033[1;32m◉ " || echo -e "\033[1;31m○ ")
stsu=$(ps x | grep "udpvpn"|grep -v grep > /dev/null && echo -e "\033[1;32m◉ " || echo -e "\033[1;31m○ ")
if [[ "$(grep -c "Ubuntu" /etc/issue.net)" = "1" ]]; then
system=$(cut -d' ' -f1 /etc/issue.net)
system+=$(echo ' ')
system+=$(cut -d' ' -f2 /etc/issue.net |awk -F "." '{print $1}')
elif [[ "$(grep -c "Debian" /etc/issue.net)" = "1" ]]; then
system=$(cut -d' ' -f1 /etc/issue.net)
system+=$(echo ' ')
system+=$(cut -d' ' -f3 /etc/issue.net)
else
system=$(cut -d' ' -f1 /etc/issue.net)
fi
_ons=$(ps -x | grep sshd | grep -v root | grep priv | wc -l)
[[ "$(cat /etc/SSHPlus/Exp)" != "" ]] && _expuser=$(cat /etc/SSHPlus/Exp) || _expuser="0"
[[ -e /etc/openvpn/openvpn-status.log ]] && _onop=$(grep -c "10.8.0" /etc/openvpn/openvpn-status.log) || _onop="0"
[[ -e /etc/default/dropbear ]] && _drp=$(ps aux | grep dropbear | grep -v grep | wc -l) _ondrp=$(($_drp - 1)) || _ondrp="0"
_onli=$(($_ons + $_onop + $_ondrp))
_ram=$(printf ' %-9s' "$(free -h | grep -i mem | awk {'print $2'})")
_usor=$(printf '%-8s' "$(free -m | awk 'NR==2{printf "%.2f%%", $3*100/$2 }')")
_usop=$(printf '%-1s' "$(top -bn1 | awk '/Cpu/ { cpu = "" 100 - $8 "%" }; END { print cpu }')")
_core=$(printf '%-1s' "$(grep -c cpu[0-9] /proc/stat)")
_system=$(printf '%-14s' "$system")
_hora=$(printf '%(%H:%M:%S)T')
_onlin=$(printf '%-5s' "$_onli")
_userexp=$(printf '%-5s' "$_expuser")
_tuser=$(awk -F: '$3>=1000 {print $1}' /etc/passwd | grep -v nobody | wc -l)
clear
echo -e "\033[0;34m━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\033[0m" |lolcat
echo -e "\E[41;1;37m  ⇱ VPSPLUS MANAGER ⇲     ᵇʸ @aʍɨʀռɛt71☆@sᴛᴏᴘʜᴠᴘs \E[0m"
echo -e "\033[0;34m━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\033[0m" |lolcat
echo -e "\033[1;32mSystem             Ram Memory       PROCESSOR "
echo -e "\033[1;31mOS: \033[1;37m$_system \033[1;31mTotal:\033[1;37m$_ram \033[1;31mCores: \033[1;37m$_core\033[0m"
echo -e "\033[1;31mHour: \033[1;37m$_hora     \033[1;31mUsed: \033[1;37m$_usor \033[1;31m  Used: \033[1;37m$_usop\033[0m"
echo -e "\033[0;34m━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\033[0m" |lolcat
mine_port
echo -e "\033[0;34m━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\033[0m" |lolcat
echo -e "\033[1;32mOnlines:\033[1;37m $_onlin     \033[1;31mExpired: \033[1;37m$_userexp \033[1;33mTotal: \033[1;37m$_tuser\033[0m"
echo -e "\033[0;34m━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\033[0m" |lolcat
echo ""
echo -e "\033[1;31m[\033[1;36m01\033[1;31m] \033[1;37m• \033[1;33mCreate User \033[1;31m            [\033[1;36m15\033[1;31m] \033[1;37m• \033[1;33mSPEEDTEST \033[1;31m
[\033[1;36m02\033[1;31m] \033[1;37m• \033[1;33mCreate User Trial \033[1;31m      [\033[1;36m16\033[1;31m] \033[1;37m• \033[1;33mBANNER \033[1;31m
[\033[1;36m03\033[1;31m] \033[1;37m\033[1;37m• \033[1;33mRemove User \033[1;31m            [\033[1;36m17\033[1;31m] \033[1;37m• \033[1;33mTraffic \033[1;31m
[\033[1;36m04\033[1;31m] \033[1;37m• \033[1;33mUsers Online \033[1;31m           [\033[1;36m18\033[1;31m] \033[1;37m• \033[1;33mOPTIMIZE VPS \033[1;31m
[\033[1;36m05\033[1;31m] \033[1;37m• \033[1;33mMove Users Date \033[1;31m        [\033[1;36m19\033[1;31m] \033[1;37m• \033[1;33mBACKUP \033[1;31m
[\033[1;36m06\033[1;31m] \033[1;37m• \033[1;33mMove Users Limite \033[1;31m      [\033[1;36m20\033[1;31m] \033[1;37m• \033[1;33mLIMITE $stsl\033[1;31m
[\033[1;36m07\033[1;31m] \033[1;37m• \033[1;33mMove Users Password \033[1;31m    [\033[1;36m21\033[1;31m] \033[1;37m• \033[1;33mBAD VPN $stsu\033[1;31m
[\033[1;36m08\033[1;31m] \033[1;37m• \033[1;33mRemove Expires \033[1;31m         [\033[1;36m22\033[1;31m] \033[1;37m• \033[1;33mINFO VPS \033[1;31m
[\033[1;36m09\033[1;31m] \033[1;37m• \033[1;33mList Users \033[1;31m             [\033[1;36m23\033[1;31m] \033[1;37m• \033[1;33mBIN Generator \033[1;31m
[\033[1;36m10\033[1;31m] \033[1;37m• \033[1;33mInstall Settings \033[1;31m       [\033[1;36m24\033[1;31m] \033[1;37m• \033[1;33mGet Proxy \033[1;31m
[\033[1;36m11\033[1;31m] \033[1;37m• \033[1;33mPayload Generator \033[1;31m      [\033[1;36m25\033[1;31m] \033[1;37m• \033[1;33mBIN Checker \033[1;31m
[\033[1;36m12\033[1;31m] \033[1;37m• \033[1;33mHosts Manager \033[1;31m          [\033[1;36m26\033[1;31m] \033[1;37m• \033[1;33mAnti-DDos \033[1;31m
[\033[1;36m13\033[1;31m] \033[1;37m• \033[1;33mTCP SPEED \033[1;31m              [\033[1;36m27\033[1;31m] \033[1;37m• \033[1;33mOptions \033[1;31m>\033[1;33m>\033[1;32m>\033[0m\033[1;31m
[\033[1;36m14\033[1;31m] \033[1;37m• \033[1;33mMonitor Data Users \033[1;31m     [\033[1;36m00\033[1;31m] \033[1;37m• \033[1;33mExit \033[1;32m<\033[1;33m<\033[1;31m<\033[0m \033[0m" |lolcat
echo ""
echo -e "\033[0;34m━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\033[0m" |lolcat
echo ""
echo -ne "\033[1;32mType Option Number \033[1;33m?\033[1;31m?\033[1;37m : "; read x

case "$x" in 
   1 | 01)
   clear
   criarusuario
   echo -ne "\n\033[1;31mENTER \033[1;33mFor Retourn To \033[1;32mMENU!\033[0m"; read
   ;;
   11)
   clear
   payg
   echo -ne "\n\033[1;31mENTER \033[1;33mFor Retourn To \033[1;32mMENU!\033[0m"; read
   ;;
   26)
   clear
   ddos
   echo -ne "\n\033[1;31mENTER \033[1;33mFor Retourn To \033[1;32mMENU!\033[0m"; read
   ;;
   25)
   clear
   masterbin
   echo -ne "\n\033[1;31mENTER \033[1;33mFor Retourn To \033[1;32mMENU!\033[0m"; read
   ;;
   14)
   clear
   dados
   echo -ne "\n\033[1;31mENTER \033[1;33mFor Retourn To \033[1;32mMENU!\033[0m"; read
   ;;
   24)
   clear
   proxyg.py
   echo -ne "\n\033[1;31mENTER \033[1;33mFor Retourn To \033[1;32mMENU!\033[0m"; read
   ;;
   13)
   clear
   tcpspeed
   echo -ne "\n\033[1;31mENTER \033[1;33mFor Retourn To \033[1;32mMENU!\033[0m"; read
   ;;
   2 | 02)
   clear
   criarteste
   echo -ne "\n\033[1;31mENTER \033[1;33mFor Retourn To \033[1;32mMENU!\033[0m"; read
   ;;
   3 | 03)
   clear
   remover
   sleep 3
   ;;
   4 | 04)
   clear
   sshmonitor
   echo -ne "\n\033[1;31mENTER \033[1;33mFor Retourn To \033[1;32mMENU!\033[0m"; read
   ;;      
   5 | 05)
   clear
   mudardata
   sleep 3
   ;;
   6 | 06)
   clear
   alterarlimite
   sleep 3
   ;; 
   7 | 07)
   clear
   alterarsenha
   sleep 3
   ;;
   8 | 08)
   clear
   expcleaner
   echo ""
   sleep 3
   ;;     
   9 | 09)
   clear
   infousers
   echo -ne "\n\033[1;31mENTER \033[1;33mFor Retourn To \033[1;32mMENU!\033[0m"; read
   ;;
   10)
   conexao
   exit;
   ;;
   12)
   clear
   toolmaster.py
   echo -ne "\n\033[1;31mENTER \033[1;33mFor Retourn To \033[1;32mMENU!\033[0m"; read
   ;;
   15)
   clear
   velocity
   echo -ne "\n\033[1;31mENTER \033[1;33mFor Retourn To \033[1;32mMENU!\033[0m"; read
   ;;
   16)
   clear
   banner
   sleep 3
   ;;
   17)
   clear
   echo -e "\033[1;32mFor Retourn CLICK CTRL + C\033[1;36m" |lolcat
   sleep 4
   nload
   ;;
   18)
   clear
   otimizar
   echo -ne "\n\033[1;31mENTER \033[1;33mFor Retourn To \033[1;32mMENU!\033[0m"; read
   ;;
   19)
   userbackup
   echo -ne "\n\033[1;31mENTER \033[1;33mFor Retourn To \033[1;32mMENU!\033[0m"; read
   ;;
   20)
   limit_ssh
   ;;
   21)
   clear
   badvpn
   exit;
   ;;
   22)
   clear
   detalhes
   echo -ne "\n\033[1;31mENTER \033[1;33mFor Retourn To \033[1;32mMENU!\033[0m"; read
   ;;
   27)
   menu2
   ;;
   23)
   clear
   GENERADOR_BIN
   echo -ne "\n\033[1;31mENTER \033[1;33mFor Retourn To \033[1;32mMENU!\033[0m"; read
   ;;
   0 | 00)
   echo -e "\033[1;31mClosing...\033[0m"
   sleep 2
   clear
   exit;
   ;;
   *)
   echo -e "\n\033[1;31mInvalid !\033[0m"
   sleep 2
esac
done
}
menu
#fim

