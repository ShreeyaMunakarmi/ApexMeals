<?php
session_start();
include ('dbconnection.php');

if(isset($_POST['submit'])){
$feedback_description=$_POST['message'];
$user_id=$_SESSION['user_id'];
$feedback_category=$_POST['boxcheck'];

    $sql="INSERT INTO feedback(feedback_category, feedback_description,user_id)
    values('$feedback_category','$feedback_description','$user_id')";

$result=$conn -> query($sql);
if ($result){
$_SESSION['message']="Feedback Submitted!!!";
header('Location:projectrough.php');
exit();
}
}
?>