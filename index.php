<!Doctype html>
<html>
<head>
    <link href="style/style.css" type "text/css" rel="stylesheet"/>
    <link href="style/ind.css" type "text/css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <title>Messaging</title>
</head>

<body>
    <?php
    if(isset($_GET['invalidLogin'])){
        ?>
        <div class="error">
            Error invalid login<br>
        </div>
        <?php
    }
    if(isset($_GET['signOut'])){
        ?>
        <div class="exit">
            You have successfully logged out<br>
        </div>
        <?php
    }
    ?>
    <div class = "background">
    <div class = "header">
        <h1> Messaging</h1>
    </div>

    <div class = "Entry">
        <a class="button" id="login">Login</a>
        <a class="button" id="signUp">Sign Up</a>
    </div>
    <div class = "loginForm">
        <form action="login.php" method="POST">
            Email:<br>
            <input type = "text" name= "enterEmail" required />
            <br>Password:<br>
            <input type="password" name="enterPassword" required />
            <br>
            <input type="submit" name="loginSubmit" class="formButton" value="submit">
            <input type="reset" name="loginCancel" id="cancelLogin" class="formButton" onclick="hideLogin()" value="cancel">
        </form>
    </div>
    <div class = "signUpForm">
        <form action="signUp.php" method="POST">
            Register Email:<br>
            <input type = "text" name="registerEmail" required>
            <br>Register Password:<br>
            <input type="password" name="registerPassword" required>
            <br>
            <input type="submit" name="registerSubmit" class="formButton" value="submit">
            <input type="reset" name="registerCancel" id="cancelSignUp" class="formButton" onclick="hideRegister()" value="cancel">
        </form>
    </div>
</div>
    <script type = "text/javascript">
    $(document).ready(function(){
        $(".loginForm").hide();
        $(".signUpForm").hide();

        $("#login").click(function(){
            $(".loginForm").show();
            $(".signUpForm").hide();
        })
        $("#cancelLogin").click(function(){
            $(".loginForm").hide();
        })

        $("#signUp").click(function(){
            $(".signUpForm").show();
            $(".loginForm").hide();
        })
        $("#cancelSignUp").click(function(){
            $(".signUpForm").hide();
        })
    })
    </script>
</body>

</html>
