<?php
session_start();
include('dbconnection.php');

// Login
if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM admin_userdetails WHERE username='$username'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($row['user_password'] == md5($password)) {
            // echo "here"; die();
            $_SESSION['username'] = $row['username'];
            $_SESSION['role'] = $row['role_id'];
            $_SESSION['user_id'] = $row['user_id'];

            header('Location: admindash.php');
        } else {
            header('Location:adminpractice.php');
            exit();
        }
    }
}
