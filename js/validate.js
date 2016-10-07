function checkRollNo(e){
     var element=e.target;
    if(/[^a-zA-Z0-9]/.test(element.value)){
        alert("Specials characters are not allowed");
        element.value="";
        return false;
    }
    if(!/[^a-zA-Z]/.test(element.value)){
        alert("Rollno is invalid");
        element.value="";
        return false;
    }if(!/[^0-9]/.test(element.value)){
        alert("Rollno is invalid ");
        element.value="";
        return false;
    }
    if(element.value.length>8 || element.value<6){
        alert("Rollno is invalid");
        element.value="";
          return false;
    }
        return true;
    
}
function checkName(e){
     var element=e.target;
    if(/[^a-zA-Z ]/.test(element.value)){
        alert("Name is invalid! Only characters from a-z and A-Z are allowed.")
    element.value="";
        return false;
    }

if(element.value.length<3){
        alert("Name is too short!");
        element.value="";
          return false;
    }
        return true;
}
function checkAddress(e){
    var element=e.target;
    if(element.value.length<50){
        alert("Address is too short!");
        element.value="";
        return false;
    }
    return true;
}
function checkEmail(e){
    var element=e.target;
    if(!/[^@_.a-zA-Z0-9]/.test(element.value)){
        alert("Specials characters are not allowed");
        element.value="";
        return false;
    }
        if(!/[@]/.test(element.value)){
            alert("email should contain @")
        
    return false;
        }
        if(element.value.length>50){
        alert("email is too long!");
        element.value="";
        return false;
    }
        if(!/[^a-zA-Z]/.test(element.value)){
        alert("email is invalid");
        element.value="";
        return false;
    }if(!/[^0-9]/.test(element.value)){
        alert("email is invalid ");
        element.value="";
        return false;
    }
        
    return true;
}

var rollno  = document.getElementById("rollno");
var sname = document.getElementById("sname");
var address = document.getElementById("address");
var email  = document.getElementById("email");
rollno.addEventListener('blur', checkRollNo, false);
sname.addEventListener('blur', checkName, false);
address.addEventListener('blur', checkAddress, false);
email.addEventListener('blur',checkEmail,false);