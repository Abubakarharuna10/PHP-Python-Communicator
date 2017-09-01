# Read-Write-JsonFile

**Reading and Writing Json file**
1. Write Json file from PHP 
2. Read the same Json file from Python. Execute your code in Python depending on the content of Json file.


<b>Steps to Use</b>:
1.	Use all files under your username (not root).
	Do this by using this command ```sudo chown username:username -R directoryname```

2.	Provide Executable permissions for <b>flag.json</b> and <b>json-generator.php</b>
	Do this by using this command ```sudo chmod a+x filename``` and then sudo chmod 777 filename```

3.	Keep running the python script in a terminal using ```python3 filename.py```

4.	Open the .html file from your browser.
	That's it. You must have changed the value till now for your <b>flag.json</b> file.
	Now check your terminal which is running python script and see if it has changed any loop.
	If Value sent from JavaScript is '0', it will print "Will Skip Code"
	If Value sent from Javascript is '1', it will print "Will Execute Code"
