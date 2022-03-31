#!/bin/bash
# Bin _ Gen #OFC
link_bin="https://www.dropbox.com/s/blbdl8kkc4vt4fy/generadorcc.py"
[[ ! -e /usr/bin/generadorcc.py ]] && wget -O /usr/bin/generadorcc.py ${link_bin} > /dev/null && chmod +x /usr/bin/generadorcc.py
echo -e  "\E[44;1;37m     VPSPLUS BIN GENERATOR    \E[0m"
echo -e 
echo -e "Enter the bin: " && read UsrBin
while [[ ${#UsrBin} -lt 16 ]]; do
UsrBin+="x"
done
echo -e "How Many Bins Do You Want To Generate: " && read GerBin
[[ $GerBin != +([0-9]) ]] && GerBin=10
[[ -z $GerBin ]] && GerBin=10
echo ""
python /usr/bin/generadorcc.py -b ${UsrBin} -u ${GerBin} -d -c |lolcat
