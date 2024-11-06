<?php
session_start();
include('dbconnection.php');        

if (isset($_POST['submit'])) {
    $review_description = $_POST['review'];
    $user_id = $_SESSION['user_id'];
    $sql = "INSERT INTO review(review_description,user_id,review_date)
            values('$review_description', '$user_id',now())";
    $result = $conn->query($sql);
    if ($result) {
        $_SESSION['message'] = "Review Submitted!!!";
        header('Location:projectrough.php');
        exit();
    }
}
