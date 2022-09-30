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
//document.getElementById('textbox_id').value
