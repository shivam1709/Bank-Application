
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbssrdsbank";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Name FROM user WHERE EmailID='shivam@gmail.com'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $name =   $row["Name"]. "<br>";
  }
} else {
  echo "0 results";
}

$sql = "INSERT INTO tansaction (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
  </head>
  <body>
    <header class="header">
      <navbar>
        <div class="topnav">
          <a class="imgLogo" href="accountSummary.php"
            ><img src="img/logo.png"width="150px" height="150px"
          /></a>
          <a class="nameDiv"> The bank which you can trust </a><br>
          <div class="headerDetails">
          <a class="" href="accountSummary.php">Account Summary</a>
          <a href="customerInfo.php">Customer Information</a>
          <a href="interac.php">Interac-e Transfer </a>
          <a href="logout.php">Logout </a>
          </div>
        </div>
      </navbar>
    </header>
    <main>
      <!-- DO EVERYTHING HERE -->
      <h2 ><?php echo $name ?></h2>
      <div class="accountAmount">
        <h1>Checking Account</h1>
        <h3>$5000</h3>
      </div>
      <div class="interact">

      <form action="interac.php" onsubmit="return formValidation()">
        <label for="pname">Pay name:</label><br />
        <input type="text" id="pname" name="fname" value="" /><br />
        <label for="email">Enter your email:</label><br />
        <input type="email" id="email" name="email" /><br />
        <label for="phone">phone number:</label><br />
        <input
          type="tel"
          id="phone"
          name="phone"
          pattern="[0-9]{3}[0-9]{2}[0-9]{4}"
        />
        <br />
        <label for="quetion">Interec Quetion:</label><br />
        <input type="text" id="pname" name="fname" value="" /><br />
        <label for="pname">Interec Answer:</label><br />
        <input type="text" id="pname" name="fname" value="" /><br />
        <label for="amount">Amount:</label><br />
        <input type="number" id="amount" name="" value="" /><br />
      
      <button id="Validation" >
        Send Money
      </button>
      </form>
      </div>
    </main>
<br>
<footer class="footer-content">
    <p>Follow SSRDS on social media:</p>
    <ul class="socials">
        <li>
            <a href="https://github.com/shivam1709"><img class="github" src="img/github.png" alt="gh"></a>
        </li>
        <li>
            <a href="https://www.instagram.com/shivam.hingu/"><img class="instagram" src="img/instagram.png" alt="insta"></a>
        </li>
        <li>
            <a href="https://www.facebook.com/shivamhingu/"><img class="facebook" src="img/facebook.png" alt="fb"></a>
        </li>
    </ul>
        <p class="footer-bottom">Copyright &copy; SSRDS</p>
</footer>
<script src="js/login.js"></script>
    
    <script src="./js/interac.js"></script>
  </body>
</html>
