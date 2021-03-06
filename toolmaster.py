#!/usr/bin/env python

from urllib2 import *
from platform import system
import sys
def clear():
    if system() == 'Linux':
        os.system("clear")
    if system() == 'Windows':
        os.system('cls')
        os.system('color a')
    else:
        pass
def slowprint(s):
    for c in s + '\n':
        sys.stdout.write(c)
        sys.stdout.flush()
        time.sleep(4. / 100)
banner = '''
========= Hosts Manager =======\033[91m
========== VPSPLUS ========\033[96m
''' 
print banner
def menu():
   print'''
\033[37m [1] \033[92m>\033[33m DNS lookup
\033[37m [2] \033[92m>\033[33m Whois search
\033[37m [3] \033[92m>\033[33m Reverse IP Search
\033[37m [4] \033[92m>\033[33m GeoIP Search
\033[37m [5] \033[92m>\033[33m Subnet Search
\033[37m [6] \033[92m>\033[33m Port Scanner
\033[37m [7] \033[92m>\033[33m Extract Links 
\033[37m [8] \033[92m>\033[33m Zone Transfer
\033[37m [9] \033[92m>\033[33m HTTP Header
\033[37m [10]\033[92m>\033[33m Host Finder
\033[37m [11]\033[92m>\033[33m Infos
\033[37m [0] \033[92m>\033[33m Back
\033[37m==============================
'''
menu()
def ext():
    ex = raw_input ('\033[92mContinuer/Exit Option [C / E]>  ')
    if ex[0].upper() == 'E' :
           print 'Exiting!!!'
           exit()
    else:
           clear()
           print banner
           menu()
           select()

def  select():
  try:
    joker = input("\033[96mOptions \033[92m0/\033[91m11 =  ")
    if joker == 2:
      dz = raw_input('\033[91mEnter the IP or Domain : \033[91m')
      whois = "http://api.hackertarget.com/whois/?q=" + dz
      dev = urlopen(whois).read()
      print (dev)
      ext()
    elif joker == 3:
      dz = raw_input('\033[92mEnter the IP or Domain : \033[92m')
      revrse = "http://api.hackertarget.com/reverseiplookup/?q=" + dz
      lookup = urlopen(revrse).read()
      print (lookup)
      ext()
    elif joker == 1:
      dz = raw_input('\033[96mEnter the IP or Domain :\033[96m')
      dns = "http://api.hackertarget.com/dnslookup/?q=" + dz
      joker = urlopen(dns).read()
      print (joker)
      ext()
    elif joker == 4:
      dz = raw_input('\033[91mEnter the IP : \033[91m')
      geo = "http://api.hackertarget.com/geoip/?q=" + dz
      ip = urlopen(geo).read()
      print (ip)
      ext()
    elif joker == 5:
      dz = raw_input('\033[92mEnter the IP or Domain : \033[92m')
      sub = "http://api.hackertarget.com/subnetcalc/?q=" + dz
      net = urlopen(sub).read()
      print (net)
      ext()
    elif joker == 6:
      dz = raw_input('\033[96mEnter the IP or Domain : \033[96m')
      port = "http://api.hackertarget.com/nmap/?q=" + dz
      scan = urlopen(port).read()
      print (scan)
      ext()
    elif joker == 7:
      dz = raw_input('\033[91mEnter the Domain Name :\033[91m')
      get = "https://api.hackertarget.com/pagelinks/?q=" + dz
      page = urlopen(get).read()
      print(page)
      ext()
    elif joker == 8:
      dz = raw_input('\033[92mEnter the IP or Domain :\033[92m')
      zon = "http://api.hackertarget.com/zonetransfer/?q=" + dz
      tran = urlopen(zon).read()
      print (tran)
      ext()
    elif joker == 9:
      dz = raw_input('\033[96mEnter the Domain Name :\033[96m')
      hea = "http://api.hackertarget.com/httpheaders/?q=" + dz
      der =  urlopen(hea).read()
      print (der)
      ext()
    elif joker == 10:
      dz = raw_input('\033[91mEnter the IP or Domain :\033[91m')
      host = "http://api.hackertarget.com/hostsearch/?q=" + dz
      finder = urlopen(host).read()
      print (finder)
      ext()
    elif joker == 11:
      slowprint("Hosts Manager \033[92m")
      slowprint(".....................")
      slowprint("VPSPLUS \033[96m")
      slowprint(".........................")
      ext() 
    elif joker == 0:
      print "Exit Hosts Manager!!"
      exit()
  except(KeyboardInterrupt):
    print "\nCtrl + C -> Exit!!"
select()
