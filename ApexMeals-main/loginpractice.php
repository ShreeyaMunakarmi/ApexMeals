<!DOCTYPE html>
<html>

<head>
    <title>USER LOGIN</title>
    <link rel="icon" type="image/png" href="FinalLogo.png">

    <link rel="stylesheet" href="loginpractice.css">
    </link>

    <script src="https://kit.fontawesome.com/addd88a3a0.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="background">
        <div id="imagelogin">
            <br>
            <br>
            <br>
            <br>
            <img src="UserLogo.png" alt="Logo" width="210" height="210">
        </div>
        <div id="corlogin">
            <div class="corextlogin">
                <form action="action.php" method="POST">
                    <br>
                    <label id="coricon1"> <i class="fa-solid fa-user fa-xl"></i></label>
                    <input type="text" placeholder="Enter Username" name="username" style="width:190px; height:22px;" />
                    <br>
                    <br>
                    <br>
                    <label id="coricon2"> <i class="fa-solid fa-key fa-xl"></i></label>
                    <input type="password" placeholder="Enter Password" name="password" style="width:190px; height:22px;" />
                    <br>
                    <br>
                    <br>
                    <input type="submit" value="LOGIN" name="login" id="buttonclick" />
                    <br>
                    <br>
                </form>
                <a href="registrationpractice.php" target="_self">
                    <button id="buttonclick">REGISTER</button>
                </a>
            </div>
        </div>
    </div>
</body>

</html>