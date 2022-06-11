function validateForm(){
    var Name = document.forms["merchantForm"]["name"].value;
    var Email = document.forms["merchantForm"]["email"].value;
    var ePatt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var EmailPat = ePatt.test(Email);
    var uPatt = /[a-zA-Z0-9._]{5,}$/;
    var Username = document.forms["merchantForm"]["username"].value;
    var UsernamePat = uPatt.test(Username);
    var Password = document.forms["merchantForm"]["password"].value;
    var pPatt = /(?=.*[@#$%^&+=!]).*$/;
    var PasswordPat = pPatt.test(Password);
    var ConfirmPassword = document.forms["merchantForm"]["cpassword"].value;
    var License =  document.forms["merchantForm"]["license"].value;
    var LPatt = /^[0-9]\d{14}$/;
    var LicensePat = LPatt.test(License);
    var Mobile = document.forms["merchantForm"]["mobile"].value;
    var mPatt = /^01\d{9}$/;
    var MobilePat = mPatt.test(Mobile);
    var Address = document.forms["merchantForm"]["address"].value;
    var x = Password===ConfirmPassword;
    if(Name==""){
        //alert("Name must be filled out");
        document.getElementById("Name").innerHTML="Please Enter a Valid Name.";
        return false;   
    }
    else{
        document.getElementById("Name").innerHTML="";
    }
    if(!EmailPat){
        //alert("Name must be filled out");
        document.getElementById("Email").innerHTML="Please Enter a Valid Email.";
        return false;   
    }
    else{
        document.getElementById("Email").innerHTML="";
    }
    if(!UsernamePat){
        //alert("Name must be filled out");
        document.getElementById("Username").innerHTML="Please Enter a Valid Username.";
        return false;   
    }
    else{
        document.getElementById("Username").innerHTML="";
    }
    if(!PasswordPat){
        //alert("Name must be filled out");
        document.getElementById("Password").innerHTML="Please Enter a Valid Password.";
        return false;   
    }
    else{
        document.getElementById("Password").innerHTML="";
    }
    if(x==false){
        //alert("Name must be filled out");
        document.getElementById("ConfirmPassword").innerHTML="Password Does Not Match.";
        return false;   
    }
    else{
        document.getElementById("ConfirmPassword").innerHTML="";
    }
    if(!LicensePat){
        //alert("Name must be filled out");
        document.getElementById("License").innerHTML="Please Enter a Valid License No.";
        return false;   
    }
    else{
        document.getElementById("License").innerHTML="";
    }
    
    if(!MobilePat){
        //alert("Name must be filled out");
        document.getElementById("Mobile").innerHTML="Please Enter a Valid Mobile Number.";
        return false;   
    }
    else{
        document.getElementById("Mobile").innerHTML="";
    }
    if(Address==""){
        //alert("Name must be filled out");
        document.getElementById("Address").innerHTML="Please Enter a Valid Address.";
        return false;   
    }
    else{
        document.getElementById("Address").innerHTML="";
    }
    if(document.getElementById("checkbox").checked==false){
        document.getElementById("Checkbox").innerHTML="Must Agree.";
        return false; 
    }
    else{
        document.getElementById("Checkbox").innerHTML="";
    }

}