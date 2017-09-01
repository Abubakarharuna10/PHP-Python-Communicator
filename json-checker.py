import json
import time

while True:
	fileChecker = open('flag.json','r')
	loader = json.load(fileChecker)
	flag_generated = loader['flag']
	if flag_generated =='1':
		print("FLAG IS 1")
		print("Will Execute Code")
		time.sleep(1)
	else:
		print("FLAG IS 0")
		print("Will skip code")
		time.sleep(1)
		continue
