<?php
<<<<<<< Updated upstream
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "dbssrdsbank";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";

  $getUserDetail = "SELECT Name FROM user WHERE EmailID='shivam@gmail.com'";
  $result = $conn->query($getUserDetail);

    if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $name =  "Hey". " " . $row["Name"];"<br>";
  }
} else {
  echo "0 results";
}

$getAccountDetails =
 "SELECT * FROM transactions 
 WHERE EmailID='user@gmail.com'";
  $result = $conn->query($getAccountDetails);

    if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $accountType =   $row["AccountType"];"<br>";
    $amount = $row["Amount"];
    $sender = $row["Sender"];
    $receiver =  $row["Receiver"];
    $date =  $row["Date"];
    if($accountType == "chequing"){
        if($sender == null){
            $chequing = $receiver;
            $chequingAmount = $amount;
            
        }
        else{
            $chequing = $sender;
        }
        $chequingAmount = $amount;

    }
    else{
        if($sender == null){
            $saving = $receiver;
        }
        else{
            $saving = $sender;
        }
        $saving = $sender;
        if($accountType == "saving"){
            
            $savingAmount = $amount;
        }
    }
}
} else {
  echo "0 results";
}
$conn->close();

?>

=======
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbssrdsbank";

$email = $_SESSION['email'];
$senders=array();
$plusAmount=array();
$minusAmount=array();
$recievers=array();
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM transactions WHERE EmailID = '$email' AND AccountType = 'chequing'";

$result =  $conn->query($sql);
    if ($result->num_rows >0) {
       while($row = $result->fetch_assoc()) {
            if($row["Sender"]!=""){
                array_push($senders,$row["Sender"]);
                array_push($plusAmount,$row["Amount"]);
            }
            else{
                array_push($recievers,$row["Receiver"]);
                array_push($minusAmount,$row["Amount"]);
            }
       }
    }
    else{
        header("location:logout.php");
    }
?>
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
                <p><?php echo $name ?></p>  
=======
                <p id="user"><?php echo($_SESSION["username"]);?></p>
               
>>>>>>> Stashed changes
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
                    <h3><?php echo(array_sum($plusAmount)-array_sum($minusAmount));?></h3>
                </div>
             </div>
            
<<<<<<< Updated upstream
            <div class="brb">
                <div class="transactionHistory">
                    <p><?php echo $chequing ?></p>
                    <p class="plus"> <?php echo $chequingAmount?></p>
                </div>
                <div class="transactionHistory">
                    <p><?php echo $chequing ?></p>
                    <p class="plus"> <?php echo $chequingAmount?></p>
                </div>
                
=======
            <?php
            echo "<div class='brb'>";
            for($i=0;$i < count($senders);$i++){
                echo"<div class='transactionHistory'>";
                echo($senders[$i]);
                echo"<p class='plus'>";
                echo($plusAmount[$i]);
                echo"</p></div>";
            }
            for($i=0;$i < count($recievers);$i++){
                echo"<div class='transactionHistory'>";
                echo($recievers[$i]);
                echo"<p class='minus'>";
                echo($minusAmount[$i]);
                echo"</p></div>";
            }?>
>>>>>>> Stashed changes
            </div>
        </div>
            
<?php
$sendersSB=array();
$plusAmountSB=array();
$minusAmountSB=array();
$recieversSB=array();
$sql1 = "SELECT * FROM transactions WHERE EmailID = '$email' AND AccountType = 'saving'";

$result1 =  $conn->query($sql1);
    if ($result1->num_rows >0) {
       while($row = $result1->fetch_assoc()) {
            if($row["Sender"]!=""){
                array_push($sendersSB,$row["Sender"]);
                array_push($plusAmountSB,$row["Amount"]);
            }
            else{
                array_push($recieversSB,$row["Receiver"]);
                array_push($minusAmountSB,$row["Amount"]);
            }
       }
    }
    else{
        header("location:logout.php");
    }
?>            

        
        <div id="Saving" class="type">
            <div class="accountAmount">
<<<<<<< Updated upstream
            <h1>Account Balance</h1>
            <h3>$1070</h3>
            </div>
            <div class="brb">
            <div class="transactionHistory">
                <p><?php echo $saving ?></p>
                <p class="minus"><?php echo $savingAmount ?></p>
            </div>
            <div class="transactionHistory">
                <p>Investment</p>
                <p class="minus"> $700</p>
            </div>
           
            </div>
=======
                <div>
                    <h1>Account Balance</h1>
                </div>
                <div>
                    <h3><?php echo(array_sum($plusAmountSB)-array_sum($minusAmountSB));?></h3>
                </div>
             </div>
            <?php
            echo "<div class='brb'>";
            for($j=0;$j < count($sendersSB);$j++){
                echo"<div class='transactionHistory'>";
                echo($sendersSB[$j]);
                echo"<p class='plus'>";
                echo($plusAmountSB[$j]);
                echo"</p></div>";
            }
            for($j=0;$j < count($recieversSB);$j++){
                echo"<div class='transactionHistory'>";
                echo($recieversSB[$j]);
                echo"<p class='minus'>";
                echo($minusAmountSB[$j]);
                echo"</p></div>";
            }?>
>>>>>>> Stashed changes
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