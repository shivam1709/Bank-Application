//JavaScript for displaying message depending on time of the day

const date = new Date();
//var time = date.getHours();
const wlcmMsg = " Please, enter your username and password to continue with banking"

if (date.getHours() < 12) {
    document.getElementById("wlcmMsg").innerHTML = "Good Morning!" + wlcmMsg;
} else if (date.getHours() > 12 && date.getHours() < 16) {
    document.getElementById("wlcmMsg").innerHTML = "Good Afternoon!" + wlcmMsg;
} else if (date.getHours() > 16) {
    document.getElementById("wlcmMsg").innerHTML = "Good Evening!" + wlcmMsg;
}

//javascript for login
function formValidation() {

    if (document.getElementById("userName").value != "") {
        if (document.getElementById("password").value != "") {
            if (document.getElementById("userName").value == "User1223") {
                if (document.getElementById("password").value == "User@1223") {
                    sessionStorage.setItem("loggedIn", 1);
                    return true;
                } else {
                    document.getElementById("errorMsg").innerHTML = "Incorrect password! Please, try again."
                    return false;
                }
            } else {
                document.getElementById("errorMsg").innerHTML = "Incorrect username! Please, try again."
                return false;
            }
        } else {
            document.getElementById("errorMsg").innerHTML = "Password cannot be empty!";
            return false;
        }
    } else {
        document.getElementById("errorMsg").innerHTML = "Username cannot be empty!";
        return false;
    }
}