<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: accountSummary.php");
    exit;
}
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
$emailID="";
if(isset($_POST["email"])){
    $emailID = $_POST["email"];
}
$pass="";
if(isset($_POST["password"])){
    $pass = $_POST["password"];
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $sql = "SELECT * FROM user WHERE EmailID = '$emailID'";
    $result1 =  $conn->query($sql);
    if ($result1->num_rows === 1) {
       while($row = $result1->fetch_assoc()) {
            if($row["Password"]==$pass){
                $_SESSION["loggedin"] = true;
                $_SESSION["email"] = $row["EmailID"];
                $_SESSION["username"] = $row["Name"]; 
    
                // Redirect user to welcome page
                header("location: accountSummary.php");
            }
            else{
                echo "Invalid email or password";
            }
        }
           
       
    } else {
       echo"Please,Try again!";
    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SSRDS Bank</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main>
        <!--Bank name and logo-->
        <div class="logo">
            <h1>
                <a class="imgLogo"><img src="img/logo.png" width="150px" height="150px"></a>
                <br>
                SSRDS Bank
            </h1>
        </div>
        <!--Welcome messsage according to time-->
        <div class="welcome">
            <hr>
            <h3 id="wlcmMsg"></h3>
            <hr>
        </div>
        <div class="login-box">
            <form action="<?php $_SERVER["PHP_SELF"]; ?>" onsubmit="return formValidation()" method="POST" id="loginForm">
                <h2>Log in</h2>
                <p id="errorMsg"><?php
                if(isset($_GET["message"])){
                    echo $_GET["message"];
                }
                ?></p>
                <label for="email" class="loginLabel">Email</label>
                <br>
                <input type="text" name="email" id="email" class="email">
                <br>
                <label for="password" class="loginLabel">Password</label>
                <br>
                <input type="password" name="password" id="password" class="password">
                <br>
                <input type="submit" value="Submit" class="loginSubmit">
            </form>
        </div>
        <div>
           <a href="signup.php">Don't have an account! Sign-up here</a> 
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
</body>
<?php
$stmt->close();
$sql->close();
$conn->close();

?>
</html>