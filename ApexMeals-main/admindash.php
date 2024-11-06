<?php
session_start();
include "dbconnection.php";

if (!isset($_SESSION['username'])) {
   header(header: "Location: adminpractice.php");
}
if ($_SESSION['role'] != 100) {
   header(header: "Location: loginpractice.php");
}
?>
<!DOCTYPE html>
<html>

<head>
   <title>ApexMeals ADMIN</title>
   <link rel="icon" type="image/png" href="FinalLogo.png">

   <link rel="stylesheet" href="admindash.css">
   </link>

   <script src="https://kit.fontawesome.com/addd88a3a0.js" crossorigin="anonymous"></script>
</head>

<body>
   <div id="headmenu">
      <div id="innerheadmenu">
         <div class="nav1">
            <?php
            echo "WELCOME, " . $_SESSION['username'];
            ?>

            <span style="background-color: bisque; color:black; font-family:monospace; opacity: 0.9;">YOU LOGGED IN AT:<span id="jshere"></span></span>
         </div>
         <script>
            sessionStorage = window.sessionStorage;
            if (!sessionStorage.getItem('date')) {
               sessionStorage.setItem('date', new Date().toLocaleTimeString());
            }

            currentdate = sessionStorage.getItem('date');
            document.getElementById("jshere").innerHTML = currentdate;
         </script>
         <div id="innernavmenu">
            <div class="maintype">
               <ul>
                  <li><a href="#coradmin1">ORDERS</a></li>
                  <li><a href="#coradmin2">INFO & LOGISTICS</a></li>
                  <li><a href="#coradmin3">FEEDBACK & STAFFS</a></li>
               </ul>
            </div>
            <div class="others">
               <a href="adminprofile.php" target="_self" title="YOUR PROFILE">
                  <i class="fa-solid fa-user-secret"></i>
               </a>
               <a href="adminlogout.php" target="_self" title="LOG OUT">
                  <i class="fa-solid fa-right-from-bracket"></i>
               </a>
            </div>
         </div>
      </div>
   </div>
   <br>
   <div class="background1">
      <div id="coradmin1">
         <div id="admin1">
            DATA DASHBOARD - ORDERS
         </div>
      </div>
      <br>
      <div id="outerborder">
         <div class="layout1">
            <table border="2" cellspacing="2" cellpadding="2">
               <tr>
                  <th>Order_ID</th>
                  <th>Product_ID</th>
                  <th>Product_Name</th>
                  <th>User_ID</th>
                  <th>User_Name</th>
                  <th>Quantity</th>
                  <th>Total Price</th>
                  <th>Date</th>
                  <th>Time</th>
               </tr>
               <?php
               $sql = "SELECT * FROM admin_orders ORDER BY order_id DESC LIMIT 6";
               $result = $conn->query($sql);
               if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                     echo "<tr>
 <td>{$row['order_id']}</td>
 <td>{$row['product_id']}</td>
 <td>{$row['product_name']}</td>
 <td>{$row['user_id']}</td>
 <td>{$row['username']}</td>
 <td>{$row['quantity']}</td>
 <td>{$row['total_price']}</td>
 <td>{$row['order_date']}</td>
 <td>{$row['order_time']}</td>

 </tr>";
                  }
               }
               ?>


            </table>
         </div>
      </div>

      <div class="count">
         <div id="countbox">
            <br>
            <i class="fa-solid fa-comments-dollar" style="color: #000000;"></i>
            <br>
            <br>
            <p style="font-family: Georgia, 'Times New Roman', Times, serif; color: black; font-weight: bold; font-size: 22px;">
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Net Sales
                  <br>
                  <br>
                  <?php
                  $sql = "SELECT COUNT(quantity) FROM order_details";
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                     while ($row = $result->fetch_assoc()) {
                        echo "{$row['COUNT(quantity)']}";
                     }
                  }
                  ?>
               </span>
            </p>
            </i>
         </div>
         <div id="countbox">
            <br>
            <i class="fa-solid fa-receipt" style="color: #000000;"></i>
            <br>
            <br>
            <p style="font-family: Georgia, 'Times New Roman', Times, serif; color: black; font-weight: bold; font-size: 22px;">
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Total Orders Taken
                  <br>
                  <br>
                  <?php
                  $sql = "SELECT COUNT(order_id) FROM orders";
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                     while ($row = $result->fetch_assoc()) {
                        echo "{$row['COUNT(order_id)']}";
                     }
                  }
                  ?>
               </span>
            </p>
            </i>
         </div>
         <div id="countbox">
            <br>
            <i class="fa-solid fa-id-card" style="color: #000000;"></i>
            <br>
            <br>
            <p style="font-family: Georgia, 'Times New Roman', Times, serif; color: black; font-weight: bold; font-size: 22px;">
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Registered Users
                  <br>
                  <br>
                  <?php
                  $sql = "SELECT COUNT(user_id) FROM users
    WHERE role_id=200";
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                     while ($row = $result->fetch_assoc()) {
                        echo "{$row['COUNT(user_id)']}";
                     }
                  }
                  ?>
               </span>
            </p>
            </i>
         </div>
         <div id="countbox">
            <br>
            <i class="fa-solid fa-burger" style="color: #000000;"></i>
            <br>
            <br>
            <p style="font-family: Georgia, 'Times New Roman', Times, serif; color: black; font-weight: bold; font-size: 22px;">
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Total Items On Menu
                  <br>
                  <br>
                  <?php
                  $sql = "SELECT COUNT(product_id) FROM menu";
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                     while ($row = $result->fetch_assoc()) {
                        echo "{$row['COUNT(product_id)']}";
                     }
                  }
                  ?>
               </span>
            </p>
            </i>
         </div>
         <div id="countbox">
            <br>
            <i class="fa-solid fa-people-line" style="color: #000000;"></i>
            <br>
            <br>
            <p style="font-family: Georgia, 'Times New Roman', Times, serif; color: black; font-weight: bold; font-size: 22px;">
               <span style="background-color: bisque; color:black;">
                  Current Working Staffs
                  <br>
                  <br>
                  11
               </span>
            </p>
            </i>
         </div>
      </div>
   </div>

   <br>
   <div class="background2">
      <div id="coradmin2">
         <div id="admin2">
            DATA DASHBOARD - INFO & LOGISTICS
         </div>
      </div>
      <br>
      <br>
      <div id="userproductborder">
         <div class="layout2">
            <table border="1" cellspacing="1" cellpadding="1">
               <tr>
                  <th>Username</th>
                  <th>Name</th>
                  <th>Program</th>
                  <th>Orders made</th>
                  <th>Contact number</th>
                  <th>Email</th>
               </tr>
               <?php
               $sql = "SELECT * FROM admin_user ORDER BY username DESC LIMIT 14";
               $result = $conn->query($sql);
               if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                     echo "<tr>
 <td>{$row['username']}</td>
 <td>{$row['Full_Name']}</td>
 <td>{$row['program']}</td>
 <td>{$row['Orders_Made']}</td>
 <td>{$row['contact_number']}</td>
 <td>{$row['email']}</td>
 </tr>";
                  }
               }
               ?>

            </table>
         </div>
         <br>
         <br>
         <br>
         <div class="layout3">
            <table border="1" cellspacing="1" cellpadding="1">
               <tr>
                  <th>Product_ID</th>
                  <th>Product_Name</th>
                  <th>Units sold</th>
                  <th>Revenue generated</th>
               </tr>
               <?php
               $sql = "SELECT * FROM admin_product ORDER BY product_id DESC LIMIT 19";
               $result = $conn->query($sql);
               if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                     echo "<tr>
 <td>{$row['product_id']}</td>
 <td>{$row['product_name']}</td>
 <td>{$row['Units_Sold']}</td>
 <td>{$row['Total_Revenue']}</td>
 </tr>";
                  }
               }
               ?>


            </table>
         </div>
      </div>
   </div>

   <br>
   <div class="background3">
      <div id="coradmin3">
         <div id="admin3">
            DATA DASHBOARD - FEEDBACK & STAFF
         </div>
      </div>
      <br>
      <div id="feedbackborder">
         <div class="layout4">
            <table border="1" cellspacing="1" cellpadding="1">
               <tr>
                  <th>User_ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Category</th>
                  <th>Feedback</th>
               </tr>
               <?php
               $sql = "SELECT * FROM admin_feedback ORDER BY user_id DESC LIMIT 9";
               $result = $conn->query($sql);
               if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                     echo "<tr>
 <td>{$row['user_id']}</td>
 <td>{$row['Full_Name']}</td>
 <td>{$row['email']}</td>
 <td>{$row['feedback_category']}</td>
 <td>{$row['feedback_description']}</td>

 </tr>";
                  }
               }
               ?>


            </table>
         </div>
      </div>
      <br>
      <br>
      <div id="staffborder">
         <div class="layout5">
            <table border="2" cellspacing="2" cellpadding="2">
               <tr>
                  <th>Employee_ID</th>
                  <th>Employee_Name</th>
                  <th>Contact_Number</th>
                  <th>Hired_date</th>
               </tr>
               <?php
               $sql = "SELECT * FROM employees";
               $result = $conn->query($sql);
               if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                     echo "<tr>
 <td>{$row['employee_id']}</td>
 <td>{$row['first_name']}</td>
 <td>{$row['contact_number']}</td>
 <td>{$row['hired_date']}</td>
 </tr>";
                  }
               }
               ?>

            </table>
         </div>

         <div class="layout6">
            <table border="2" cellspacing="2" cellpadding="1">
               <tr>
                  <th>Chef_ID</th>
                  <th>Chef_Name</th>
                  <th>Contact_Number</th>
                  <th>Hired_date</th>
               </tr>
               <?php
               $sql = "SELECT * FROM chef";
               $result = $conn->query($sql);
               if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                     echo "<tr>
 <td>{$row['chef_id']}</td>
 <td>{$row['first_name']}</td>
 <td>{$row['contact_number']}</td>
 <td>{$row['hired_date']}</td>
 </tr>";
                  }
               }
               ?>

            </table>
         </div>
      </div>
   </div>
</body>

</html>