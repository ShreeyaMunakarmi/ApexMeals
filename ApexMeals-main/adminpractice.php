<!DOCTYPE html>
<html>

<head>
    <title>ADMIN LOGIN</title>
    <link rel="icon" type="image/png" href="FinalLogo.png">

    <link rel="stylesheet" href="adminpractice.css">
    </link>

    <script src="https://kit.fontawesome.com/addd88a3a0.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="background">
        <div id="imagelogin">
            <br>
            <br>
            <img src="AdminLogo.png" alt="Logo" width="210" height="210">
        </div>
        <div id="corlogin">
            <form action="actionadmin.php" method="POST">
                <fieldset>
                    <br>
                    <label id="coricon1"> <i class="fa-solid fa-user fa-xl"></i></label>
                    <input type="text" name="username" placeholder="Enter Username" style="width:190px; height:22px;" />
                    <br>
                    <br>
                    <br>
                    <label id="coricon2"> <i class="fa-solid fa-key fa-xl"></i></label>
                    <input type="password" name="password" placeholder="Enter Password" style="width:190px; height:22px;">
                    <br>
                    <br>
                    <br>
                    <input type="submit" value="LOGIN" name="login" id="buttonclick" />
                </fieldset>
            </form>
        </div>
    </div>
</body>

</html>