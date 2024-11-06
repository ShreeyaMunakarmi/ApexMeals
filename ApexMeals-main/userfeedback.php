<!DOCTYPE html>
<html>

<head>
    <title>USER FEEDBACK</title>
    <link rel="icon" type="image/png" href="FinalLogo.png">

    <link rel="stylesheet" href="userfeedback.css">
    </link>

    <script src="https://kit.fontawesome.com/addd88a3a0.js" crossorigin="anonymous"></script>

</head>

<body>

    <script>
        function singleonly(checkbox) {
            var cbox = document.getElementsByName('boxcheck');
            for (var i = 0; i < cbox.length; i++) {
                if (cbox[i] !== checkbox) {
                    cbox[i].checked = false;
                }
            }
        }
    </script>

    <div class="background">
        <div id="corhead">
            <div id="imagefeedback">
                <img src="FinalLogo.png" alt="Logo" width="80" height="80">
            </div>
            <div id="exit">
                <a href="projectrough.php" target="_self" title="Click for Exit">
                    <i class="fa-solid fa-backward"></i>
                </a>
            </div>
        </div>

        <div id="cortitle">
            <div id="title">
                GIVE US YOUR FEEDBACK
            </div>
        </div>

        <br>
        <div id="feedbackborder">
            <form action="feedback_action.php" method="POST">
                <fieldset>
                    <label id="coricon1"><span style="background-color: bisque; opacity: 0.9;">Name:</span></label>
                    <input type="text" name="name" placeholder="Enter your username" style="width:190px; height:22px;" />
                    <br>
                    <br>
                    <label id="coricon2"><span style="background-color: bisque; opacity: 0.9;">Email:</span></label>
                    <input type="email" name="email" placeholder="Enter your email" style="width:190px; height:22px;" />
                    <br>
                    <br>
                    <label id="coricon3"><span style="background-color: bisque; opacity: 0.9;">What your feedback is about:</span></label>
                    <br>
                    <br>
                    <input type="checkbox" name="boxcheck" value="Suggestion" onclick="singleonly(this)" checked><span style="font-size: 19px; 
                            font-family: 'Times New Roman', Times, serif; margin-left: 8px;">Suggestion</span><br>
                    <br>
                    <input type="checkbox" name="boxcheck" value="Issue" onclick="singleonly(this)"><span style="font-size: 19px; 
                            font-family: 'Times New Roman', Times, serif; margin-left: 8px;">Issue</span><br>
                    <br>
                    <input type="checkbox" name="boxcheck" value="Information" onclick="singleonly(this)"><span style="font-size: 19px; font-family: 'Times New Roman', Times, serif; margin-left: 8px;">Information</span><br>
                    <br>
                    <label id="coricon4"><span style="background-color: bisque; opacity: 0.9;">Message us the details:</span></label><br>
                    <br>
                    <textarea name="message" rows="11" cols="55" placeholder="Insert your query here" style="outline: none;"></textarea>
                    <br>
                    <br>
                    <input type="submit" value="SUBMIT YOUR FEEDBACK" name="submit" id="buttonclick" />
                </fieldset>
            </form>
        </div>
    </div>
</body>

</html>