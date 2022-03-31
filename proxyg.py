#!/usr/bin/env python
import mechanize, json
from urllib2 import *
from platform import system
import sys
red="\033[0;31m"
green="\033[0;32m"
yellow="\033[1;33m"
end="\033[1;37m"
tur="\033[0;36m"

logo = '''
  ========= Get Proxy =======\033[91m
  ========== VPSPLUS ========\033[96m
''' 
print
print logo
print

br = mechanize.Browser()
br.set_handle_robots(False)
br.addheaders = [('User-agent', 'Firefox')]
res = br.open('http://pubproxy.com/api/proxy').read()
js = json.loads(res)
for i in js.keys():
	if i == "data":
		for j in js[i]:
			data = j.iteritems()
			for c,d in data:
				if c == 'support':
					sup = d.iteritems()
					for k,o in sup:
						print yellow,k,': ',o,end
					continue
				print yellow,c,': ',d,end
	else:
		print yellow,i,": ",tur,js[i],end
print
exit() 
