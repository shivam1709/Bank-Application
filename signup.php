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
function connectToDB(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        return false;
    }
    return true;   
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
            <form action="login.php" onsubmit="return signUpFormValidation()" method="POST" id="signupForm">
                <h2>Sign up</h2>
                <p id="errorMsg"><?php
                if(isset($_GET["message"])){
                    echo $_GET["message"];
                }
                ?></p>
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