//JavaScript for displaying message depending on time of the day

const date = new Date();
const wlcmMsg =
    " Please, enter your email and password to continue with banking";

if (date.getHours() > 4 && date.getHours() <= 12) {
    document.getElementById("wlcmMsg").innerHTML = "Good Morning!" + wlcmMsg;
} else if (date.getHours() > 12 && date.getHours() <= 15) {
    document.getElementById("wlcmMsg").innerHTML = "Good Afternoon!" + wlcmMsg;
} else if (date.getHours() > 15) {
    document.getElementById("wlcmMsg").innerHTML = "Good Evening!" + wlcmMsg;
}


//javascript for login
function formValidation() {
    if (document.getElementById("email").value != "") {
        if (document.getElementById("password").value != "") {
            return true;
        } else {
            document.getElementById("errorMsg").innerHTML =
                "Failed attempt! Password cannot be empty!";
            return false;
        }
    } else {
        document.getElementById("errorMsg").innerHTML =
            "Failed attempt! Email cannot be empty!";
        return false;
    }
}