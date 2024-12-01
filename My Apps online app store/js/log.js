function checkPassword() {
  var password = document.getElementById("pws").value;
  var pattern = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,10}/;
  if (!password.match(pattern)) {
    alert("Password must contain at least one digit, one lowercase letter, one uppercase letter, and be between 5 and 10 characters long.");
    return false;
  }
  else{
	return true;
  }
}

function enableButton() {
  document.getElementById("submitBtn").disabled = false;
}


