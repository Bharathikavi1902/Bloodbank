function validation() {
    var username = document.forms["lform"]["username"].value;
    var num1 = document.forms["lform"]["num1"].value;
    var num2 = document.forms["lform"]["num2"].value;
    var email = document.forms["lform"]["email"].value;
    var bg = document.forms["lform"]["bg"].value;
    var age = document.forms["lform"]["age"].value;
    var password = document.forms["lform"]["password"].value;
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
    if(password == "") {
        window.alert("Password cannot be Empty");
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