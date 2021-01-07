<html>
<head>
	<title>Blood Need Registration Page</title>
	<link rel="stylesheet" type="text/css" href="../css/register.css">
	<link rel="icon" href="../image/img.png" type="image" sizes="16x16">

	<style>
	#id1{
    	width:500px;
    	height:600px;
    	}  	
	</style>

</head>
<h1>NEED FOR BLOOD?</h1>
<center>
<body>	

<div id="id1">

<form action="blood_register_back.php" name="lform" onsubmit="return validation()" method="POST">

<input type="text" name="name" placeholder="Patient Name.." /><br>

<input type="text" name="num1" placeholder="Moblie Number.." /><br>

<input type="text" name="hname" placeholder="Hospital Name.." /><br>

<input type="text" name="num2" placeholder="Hospital Number.." /><br>

<input type="text" name="email" placeholder="Your E-Mail...." /><br>

<input type="text" name="bg" placeholder="Blood Group...." /><br>

<input type="text" name="age" placeholder="Age...." /><br>

<input type="text" name="ad" placeholder="Hospital Address.."><br>

<input type="text" name="pin" placeholder="Pincode...." /><br>

<input type="submit" value="Submit">

<INPUT type="reset" value="Reset">

</form>

</div>
</form>
</center>
<script>
	function validation() {
		var username = document.forms["lform"]["name"].value;
    var num1 = document.forms["lform"]["num1"].value;
	var num2 = document.forms["lform"]["num2"].value;
	var hname = document.forms["lform"]["hname"].value;
    var email = document.forms["lform"]["email"].value;
    var bg = document.forms["lform"]["bg"].value;
    var age = document.forms["lform"]["age"].value;
    var ad = document.forms["lform"]["ad"].value;
    var pin = document.forms["lform"]["pin"].value;
    if(username == "") {
        window.alert("Name cannot be Empty");
        return false;
    }
    else if(username.match(/\d/) != null) {
        window.alert("Name cannot have numbers");
        return false;
    }
    if(num1 == "") {
        window.alert("Mobile number cannot be Empty");
        return false;
    }
    else if(isNaN(num1)) {
        window.alert("Mobile number cannot have characters");
        return false;
    }
    else if(num1.length != 10){
        window.alert("Mobile number must be of length 10");
        return false;
	}
	if(hname == "") {
        window.alert("Hospital Name cannot be Empty");
        return false;
    }
    else if(hname.match(/\d/) != null) {
        window.alert("Hospital Name cannot have numbers");
        return false;
    }
    if(num2 == "") {
        window.alert("Alternate Mobile number cannot be Empty");
        return false;
    }
    else if(isNaN(num2)) {
        window.alert("Alternate Mobile number cannot have characters");
        return false;
    }
    else if(num2.length != 10){
        window.alert("Alternate Mobile number must be of length 10");
        return false;
    }
    var mpattern = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    if(email == "") {
        window.alert("Email cannot be Empty");
        return false;
    }
    else if(!mpattern.test(email)) {
        window.alert("Email format is Invalid");
        return false;
    }
    if(bg == "") {
        window.alert("Blood Group cannot be Empty");
        return false;
    }
    if(age == "") {
        window.alert("Age cannot be Empty");
        return false;
    }
    else if(isNaN(age)) {
        window.alert("Age cannot have characters");
        return false;
    }
    if(ad == "") {
        window.alert("Address cannot be Empty");
        return false;
    }
    if(pin == "") {
        window.alert("Pincode cannot be Empty");
        return false;
    }
    else if(isNaN(pin)) {
        window.alert("Pincode cannot have characters");
        return false;
    }
    else if(pin.length != 6){
        window.alert("Pincode must be of length 6");
        return false;
    }
    return true;
	}
</script>
</body>
</html>