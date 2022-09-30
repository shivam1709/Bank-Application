if (sessionStorage.getItem("loggedIn") == 1) {
    sessionStorage.setItem("user", "user123");
    document.getElementById("user").innerHTML = sessionStorage.getItem("user");
} else {
    window.location.replace("login.html")
}

document.getElementById("defaultAccount").click();

function accountInfo(evt, accountType) {
    var i, type, links;
  
    type = document.getElementsByClassName("type");
    for (i = 0; i < type.length; i++) {
        type[i].style.display = "none";
    }
  

links = document.getElementsByClassName("links");
  for (i = 0; i < links.length; i++) {
        links[i].className = links[i].className.replace(" active", "");
}
  
 document.getElementById(accountType).style.display = "block";
  evt.currentTarget.className += " active";
      }