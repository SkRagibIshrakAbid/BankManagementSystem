function validateForm(){
    var Name = document.forms["empForm"]["name"].value;
    var Email = document.forms["empForm"]["email"].value;
    var ePatt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var EmailPat = ePatt.test(Email);
    var uPatt = /[a-zA-Z0-9._]{5,}$/;
    var Username = document.forms["empForm"]["username"].value;
    var UsernamePat = uPatt.test(Username);
    var Password = document.forms["empForm"]["password"].value;
    var pPatt = /(?=.*[@#$%^&+=!]).*$/;
    var PasswordPat = pPatt.test(Password);
    var ConfirmPassword = document.forms["empForm"]["confirmPassword"].value;
    var Dob =  document.forms["empForm"]["dob"].value;
    var Nid =  document.forms["empForm"]["nid"].value;
    var nPatt = /^[0-9]\d{12}$/;
    var NidPat = nPatt.test(Nid);
    var Gender = document.forms["empForm"]["gender"].value;
    var Mobile = document.forms["empForm"]["mobile"].value;
    var mPatt = /^01\d{9}$/;
    var MobilePat = mPatt.test(Mobile);
    var Address = document.forms["empForm"]["address"].value;
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
    if(!NidPat){
        //alert("Name must be filled out");
        document.getElementById("NID").innerHTML="Please Enter a Valid NID.";
        return false;   
    }
    else{
        document.getElementById("NID").innerHTML="";
    }
    if(Dob==""){
        //alert("Name must be filled out");
        document.getElementById("DOB").innerHTML="Please Enter a Valid Date of Birth.";
        return false;   
    }
    else{
        document.getElementById("DOB").innerHTML="";
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
    if(Gender==""){
        //alert("Name must be filled out");
        document.getElementById("Gender").innerHTML="Please Select Your Gender.";
        return false;   
    }
    else{
        document.getElementById("Gender").innerHTML="";
    }
    if(document.getElementById("checkbox").checked==false){
        document.getElementById("Checkbox").innerHTML="Please Agree.";
        return false; 
    }
    else{
        document.getElementById("Checkbox").innerHTML="";
    }

}