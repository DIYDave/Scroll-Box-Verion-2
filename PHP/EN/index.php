<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
    body {
     margin: 20px auto;
	 background-color: LightGoldenRodYellow
    }
</style>
<Center>
<font face='Arial,Helvetica'>
<font color="blue">LED Scroll Text</font> <br>
Enter the text here. (1 to 120 characters).
<br>

<?php
if(isset($_POST['submit'])) {							// Executed when submit is clicked
	$data = ($_POST['textfeld']);
	if(strlen($data) > 0 AND strlen($data) < 121 ) {  	// Only if valid number
		$path = 'MeinText.txt';
		$data2 = $data . "EOT\r"; 		// Append EOT and line feed for extraction in ESP8266
		$ret = file_put_contents($path, $data2, LOCK_EX);
		if($ret === false) {
			die('There was an error while writing text line');
		}
		else {
		}	
	}
	else {												// Too few or too many characters
		echo '<font color="red">';
		echo "That was ". strlen($data). " characters. Please enter at least 1 character, maximum 100 characters";
		echo '</font>';
	}
}	
?>

<br>
<!-- Eingabefeldt und Sende-Button -->
<form action="<?php htmlentities($_SERVER['PHP_SELF']);?>" method="post" accept-charset="ISO-8859-1">
<input type="text" size="60" name="textfeld" style="font-size:18pt">
<br>
<br>
<input type="submit" name="submit" value="Senden" style="font-size:18pt">
</form>

<?php
if(strlen($data) > 0 AND strlen($data) < 121 ) {			// If the input is valid
	echo (strlen($data) ." characters were written <br />");
	echo ('Text: "'. utf8_encode($data) . '"');
}
?>


