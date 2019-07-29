function validate(){

 
  var Name = document.forms["register"]["Name"].value;
  var Name_last = document.forms["register"]["Name_last"].value;
   var Phone_no = document.forms["register"]["Phone_no"].value;
    var email = document.forms["register"]["email"].value;
    var college = document.forms["register"]["college"].value;
     var event = document.forms["register"]["event"].value;
      
 
 
 if(Name==""){
 document.getElementById("f_name").style.display="block";
 return false;
 }
else if(Name_last==""){
document.getElementById("l_name").style.display="block";
return false;
}
else if(Phone_no==""){
document.getElementById("phone").style.display="block";
return false;
}
else if(email==""){
document.getElementById("email").style.display="block";
return false;
}
else if(college==""){
document.getElementById("college").style.display="block";
return false;
}
else if(event==""){
document.getElementById("event").style.display="block";
return false;
}

}