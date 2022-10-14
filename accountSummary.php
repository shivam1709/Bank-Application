<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbName = "dbssrds.sql";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
  ?>
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    
    <title>Account Summary</title>
</head>
<body>
    <header class="header">
        <div class="topnav">
            <div class="logo">
                <br>
                <a class="imgLogo" href="accountSummary.php">
                    <img src="img/logo.png" width="150px" height="150px"></a>
                    <br>
            </div>
            <a class="nameDiv"> "The bank which you can trust" </a>
            <br>
            <div class="headerDetails">
                <a  href="accountSummary.php">Account Summary</a>
                <a  href="customerInfo.php">Customer Information</a>
                <a  href="interac.php">Interac-e Transfer </a>
                <a  href="logout.php">Logout </a>
            </div>
            <div class="logoutLink">
                <p id="user"></p>
               
            </div>
        </div>
    </header>
   <main>
        <div class="navTab">
            <button class="links" onclick="accountInfo(event, 'Chequing')" id="defaultAccount">Chequing</button>
            <button class="links" onclick="accountInfo(event, 'Saving')">Saving</button>
        </div>
        <div id="Chequing" class="type">
            <div class="accountAmount">
                <div>
                    <h1>Account Balance</h1>
                </div>
                <div>
                    <h1>$5000</h1>
                </div>
             </div>
            
            
            <div class="brb">
                <div class="transactionHistory">
                    <p>Grocery</p>
                    <p class="minus"> $100</p>
                </div>
                <div class="transactionHistory">
                    <p>Income</p>
                    <p class="plus"> $2500</p>
                </div>
                <div class="transactionHistory">
                    <p>Movie</p>
                    <p class="minus"> $50</p>
                </div>
                <div class="transactionHistory">
                    <p>Outside Food</p>
                    <p class="minus"> $200</p>
                </div>
                <div class="transactionHistory">
                    <p>Rent</p>
                    <p class="minus"> $700</p>
                </div>
                <div class="transactionHistory">
                    <p>Phone Bill</p>
                    <p class="minus"> $130</p>
                </div>
                <div class="transactionHistory">
                    <p>Utility</p>
                    <p class="minus"> $50</p>
                </div>
            </div>
            

        </div>
        <div id="Saving" class="type">
            <div class="accountAmount">
            <h1>Account Balance</h1>
            <h3>$1070</h3>
            </div>
            <div class="brb">
            <div class="transactionHistory">
                <p>Investment</p>
                <p class="minus"> $200</p>
            </div>
            <div class="transactionHistory">
                <p>Investment</p>
                <p class="minus"> $700</p>
            </div>
            <div class="transactionHistory">
                <p>Investment</p>
                <p class="minus"> $130</p>
            </div>
            <div class="transactionHistory">
                <p>Investment</p>
                <p class="minus"> $50</p>
            </div>
            </div>
        </div>   

    </main>
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
    <script src="js/accountSummary.js"></script>
</body>
</html>