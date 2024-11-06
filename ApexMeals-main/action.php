<?php
session_start();
include('dbconnection.php');

if (isset($_POST['actualregister'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $email = $_POST['email'];
    $program = $_POST['program'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];

    if ($password = $password2) {
        $password = md5($password);
    }

    $sql = "INSERT INTO users (first_name, last_name, username, program, contact_number, email, gender, registered_date,role_id,employee_id,user_password)
    VALUES('$fname','$lname', '$username','$program', '$phone','$email','$gender',now(),200,104,'$password')";

    $result = $conn->query($sql);

    if ($result) {
        $_SESSION['message'] = "REGISTRATION SUCCESSFUL!";
        $_SESSION['type'] = "success";
        header("Location: registrationpractice.php");
    } else {
        $_SESSION['message'] = "Registration Failed !!!";
        $_SESSION['type'] = "fail";
        header("Location: registrationpractice.php");
    }
}

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM admin_userdetails WHERE username='$username'";

    $result = $conn->query($sql);



    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($row['user_password'] == md5($password)) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['role'] = $row['role_id'];
            $_SESSION['user_id'] = $row['user_id'];

            header('Location: projectrough.php');
        } else {
            header('Location:loginpractice.php');
            exit();
        }

        if ($username != $row['username']) {
            header('Location: loginpractice.php');
            exit();
        }
    }
}
