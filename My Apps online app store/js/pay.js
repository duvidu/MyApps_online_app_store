function enableButton(){
    if(document.getElementById("checkbox").checked){
        document.getElementById("pay").disabled=false;
    }
    else{
        document.getElementById("pay").disabled=true;
    }
    
} 
function message(){
    alert("Payment successfully!!");
}



