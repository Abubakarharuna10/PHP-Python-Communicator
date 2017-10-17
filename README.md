# PHP-Python-Communication

What's Done: **Writing JSON File using PHP >---> Reading JSON File using Python**


<b>How to Use</b>:
1.	Use all files under your username (not root).<br />
	Do this by using ```sudo chown yourusername:yourusername -R PHP-Python-Communicator/```

2.	Provide Executable permissions for <b>flag.json</b> and <b>json-generator.php</b><br />
	Do this by using ```sudo chmod a+x filename``` and then ```sudo chmod 777 filename```

3.	Keep running the python script in the background using ```python3 json-checker.py```

4.	Open <b>flag-sender.html</b> file from your browser.<br />
	
	
<br />That's it!!!
<br /> You have changed the flag value from your <b>flag.json</b>.
<br />Now open your <b>flag.json</b> for confirming change in values.<br />

<br />If Value sent from <b>flag-sender.html</b> is '0', <b>json-checker.py</b> will print "Will Skip Code"
<br />If Value sent from <b>flag-sender.html</b> is '1', <b>json-checker.py</b> will print "Will Execute Code"
<br />
