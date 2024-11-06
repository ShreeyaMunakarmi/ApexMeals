<?php
session_start();
include "dbconnection.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>USER PROFILE</title>
    <link rel="icon" type="image/png" href="FinalLogo.png">

    <link rel="stylesheet" href="userprofile.css">
    </link>

    <script src="https://kit.fontawesome.com/addd88a3a0.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="background">
        <div id="corhead">
            <div id="imageprofile">
                <img src="FinalLogo.png" alt="Logo" width="90" height="90">
            </div>
            <div id="exit">
                <a href="projectrough.php" target="_self" title="Click for Exit">
                    <i class="fa-solid fa-backward"></i>
                </a>
            </div>
        </div>

        <div id="cortitle">
            <div id="title">
                YOUR PROFILE
            </div>
        </div>

        <br>
        <div id="profileborder">
            <div class="profileelements">
                <br>
                <i class="fa-solid fa-signature fa-3x" style="color:bisque;"></i>
                <br>
                <p style="font-family:'Times New Roman', Times, serif; font-weight:bolder; font-size:28px;">
                    <span style="background-color: lightsalmon; color:black; opacity: 0.9;">
                        First Name:
                    </span>
                </p>
                <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-weight:bold; font-size:25px;">
                    <span style="background-color: bisque; color:black; opacity: 0.9;">
                        <?php
                        $sql = "SELECT first_name FROM users 
                        WHERE username= ?";
                        $stmt = $conn->prepare($sql);

                        if ($stmt) {
                            $stmt->bind_param("s", $_SESSION['username']); // "s" indicates the data type of the parameter (string)
                            $stmt->execute();
                            $result = $stmt->get_result();

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "{$row['first_name']}";
                                }
                            } else {
                                echo "No user found.";
                            }

                            $stmt->close();
                        } else {
                            echo "Failed to prepare the statement.";
                        }





                        ?>
                    </span>
                </p>
            </div>

            <div class="profileelements">
                <br>
                <i class="fa-solid fa-signature fa-3x" style="color:lightsalmon;"></i>
                <br>
                <p style="font-family:'Times New Roman', Times, serif; font-weight:bolder; font-size:28px;">
                    <span style="background-color: lightsalmon; color:black; opacity: 0.9;">
                        Last Name:
                    </span>
                </p>
                <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-weight:bold; font-size:25px;">
                    <span style="background-color: bisque; color:black; opacity: 0.9;">
                        <?php
                        $sql = "SELECT last_name FROM users 
                        WHERE username= ?";
                        $stmt = $conn->prepare($sql);

                        if ($stmt) {
                            $stmt->bind_param("s", $_SESSION['username']); // "s" indicates the data type of the parameter (string)
                            $stmt->execute();
                            $result = $stmt->get_result();

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "{$row['last_name']}";
                                }
                            } else {
                                echo "No user found.";
                            }

                            $stmt->close();
                        } else {
                            echo "Failed to prepare the statement.";
                        }





                        ?>
                    </span>
                </p>
            </div>

            <div class="profileelements">
                <br>
                <i class="fa-solid fa-envelope fa-3x"></i>
                <br>
                <p style="font-family:'Times New Roman', Times, serif; font-weight:bolder; font-size:28px;">
                    <span style="background-color: lightsalmon; color:black; opacity: 0.9;">
                        Email:
                    </span>
                </p>
                <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-weight:bold; font-size:25px;">
                    <span style="background-color: bisque; color:black; opacity: 0.9;">
                        <?php
                        $sql = "SELECT email FROM users 
                        WHERE username= ?";
                        $stmt = $conn->prepare($sql);

                        if ($stmt) {
                            $stmt->bind_param("s", $_SESSION['username']); // "s" indicates the data type of the parameter (string)
                            $stmt->execute();
                            $result = $stmt->get_result();

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "{$row['email']}";
                                }
                            } else {
                                echo "No user found.";
                            }

                            $stmt->close();
                        } else {
                            echo "Failed to prepare the statement.";
                        }





                        ?>
                    </span>
                </p>
            </div>

            <div class="profileelements">
                <br>
                <i class="fa-solid fa-graduation-cap fa-3x"></i>
                <br>
                <p style="font-family:'Times New Roman', Times, serif; font-weight:bolder; font-size:28px;">
                    <span style="background-color: lightsalmon; color:black; opacity: 0.9;">
                        Program:
                    </span>
                </p>
                <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-weight:bold; font-size:25px;">
                    <span style="background-color: bisque; color:black; opacity: 0.9;">
                        <?php
                        $sql = "SELECT program FROM users 
                        WHERE username= ?";
                        $stmt = $conn->prepare($sql);

                        if ($stmt) {
                            $stmt->bind_param("s", $_SESSION['username']); // "s" indicates the data type of the parameter (string)
                            $stmt->execute();
                            $result = $stmt->get_result();

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "{$row['program']}";
                                }
                            } else {
                                echo "No user found.";
                            }

                            $stmt->close();
                        } else {
                            echo "Failed to prepare the statement.";
                        }





                        ?>
                    </span>
                </p>
            </div>

            <div class="profileelements">
                <br>
                <i class="fa-solid fa-venus-mars fa-3x"></i>
                <br>
                <p style="font-family:'Times New Roman', Times, serif; font-weight:bolder; font-size:28px;">
                    <span style="background-color: lightsalmon; color:black; opacity: 0.9;">
                        Gender:
                    </span>
                </p>
                <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-weight:bold; font-size:25px;">
                    <span style="background-color: bisque; color:black; opacity: 0.9;">
                        <?php
                        $sql = "SELECT gender FROM users 
                        WHERE username= ?";
                        $stmt = $conn->prepare($sql);

                        if ($stmt) {
                            $stmt->bind_param("s", $_SESSION['username']); // "s" indicates the data type of the parameter (string)
                            $stmt->execute();
                            $result = $stmt->get_result();

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "{$row['gender']}";
                                }
                            } else {
                                echo "No user found.";
                            }

                            $stmt->close();
                        } else {
                            echo "Failed to prepare the statement.";
                        }

                        ?>
                    </span>
                </p>
            </div>

            <div class="profileelements">
                <br>
                <i class="fa-solid fa-address-book fa-3x"></i>
                <br>
                <p style="font-family:'Times New Roman', Times, serif; font-weight:bolder; font-size:28px;">
                    <span style="background-color: lightsalmon; color:black; opacity: 0.9;">
                        Contact Number:
                    </span>
                </p>
                <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-weight:bold; font-size:25px;">
                    <span style="background-color: bisque; color:black; opacity: 0.9;">
                        <?php
                        $sql = "SELECT contact_number FROM users 
                        WHERE username= ?";
                        $stmt = $conn->prepare($sql);

                        if ($stmt) {
                            $stmt->bind_param("s", $_SESSION['username']); // "s" indicates the data type of the parameter (string)
                            $stmt->execute();
                            $result = $stmt->get_result();

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "{$row['contact_number']}";
                                }
                            } else {
                                echo "No user found.";
                            }

                            $stmt->close();
                        } else {
                            echo "Failed to prepare the statement.";
                        }

                        ?>
                    </span>
                </p>
            </div>
        </div>
    </div>
</body>

</html>