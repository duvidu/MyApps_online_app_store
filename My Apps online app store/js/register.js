function checkPassword(){
    if(document.getElementById("pws").value!=document.getElementById("rpws").value)
    {
        alert("Password Mismatched!");
        return false;
    }
    else{
        return true;
    }
}

function enableButton(){
    if(document.getElementById("checkBox").checked){
        document.getElementById("submitBtn").disabled=false;
    }
    else{
        document.getElementById("submitBtn").disabled=true;
    }
    
}

