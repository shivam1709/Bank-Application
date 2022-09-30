function Money() {
  var a = document.getElementById(amount).value;
  if (a > 5000) {
    document.getElementById("answer").innerHTML = "Correct!";
  } else {
    document.getElementById("answer").innerHTML = "Copp!";
  }
}
