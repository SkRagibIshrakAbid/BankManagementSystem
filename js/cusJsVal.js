function validateForm(){
  var Fname = document.forms["cusForm"]["fname"].value;
  var Lname = document.forms["cusForm"]["lname"].value;
  var Email = document.forms["cusForm"]["email"].value;
  var ePatt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
  var EmailPat = ePatt.test(Email);
  var uPatt = /[a-zA-Z0-9._]{5,}$/;
  var Username = document.forms["cusForm"]["username"].value;
  var UsernamePat = uPatt.test(Username);
  var Password = document.forms["cusForm"]["password"].value;
  var pPatt = /(?=.*[@#$%^&+=!]).*$/;
  var PasswordPat = pPatt.test(Password);
  var ConfirmPassword = document.forms["cusForm"]["cpassword"].value;
  var Dob =  document.forms["cusForm"]["dob"].value;
  var Nid =  document.forms["cusForm"]["nid"].value;
  var nPatt = /^[0-9]\d{12}$/;
  var NidPat = nPatt.test(Nid);
  var Gender = document.forms["cusForm"]["gender"].value;
  var Phone = document.forms["cusForm"]["phone"].value;
  var mPatt = /^01\d{9}$/;
  var PhonePat = mPatt.test(Phone);
  var Address = document.forms["cusForm"]["address"].value;
  var x = Password===ConfirmPassword;
  if(Fname==""){
    //alert("Name must be filled out");
    document.getElementById("Fname").innerHTML="Please Enter a Valid First Name.";
    return false;   
}
else{
  document.getElementById("Fname").innerHTML="";
}
  if(Lname==""){
      //alert("Name must be filled out");
      document.getElementById("Lname").innerHTML="Please Enter a Valid Last Name.";
      return false;   
  }
  else{
      document.getElementById("Lname").innerHTML="";
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
      document.getElementById("Cpassword").innerHTML="Password Does Not Match.";
      return false;   
  }
  else{
      document.getElementById("Cpassword").innerHTML="";
  }
  
  if(Dob==""){
      //alert("Name must be filled out");
      document.getElementById("Dob").innerHTML="Please Enter a Valid Date of Birth.";
      return false;   
  }
  else{
      document.getElementById("Dob").innerHTML="";
  }
  if(Address==""){
    //alert("Name must be filled out");
    document.getElementById("Address").innerHTML="Please Enter a Valid Address.";
    return false;   
}
else{
    document.getElementById("Address").innerHTML="";
}
  if(!NidPat){
    //alert("Name must be filled out");
    document.getElementById("Nid").innerHTML="Please Enter a Valid NID.";
    return false;   
}
else{
    document.getElementById("Nid").innerHTML="";
}
if(!PhonePat){
  //alert("Name must be filled out");
  document.getElementById("Phone").innerHTML="Please Enter a Valid Phone Number.";
  return false;   
}
else{
  document.getElementById("Phone").innerHTML="";
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