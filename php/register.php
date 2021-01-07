<html>
<head>
	<title>Registration Page</title>
	<link rel="stylesheet" type="text/css" href="../css/register.css">
	<link rel="icon" href="../image/img.png" type="image" sizes="16x16">
	<style>
	#id1{
    	width:500px;
    	height:600px;
    	}  	
	</style>	
</head>
<body>
	<center>
	<h1>REGISTRATION</h1>
	<div id="id1">
	<form action="register_back.php" name="lform" onsubmit="return validation()" method="POST">
		<input type="text" name="username" placeholder="Full Name.."><br>
		<input type="text" name="num1" placeholder="Moblie Number.."><br>
		<input type="text" name="num2" placeholder="Alternate Mobile Number.."><br>
		<input type="text" name="email" placeholder="E-Mail...."><br>
		<input type="text" name="bg" placeholder="Blood Group...."><br>
		<input type="text" name="age" placeholder="Age...."><br>
		<input type="password" name="password" placeholder="Password...."><br>
		<input type="text" name="ad" placeholder="Address.."><br>
		<input type="text" name="pin" placeholder="Pincode...."/><br>
		<input type="submit" value="LOGIN">
		<input type="reset" value="RESET">
	</form>
	</div>
	</center>
	<script src="validation.js"></script>
</body>
</html>