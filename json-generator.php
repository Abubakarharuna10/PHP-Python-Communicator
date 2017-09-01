<?php
$value = $_POST['flagSent'];
//$value = '1';

if(is_null($value))
{
	//Check if returned value is NULL
	$errorReply = "\nValue sent from your JavaScript is NULL.\n".$value;
        echo json_encode($errorReply);
}
else
{
        $text1 = "Value not NULL.\nValue to be written is: ".$value."\n";

	//create an array and store value of flag in it.
	$postThis = array('flag'=>$value);

	//1. Open the Json file in write mode
	//2. Write array in it by encoding into Json format
	//3. Close the Json file
	$fp = fopen("flag.json", "w") or die ("Unable to open file in write mode");
	fwrite($fp, json_encode($postThis));
	fclose($fp);

	//1. Open Json file again for confirmation in read mode
	//2. Read the contents of Json file
	//3. Close Json file
	$myfile = fopen("flag.json", "r") or die("Unable to open file in read mode");
	$text2 = fgets($myfile);
	fclose($myfile);

	//Send text1 and tex2 back to JavaScript
	$returningVal = $text1 . $text2;
        echo json_encode($returningVal);
}
?>
