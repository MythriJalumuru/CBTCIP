function validate() { 
      
        var name = document.forms["myform"]["name"]; 
        
        var email= document.forms["myform"]["email"]; 
        var phone = document.forms["myform"]["phone"]; 
        var plandate = document.forms["myform"]["plandate"]; 
    
 if (name.value == "") { 
            window.alert("Please enter your name."); 
            name.focus(); 
            return false; 
        } 
 if (email.value == "") { 
            window.alert("Please enter email."); 
            email.focus(); 
            return false; 
        }
  
        if (phone.value == "") { 
            window.alert("Please enter your phone number."); 
            phone.focus(); 
            return false; 
        } 
  
        if (date.value == "") { 
            window.alert("Please enter your event date"); 
            plandate.focus(); 
            return false; 
        } 
   function call_save()
{
  window.location = "save.php";
}

}