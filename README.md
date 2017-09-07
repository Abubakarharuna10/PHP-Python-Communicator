# Read_Write_JSON

Aim: **Write JSON File from PHP - Read JSON File from Python**


<b>How to Use</b>:
1.	Use all files under your username (not root).<br />
	Do this by using ```sudo chown yourusername:yourusername -R Read-Write-JsonFile```

2.	Provide Executable permissions for <b>flag.json</b> and <b>json-generator.php</b><br />
	Do this by using ```sudo chmod a+x filename``` and then ```sudo chmod 777 filename```

3.	Keep running the python script in the background using ```python3 json-checker.py```

4.	Open <b>flag-sender.html</b> file from your browser.<br />
	That's it. You must have changed the value till now from your <b>flag.json</b> file.
	Now check your terminal output (which is running python script) & see if it has changed anything.<br />

<br />If Value sent from JavaScript is '0', it will print "Will Skip Code"
<br />If Value sent from Javascript is '1', it will print "Will Execute Code"
<br />
