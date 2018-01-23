<!DOCTYPE html>
<html>
<head>
	<title>Temperature Converstion App!</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
<h1>Temperature Conversion in php </h1>
</div>
<div class="main_body">
	<form action="temp_conv.php" method="post">
	   
		<b>Enter Your Temperature to convert : </b><input class="inp_field" type="number" name="temperature" value="0"><br>
		<div class="partition">
			<b>Celsias</b><input type="radio" name="units" value="C">
			<b>Farhenait</b><input type="radio" name="units" value="F">
			<input class="sub_btn" type="submit" name="submit" value="Convert">
        </div>

	</form>
    
</div>
<div class="footer">
	©2018 <a href="https://www.facebook.com/RevelYusuf">Revel Yusuf</a>
</div>

</body>
</html>