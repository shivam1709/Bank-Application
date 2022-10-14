//JavaScript for displaying message depending on time of the day

const date = new Date();
const wlcmMsg =
    " Please, create your account to continue";

if (date.getHours() > 4 && date.getHours() <= 12) {
    document.getElementById("wlcmMsg").innerHTML = "Good Morning!" + wlcmMsg;
} else if (date.getHours() > 12 && date.getHours() <= 15) {
    document.getElementById("wlcmMsg").innerHTML = "Good Afternoon!" + wlcmMsg;
} else if (date.getHours() > 15) {
    document.getElementById("wlcmMsg").innerHTML = "Good Evening!" + wlcmMsg;
}


function validateEmail(email) {
    //var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {
        return true;
    } else {
        return false;
    }
}

//javascript for signup
function signUpFormValidation() {
    if (document.getElementById("name").value != "") {
        if (document.getElementById("userName").value != "") {
            if (document.getElementById("email").value != "") {
                if (validateEmail(document.getElementById("email").value)) {
                    if (document.getElementById("password").value != "") {
                        if (document.getElementById("re-password").value != "") {
                            if (document.getElementById("password").value == document.getElementById("re-password").value) {
                                return true;

                            } else {
                                document.getElementById("errorMsg").innerHTML = "Error! Please re-enter the same password";
                                return false;
                            }

                        } else {
                            document.getElementById("errorMsg").innerHTML = "Error! Please re enter the password";
                            return false;
                        }

                    } else {
                        document.getElementById("errorMsg").innerHTML = "Error! Password cannot be empty";
                        return false;
                    }
                } else {
                    document.getElementById("errorMsg").innerHTML = "Error! Incorrect email format";
                    return false;
                }

            } else {
                document.getElementById("errorMsg").innerHTML = "Error! Email cannot be empty";
                return false;
            }

        } else {
            document.getElementById("errorMsg").innerHTML = "Error! Username cannot be empty";
            return false;
        }

    } else {
        document.getElementById("errorMsg").innerHTML = "Error! Name cannot be empty";
        return false;
    }
}