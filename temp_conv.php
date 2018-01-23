<?php
if (isset($_POST['submit'])) {
	$temperature=$_POST['temperature'];
	$units=$_POST['units'];

	if ($units =="C") {
		$result = $temperature *9 / 5 + 32;
	} else{
		$result = ($temperature - 32) * 5 / 9;
	}	
	
}
?>
<link rel="stylesheet" type="text/css" href="style.css">
<div class="result">
	<b><?php echo "The Converted temperature is :" .$result; ?></b>
</div>