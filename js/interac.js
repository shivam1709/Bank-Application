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
  if (document.getElementById("pname").value != "") {
    if (document.getElementById("email").value != "") {
      if (document.getElementById("userName").value == "user123") {
        if (document.getElementById("password").value == "user123") {
          sessionStorage.setItem("loggedIn", 1);
          return true;
        } else {
          document.getElementById("errorMsg").innerHTML =
            "Failed attempt! Incorrect password!";
          return false;
        }
      } else {
        document.getElementById("errorMsg").innerHTML =
          "Failed attempt! Incorrect username!";
        return false;
      }
    } else {
      document.getElementById("errorMsg").innerHTML =
        "Failed attempt! Password cannot be empty!";
      return false;
    }
  } else {
    document.getElementById("errorMsg").innerHTML =
      "Failed attempt! Username cannot be empty!";
    return false;
  }
}

//document.getElementById('textbox_id').value
