<?php
session_start();
include "dbconnection.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>REGISTRATION FORM</title>
    <link rel="icon" type="image/png" href="FinalLogo.png">

    <link rel="stylesheet" href="registrationpractice.css">
    </link>

    <script src="https://kit.fontawesome.com/addd88a3a0.js" crossorigin="anonymous"></script>

    <script>
        function validation() {
            var username = document.getElementsByName("username").value;
            var password1 = document.getElementsByName("password").value;
            var paddword2 = document.getElementsByName("password2").value;
            var first_name = document.getElementsByName("fname").value;
            var last_name = document.getElementsByName("lname").value;
            var email = document.getElementsByName("email").value;
            var contact_number = document.getElementsByName("phone").value;

            if (username == " " || username == NULL) {
                window.alert("Username field left empty!");
                return false;
            }

            if (username - match[/[^a-z][^A-Z]/i]) {
                window.alert("Invalid characters on Username!");
                return false;
            }

            if (password1 == "" || password1 == NULL) {
                window.alert("Password field left empty!");
                return false;
            }

            if (password1 != password2) {
                window.alert("Passwords donot match!");
                return false;
            }

            if (password1.length < 6) {
                window.alert("Password too weak!");
                return false;
            }

            if (first_name == "" || first_name == NULL) {
                window.alert("Name field left empty!");
                return false;
            }

            if (last_name == "" || last_name == NULL) {
                window.alert("Name field left empty!");
                return false;
            }

            if (first_name - match[/[^a-z] [^A-Z]/i]) {
                window.alert("Invalid characters on Name!");
                return false;
            }
            if (last_name - match[/[^a-z] [^A-Z]/i]) {
                window.alert("Invalid characters on Name!");
                return false;
            }

            if (email.charAt(email.length - 3) != ".") {
                window.alert("Invalid positioning of . in email!");
                return false;
            }

            if (indexOf("@") <= 0) {
                winod.alert("Invalid positioning of @ in email!");
                return false;
            }

            if (contact_number - match[/[^0-9]/g]) {
                window.alert("Invalid phone number");
                return false;
            }

            if (contact_number.length != 9) {
                window.alert("Invalid phone number");
                return false;
            }
        }
    </script>
</head>

<body>
    <div class="background">

        <br>
        <div id="imagelogin">
            <a href="loginpractice.php" target="_self" title="Go back to Login page">
                <img src="RegisterLogo.png" alt="Logo" width="210" height="210">
            </a>
        </div>
        <div class="registerresult">
            <?php
            if (isset($_SESSION['message'])) {
                $msgType = $_SESSION['type'];
                echo $_SESSION['message'];
                $_SESSION['message'] = "";
            }

            ?>
        </div>
        <div id="corlogin">
            <form action="action.php" method="POST" onsubmit=" validation()">
                <fieldset>
                    <label id="coricon1"> <i class="fa-solid fa-user fa-xl"></i></label>
                    <input type="text" placeholder="Enter your Username" name="username" style="width:190px; height:22px; margin-left:6px;" />
                    <br>
                    <br>
                    <br>
                    <label id="coricon2"> <i class="fa-solid fa-key fa-xl"></i></label>
                    <input type="password" placeholder="Enter your Password" name="password" style="width:190px; height:22px; margin-left:6px;" />
                    <br>
                    <br>
                    <br>
                    <label id="coricon2"> <i class="fa-solid fa-lock fa-xl"></i></label>
                    <input type="password" placeholder="Confirm your Password" name="password2" style="width:190px; height:22px; margin-left:8px;" />
                    <br>
                    <br>
                    <br>
                    <label id="coricon2"> <i class="fa-solid fa-signature fa-xl" style="color:bisque;"></i></label>
                    <input type="text" placeholder="Enter your First name" name="fname" style="width:190px; height:22px;" />
                    <br>
                    <br>
                    <br>
                    <label id="coricon2"> <i class="fa-solid fa-signature fa-xl" style="color:lightsalmon;"></i></label>
                    <input type="text" placeholder="Enter your Last name" name="lname" style="width:190px; height:22px;" />
                    <br>
                    <br>
                    <br>
                    <label id="coricon2"> <i class="fa-solid fa-envelope fa-xl"></i></label>
                    <input type="email" placeholder="Enter your email" name="email" style="width:190px; height:22px; margin-left:8px;" />
                    <br>
                    <br>
                    <br>
                    <label id="coricon2"> <i class="fa-solid fa-graduation-cap fa-xl"></i></label>
                    <select name="program" required style="width:200px; height:30px;" size="3">
                        <option value="BCIS" selected>BCIS (Computer Info System)</option>
                        <option value="BBA">BBA-BI (Business and Insurance)</option>
                        <option value="BBA">BBA-TT (Travel and Tourism)</option>
                    </select>
                    <br>
                    <br>
                    <br>
                    <label id="coricon2"> <i class="fa-solid fa-venus-mars fa-xl"></i></label>
                    <input type="radio" name="gender" value="MALE" checked />MALE<br>
                    <br>
                    <input type="radio" name="gender" value="FEMALE" style="margin-left: 50px;" />FEMALE
                    <br>
                    <br>
                    <br>
                    <label id="coricon2"> <i class="fa-solid fa-address-book fa-xl"></i></label>
                    <input type="number" placeholder="Enter your phone number" name="phone" maxlength="10" style="width:190px; height:22px; margin-left:8px;" />
                    <br>
                    <br>
                    <br>
                    <input type="submit" value="REGISTER" name="actualregister" id="buttonclick" />
                </fieldset>
            </form>
        </div>
    </div>
</body>

</html>