console.log('Hello Customer');
if(sessionStorage.getItem("loggedIn") == 1){
    sessionStorage.setItem("user", "User123");
    document.getElementById("user").innerHTML =  sessionStorage.getItem("user");
}else{
    window.location.replace("login.html");
}