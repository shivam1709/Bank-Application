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
            <form action="accountSummary.php" onsubmit="return formValidation()" method="GET" id="loginForm">
                <h2>Log in</h2>
                <p id="errorMsg"></p>
                <label for="username" class="loginLabel">Username</label>
                <br>
                <input type="text" name="name" id="userName" class="username">
                <br>
                <label for="password" class="loginLabel">Password</label>
                <br>
                <input type="password" name="password" id="password" class="password">
                <br>
                <input type="submit" value="Submit" class="loginSubmit">
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
</body>

</html>