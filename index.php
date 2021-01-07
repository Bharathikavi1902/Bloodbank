<html>
<head>
	<title>Index Page</title>
	<link rel="icon" href="image/img.png" type="image" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<h1>LIFELINE BLOOD BANK</h1>
<center>
<body>	
<div id="id1">
<form action="php/login.php" name="lform" onsubmit="return validation()" method="POST">

<input type="text" name="email" placeholder="E-mail...."/><br>
<input type="password" name="password" placeholder="Password....."/><br><br>
<input type="submit"  name="login" value="LOGIN">
<input type="reset" value="RESET">

</form>

<font color="white">If you are<b> new</b> to the website,then</font><br><br>

<form action="php/register.php" >
<input type="submit" value="SIGNUP">

</div>
</form>
</center>
<script>
	function validation() {
		var email = document.forms["lform"]["email"].value;
		var password = document.forms["lform"]["password"].value;
		var mpattern = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    	if(email == "") {
        	window.alert("Email cannot be Empty");
        	return false;
    	}
    	else if(!mpattern.test(email)) {
        	window.alert("Email format is Invalid");
        	return false;
		}
		if(password == "") {
        	window.alert("Password cannot be Empty");
        	return false;
    	}
	}
</script>
</body>
</html>