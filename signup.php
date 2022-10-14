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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - SSRDS Bank</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<?php

$canInserted = "";
$sql = "SELECT EmailID FROM user";
$result =  $conn->query($sql);
if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {

       //checking if user already exists or not
       if(isset($_POST["email"])){
           if($row["EmailID"] == $_POST["email"]){
               $canInserted = "false";
               break;
           }
           else{
               $canInserted = "true";
           }
       }
       
   }
 } else {
   echo "0 results";
 }
if($canInserted=="true"){
   //insert
   $stmt = $conn->prepare("INSERT INTO `user` SET Name = ?, UserName = ?, EmailID = ?, Password = ?");
   $stmt->bind_param("ssss",$name, $userName, $email, $password);
   if(isset($_POST["name"])){
   $name = $_POST["name"];
   }

   if(isset($_POST["userName"])){
   $userName = $_POST["userName"];
   }

   if(isset($_POST["email"])){
   $email = $_POST["email"];
   }
   if(isset($_POST["password"])){
   $password = $_POST["password"];
   }
   $stmt->execute();
   header("Location:login.php?message=Account created successfully");
}
if($canInserted=="false"){
    header("Location:signup.php?message=User already exist");
}



?>
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
            <form action="<?php $_SERVER["PHP_SELF"]; ?>" onsubmit="return signUpFormValidation()" method="POST" id="signupForm">
                <h2>Sign up</h2>
                <p id="errorMsg"><?php
                if(isset($_GET["message"])){
                    echo $_GET["message"];
                }?>
                </p>
                <label for="name" class="loginLabel">Name</label>
                <br>
                <input type="text" name="name" id="name" class="name" placeholder="Enter your name">
                <br>
                <label for="username" class="loginLabel">Username</label>
                <br>
                <input type="text" name="userName" id="userName" class="username" placeholder="Enter your desired username. For eg. user123">
                <br>
                <label for="email" class="loginLabel">EmailID</label>
                <br>
                <input type="text" name="email" id="email" class="email" placeholder="Enter your email. For eg. user123@abc.com">
                <br>
                <label for="password" class="loginLabel">Password</label>
                <br>
                <input type="password" name="password" id="password" class="password">
                <br>
                <label for="password" class="loginLabel">Re-enter Password</label>
                <br>
                <input type="password" name="re-password" id="re-password" class="re-password">
                <br>
                <input type="submit" value="Submit" class="loginSubmit">
            </form>
        </div>
        <div>
           <a href="login.php">Already have an account! Log-in here</a> 
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
    <script src="js/signup.js"></script>
</body>

</html>