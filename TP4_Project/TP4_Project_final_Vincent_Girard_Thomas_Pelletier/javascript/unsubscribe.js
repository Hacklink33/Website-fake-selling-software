function validation()  
{  
    let id=document.f1.username.value;  
    let ps=document.f1.password.value; 
    console.log(id)
    console.log(ps) 
    if(id.length=="" && ps.length=="") {  
        alert("User Name and Password fields are empty");  
        return false;  
    }  
    else  
    {  
        if(id.length=="") {  
            alert("User Name is empty");  
            return false;  
        }   
        if (ps.length=="") {  
        alert("Password field is empty");  
        return false;  
        }  
    }                         
}  