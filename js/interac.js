if (sessionStorage.getItem("loggedIn") == 1) {
  sessionStorage.setItem("user", "user123");
  document.getElementById("user").innerHTML = sessionStorage.getItem("user");
} else {
  window.location.replace("login.php");
}
function moneyValidation() {
  //var a = document.getElementById("amount").value;
  if (document.getElementById("amount").value < 5000) {
    alert("Money sent");
    return true;
  } else {
    alert("Not enough money");
    return false;
  }
}
function formValidation() {
  if (document.getElementById("pname").value == "") {
    alert("Field cannot be empty");
  } 
  else if(document.getElementById("email").value == ""){
    alert("Field cannot be empty");
  }
  else if(document.getElementById("phone").value == ""){
    alert("Field cannot be empty");
  }
  else if(document.getElementById("quetion").value == ""){
    alert("Field cannot be empty");
  }
  else if(document.getElementById("answer").value == ""){
    alert("Field cannot be empty");
  }
  else if(document.getElementById("amount").value == ""){
    alert("Field cannot be empty");
  }
  else{
    moneyValidation();
  }
}

//document.getElementById('textbox_id').value
