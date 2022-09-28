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