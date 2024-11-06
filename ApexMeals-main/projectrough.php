<?php

// echo "here"; die();
session_start();
include "dbconnection.php";

if (!isset($_SESSION['username'])) {

   header("Location: loginpractice.php");
}
?>
<!DOCTYPE html>
<html>

<head>
   <title>ApexMeals</title>
   <link rel="icon" type="image/png" href="FinalLogo.png">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="stylesheet" href="projectrough.css">
   </link>

   <script src="https://kit.fontawesome.com/addd88a3a0.js" crossorigin="anonymous"></script>
   <script>
      function addToCart(product) {
         window.alert(product+" has been added to your cart!");
      }
   </script>
</head>

<body>

   <div id="one">
      <div id="main1">
         <div id="logo">
            <img src="FinalLogo.png" alt="logo" width="90" height="80">
         </div>

         <div id="mainnav">
            <div class="nav">
               <ul>
                  <li><a href="#one">HOME</a></li>
                  <li><a href="#headmenu">MENU</a></li>
                  <li><a href="#three">REVIEWS</a></li>
                  <li><a href="#four">ABOUT US</a></li>
               </ul>
            </div>

            <div class="others">
               <a href="userprofile.php" target="_self" title="YOUR PROFILE">
                  <i class="fa-solid fa-user-tie"></i>
               </a>
               <a href="userfeedback.php" target="_self" title="YOUR FEEDBACK">
                  <i class="fa-solid fa-message"></i>
               </a>
               <a href="logout.php" target="_self" title="LOG OUT">
                  <i class="fa-solid fa-right-to-bracket"></i>
               </a>
            </div>
         </div>
      </div>
      <br>
      <br>
      <br>
      <br>
      <div class="video">
         <video autoplay loop>
            <source src="Clipforproject.mp4">
         </video>
      </div>
   </div>
   <br>

   <div id="headmenu">
      <div id="innerheadmenu">
         <div class="menunav1">
            MENU
         </div>
         <div id="innernavmenu">
            <div class="menunav2">
               <ul>
                  <li class="listborder"><a href="#two1">COMBO</a></li>
                  <li class="listborder"><a href="#two2">FAST FOOD</a></li>
                  <li class="listborder"><a href="#two3">BREAKFAST</a></li>
                  <li class="listborder"><a href="#two4">DRINKS</a></li>
                  <li class="listborder"><a href="#two5">DESSERT</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <br>
   <div id="two1">
      <div id="cormenumain1">
         <div id="menumain1">
            COMBO MEAL
         </div>
      </div>

      <br>
      <br>
      <div id="menu">
         <div class="doublebox">
            <img src="two.jpg" alt="item1">
            <img src="sixteen.jpg" alt="item1">
            <br>
            <p style="font-family: Georgia, 'Times New Roman', Times, serif; color: black; font-weight: bold; font-size: 22px;">
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Checken Burger and Mango juice
                  <br>
                  Rs. 210
               </span>
            </p>
            <button onclick="addToCart('Combo1')">Add to cart</button>
         </div>
         <div class="doublebox">
            <img src="three.jpg" alt="item1">
            <img src="eighteen.jpg" alt="item1">
            <br>
            <p style="font-family: Georgia, 'Times New Roman', Times, serif; color: black; font-weight: bold; font-size: 22px;">
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Pork dumplings and Coca-Cola
                  <br>
                  Rs. 160
               </span>
            </p>
            <button onclick="addToCart('Combo2')">Add to cart</button>
         </div>
         <div class="doublebox">
            <img src="eleven.jpg" alt="item1">
            <img src="thirteen.jpg" alt="item1">
            <br>
            <p style="font-family: Georgia, 'Times New Roman', Times, serif; color: black; font-weight: bold; font-size: 22px;">
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Bacon sandwich and Strawberry smoothie
                  <br>
                  Rs. 250
               </span>
            </p>
            <button onclick="addToCart('Combo3')">Add to cart</button>
         </div>
         <div class="doublebox">
            <img src="seven.jpg" alt="item1">
            <img src="twentythree.jpg" alt="item1">
            <br>
            <p style="font-family: Georgia, 'Times New Roman', Times, serif; color: black; font-weight: bold; font-size: 22px;">
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Pancakes and Blueberry pie
                  <br>
                  Rs. 200
               </span>
            </p>
            <button onclick="addToCart('Combo4')">Add to cart</button>
         </div>
      </div>
   </div>

   <br>

   <div id="two2">
      <div id="cormenumain2">
         <div id="menumain2">
            FAST FOOD
         </div>
      </div>

      <br>
      <br>
      <div id="menu">
         <div class="box">
            <img src="one.jpg" alt="item1">
            <br>
            <p style="font-family: Georgia, 'Times New Roman', Times, serif; color: black; font-weight: bold; font-size: 22px;">
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Spaghetti Bolognese
                  <br>
                  Rs. 120
               </span>
            </p>
            <button onclick="addToCart('Spaghetti Bolognese')">Add to cart</button>
         </div>
         <div class="box">
            <img src="two.jpg" alt="item1">
            <br>
            <p style="font-family: Georgia, 'Times New Roman', Times, serif; color: black; font-weight: bold; font-size: 22px;">
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Chicken Burger
                  <br>
                  Rs. 180
               </span>
            </p>
            <button onclick="addToCart('Chicken Burger')">Add to cart</button>
         </div>
         <div class="box">
            <img src="three.jpg" alt="item1">
            <br>
            <p style="font-family: Georgia, 'Times New Roman', Times, serif; color: black; font-weight: bold; font-size: 22px;">
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Pork dumplings
                  <br>
                  Rs. 120
               </span>
            </p>
            <button onclick="addToCart('Pork dumplings')">Add to cart</button>
         </div>
         <div class="box">
            <img src="four.jpg" alt="item1">
            <br>
            <p style="font-family: Georgia, 'Times New Roman', Times, serif; color: black; font-weight: bold; font-size: 22px;">
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Veg friedrice
                  <br>
                  Rs. 100
               </span>
            </p>
            <button onclick="addToCart('Veg friedrice')">Add to cart</button>
         </div>
         <div class="box">
            <img src="five.jpg" alt="item1">
            <br>
            <p style="font-family: Georgia, 'Times New Roman', Times, serif; color: black; font-weight: bold; font-size: 22px;">
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Hot Dog
                  <br>
                  Rs. 100
               </span>
            </p>
            <button onclick="addToCart('Hot Dog')">Add to cart</button>
         </div>
         <div class="box">
            <img src="six.jpg" alt="item1">
            <br>
            <p style="font-family: Georgia, 'Times New Roman', Times, serif; color: black; font-weight: bold; font-size: 22px;">
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Neapolitan pizza
                  <br>
                  Rs. 260
               </span>
            </p>
            <button onclick="addToCart('Neapolitan pizza')">Add to cart</button>
         </div>
      </div>
   </div>

   <br>

   <div id="two3">
      <div id="cormenumain3">
         <div id="menumain3">
            BREAKFAST
         </div>
      </div>

      <br>
      <br>
      <div id="menu">
         <div class="box">
            <img src="seven.jpg" alt="item1">
            <br>
            <p style="font-family: Georgia, 'Times New Roman', Times, serif; color: black; font-weight: bold; font-size: 22px;">
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Pancakes
                  <br>
                  Rs. 80
               </span>
            </p>
            <button onclick="addToCart('Pancakes')">Add to cart</button>
         </div>
         <div class="box">
            <img src="eight.jpg" alt="item1">
            <br>
            <p style="font-family: Georgia, 'Times New Roman', Times, serif; color: black; font-weight: bold; font-size: 22px;">
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Waffles
                  <br>
                  Rs. 90
               </span>
            </p>
            <button onclick="addToCart('Waffles')">Add to cart</button>
         </div>
         <div class="box">
            <img src="nine.jpg" alt="item1">
            <br>
            <p style="font-family: Georgia, 'Times New Roman', Times, serif; color: black; font-weight: bold; font-size: 22px;">
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Chicken Sausages
                  <br>
                  Rs. 120
               </span>
            </p>
            <button onclick="addToCart('Chicken Sausages')">Add to cart</button>
         </div>
         <div class="box">
            <img src="ten.jpg" alt="item1">
            <br>
            <p style="font-family: Georgia, 'Times New Roman', Times, serif; color: black; font-weight: bold; font-size: 22px;">
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Oat cereals
                  <br>
                  Rs. 80
               </span>
            </p>
            <button onclick="addToCart('Oat cereals')">Add to cart</button>
         </div>
         <div class="box">
            <img src="eleven.jpg" alt="item1">
            <br>
            <p style="font-family: Georgia, 'Times New Roman', Times, serif; color: black; font-weight: bold; font-size: 22px;">
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Bacon Sandwich
                  <br>
                  Rs. 180
               </span>
            </p>
            <button onclick="addToCart('Bacon Sandwich')">Add to cart</button>
         </div>
         <div class="box">
            <img src="twelve.jpg" alt="item1">
            <br>
            <p style="font-family: Georgia, 'Times New Roman', Times, serif; color: black; font-weight: bold; font-size: 22px;">
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  American styled breakfast
                  <br>
                  Rs. 250
               </span>
            </p>
            <button onclick="addToCart('American styled breakfast')">Add to cart</button>
         </div>
      </div>
   </div>

   <br>
   <div id="two4">
      <div id="cormenumain4">
         <div id="menumain4">
            DRINKS
         </div>
      </div>

      <br>
      <br>
      <div id="menu">
         <div class="box">
            <img src="thirteen.jpg" alt="item1">
            <br>
            <p style="font-family: Georgia, 'Times New Roman', Times, serif; color: black; font-weight: bold; font-size: 22px;">
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Strawberry smoothie
                  <br>
                  Rs. 100
               </span>
            </p>
            <button onclick="addToCart('Strawberry smoothie')">Add to cart</button>
         </div>
         <div class="box">
            <img src="fourteen.jpg" alt="item1">
            <br>
            <p style="font-family: Georgia, 'Times New Roman', Times, serif; color: black; font-weight: bold; font-size: 22px;">
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Chocolate milkshake
                  <br>
                  Rs. 100
               </span>
            </p>
            <button onclick="addToCart('Chocolate milkshake')">Add to cart</button>
         </div>
         <div class="box">
            <img src="fifteen.jpg" alt="item1">
            <br>
            <p style="font-family: Georgia, 'Times New Roman', Times, serif; color: black; font-weight: bold; font-size: 22px;">
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Lemonade
                  <br>
                  Rs. 50
               </span>
            </p>
            <button onclick="addToCart('Lemonade')">Add to cart</button>
         </div>
         <div class="box">
            <img src="sixteen.jpg" alt="item1">
            <br>
            <p style="font-family: Georgia, 'Times New Roman', Times, serif; color: black; font-weight: bold; font-size: 22px;">
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Mango juice
                  <br>
                  Rs. 60
               </span>
            </p>
            <button onclick="addToCart('Mango juice')">Add to cart</button>
         </div>
         <div class="box">
            <img src="seventeen.jpg" alt="item1">
            <br>
            <p style="font-family: Georgia, 'Times New Roman', Times, serif; color: black; font-weight: bold; font-size: 22px;">
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Carrot juice
                  <br>
                  Rs. 60
               </span>
            </p>
            <button onclick="addToCart('Carrot juice')">Add to cart</button>
         </div>
         <div class="box">
            <img src="eighteen.jpg" alt="item1">
            <br>
            <p style="font-family: Georgia, 'Times New Roman', Times, serif; color: black; font-weight: bold; font-size: 22px;">
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Coca-Cola
                  <br>
                  Rs. 70
               </span>
            </p>
            <button onclick="addToCart('Coca-Cola')">Add to cart</button>
         </div>
      </div>
   </div>

   <br>

   <div id="two5">
      <div id="cormenumain5">
         <div id="menumain5">
            DESSERT
         </div>
      </div>

      <br>
      <br>
      <div id="menu">
         <div class="box">
            <img src="nineteen.jpg" alt="item1">
            <br>
            <p style="font-family: Georgia, 'Times New Roman', Times, serif; color: black; font-weight: bold; font-size: 22px;">
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Custard pudding
                  <br>
                  Rs. 80
               </span>
            </p>
            <button onclick="addToCart('Custard pudding')">Add to cart</button>
         </div>
         <div class="box">
            <img src="twenty.jpg" alt="item1">
            <br>
            <p style="font-family: Georgia, 'Times New Roman', Times, serif; color: black; font-weight: bold; font-size: 22px;">
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Cheese cake
                  <br>
                  Rs. 80
               </span>
            </p>
            <button onclick="addToCart('Cheese cake')">Add to cart</button>
         </div>
         <div class="box">
            <img src="twentyone.jpg" alt="item1">
            <br>
            <p style="font-family: Georgia, 'Times New Roman', Times, serif; color: black; font-weight: bold; font-size: 22px;">
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Ice-cream
                  <br>
                  Rs. 60
               </span>
            </p>
            <button onclick="addToCart('Ice-cream')">Add to cart</button>
         </div>
         <div class="box">
            <img src="twentytwo.jpg" alt="item1">
            <br>
            <p style="font-family: Georgia, 'Times New Roman', Times, serif; color: black; font-weight: bold; font-size: 22px;">
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Tiramisu
                  <br>
                  Rs. 120
               </span>
            </p>
            <button onclick="addToCart('Tiramisu')">Add to cart</button>
         </div>
         <div class="box">
            <img src="twentythree.jpg" alt="item1">
            <br>
            <p style="font-family: Georgia, 'Times New Roman', Times, serif; color: black; font-weight: bold; font-size: 22px;">
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Blueberry pie
                  <br>
                  Rs. 150
               </span>
            </p>
            <button onclick="addToCart('Blueberry pie')">Add to cart</button>
         </div>
         <div class="box">
            <img src="twentyfour.jpg" alt="item1">
            <br>
            <p style="font-family: Georgia, 'Times New Roman', Times, serif; color: black; font-weight: bold; font-size: 22px;">
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Cupcakes
                  <br>
                  Rs. 50
               </span>
            </p>
            <button onclick="addToCart('Cupcakes')">Add to cart</button>
         </div>
      </div>
   </div>

   <br>
   <div id="two6">
      <div id="cormenumain6">
         <div id="menumain6">
            NUTRITION CHART
         </div>
      </div>

      <br>
      <br>
      <div id="chartmenu">
         <div class="chartbox">
            <h2><span style="background-color: lightsalmon; color:black; opacity: 0.9;">FAST FOOD <i class="fa-solid fa-burger"></i></span></h2>
            <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: black; font-weight: bold; font-size: 25px;">
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Spaghetti Bolognese =></span> Serving-size:2, Calories:260, Fat:22gm, Carb:47gm, Protein:16gm
               <br>
               <br>
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Chicken Burger =></span> Serving-size:1, Calories:283, Fat:16gm, Carb:21gm, Protein:13gm
               <br>
               <br>
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Pork Dumplings =></span> Serving-size:2, Calories:80, Fat:8gm, Carb:25gm, Protein:10gm
               <br>
               <br>
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Veg friedrice =></span> Serving-size:2, Calories:202, Fat:14gm, Carb:31gm, Protein:6gm
               <br>
               <br>
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Hot Dog =></span> Serving-size:1, Calories:290, Fat:26gm, Carb:4.2gm, Protein:10gm
               <br>
               <br>
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Neapolitan pizza =></span> Serving-size:2, Calories:700, Fat:1gm, Carb:108gm, Protein:62gm
            </p>
         </div>
         <div class="chartbox">
            <h2><span style="background-color: lightsalmon; color:black; opacity: 0.9;">BREAKFAST <i class="fa-solid fa-mug-saucer"></i></span></h2>
            <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: black; font-weight: bold; font-size: 24px;">
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Pancakes =></span> Serving-size:2, Calories:227, Fat:10gm, Carb:28gm, Protein:6gm
               <br>
               <br>
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Waffles =></span> Serving-size:1, Calories:291, Fat:14gm, Carb:33gm, Protein:8gm
               <br>
               <br>
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Chicken Sausages =></span> Serving-size:2, Calories:180, Fat:10gm, Carb:2.5gm, Protein:18.7gm
               <br>
               <br>
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Oat cereals =></span> Serving-size:1, Calories:307, Fat:3gm, Carb:21gm, Protein:10.7gm
               <br>
               <br>
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Bacon Sandwich =></span> Serving-size:2, Calories:341, Fat:16gm, Carb:28gm, Protein:16gm
               <br>
               <br>
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  American styled breakfast =></span> Serving-size:2, Calories:515, Fat:20gm, Carb:22gm, Protein:20gm
            </p>
         </div>
         <div class="chartbox">
            <h2><span style="background-color: lightsalmon; color:black; opacity: 0.9;">DRINKS <i class="fa-solid fa-wine-bottle"></i></span></h2>
            <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: black; font-weight: bold; font-size: 20px;">
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Mango Juice =></span> Serving-size:1, Calories:128, Fat:0.2gm, Carb:42gm, Protein:0.3gm
               <br>
               <br>
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Carrot Juice =></span> Serving-size:1, Calories:39, Fat:0.2gm, Carb:9gm, Protein:1gm
               <br>
               <br>
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Coca-Cola =></span> Serving-size:1, Calories:139, Fat:0gm, Carb:10gm, Protein:0.1gm
               <br>
               <br>
            </p>
            <h2><span style="background-color: lightsalmon; color:black; opacity: 0.9;">DESSERT <i class="fa-solid fa-ice-cream"></i></span></h2>
            <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: black; font-weight: bold; font-size: 20px;">
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Custard pudding =></span> Serving-size:1, Calories:195, Fat:4.5gm, Carb:10gm, Protein:0gm
               <br>
               <br>
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Cheese cake =></span> Serving-size:1, Calories:321, Fat:23gm, Carb:26gm, Protein:6gm
               <br>
               <br>
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Tiramisu =></span> Serving-size:1, Calories:600, Fat:46gm, Carb:0.8gm, Protein:28gm
               <br>
               <br>
               <span style="background-color: bisque; color:black; opacity: 0.9;">
                  Blueberry pie =></span> Serving-size:2, Calories:245, Fat:12gm, Carb:34gm, Protein:2.7gm
            </p>
         </div>
      </div>
   </div>

   <br>
   <div id="four">
      <div id="cormain4">
         <div id="main4">
            ABOUT US
         </div>
      </div>
      <br>
      <br>
      <div class="count">
         <div id="countbox">
            <br>
            <i class="fa-solid fa-handshake">
               <br>
               <br>
               <p style="font-family: Georgia, 'Times New Roman', Times, serif; color: black; font-weight: bold; font-size: 22px;">
                  <span style="background-color: bisque; color:black; opacity: 0.9;">
                     Orders Handled
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
            <i class="fa-solid fa-people-group">
               <br>
               <br>
               <p style="font-family: Georgia, 'Times New Roman', Times, serif; color: black; font-weight: bold; font-size: 22px;">
                  <span style="background-color: bisque; color:black; opacity: 0.9;">
                     Happy Customers
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
            <i class="fa-solid fa-bowl-food">
               <br>
               <br>
               <p style="font-family: Georgia, 'Times New Roman', Times, serif; color: black; font-weight: bold; font-size: 22px;">
                  <span style="background-color: bisque; color:black; opacity: 0.9;">
                     Orders Taken Per Day
                     <br>
                     <br>
                     <?php
                     $sql = "SELECT COUNT(order_id)/6 FROM orders";
                     $result = $conn->query($sql);
                     if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                           echo "{$row['COUNT(order_id)/6']}";
                        }
                     }
                     ?>
                  </span>
               </p>
            </i>
         </div>
         <div id="countbox">
            <br>
            <i class="fa-solid fa-star">
               <br>
               <br>
               <p style="font-family: Georgia, 'Times New Roman', Times, serif; color: black; font-weight: bold; font-size: 22px;">
                  <span style="background-color: bisque; color:black; opacity: 0.9;">
                     Customer Reviews
                     <br>
                     <br>
                     <?php
                     $sql = "SELECT COUNT(review_id) FROM review";
                     $result = $conn->query($sql);
                     if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                           echo "{$row['COUNT(review_id)']}";
                        }
                     }
                     ?>
                  </span>
               </p>
            </i>
         </div>
         <div id="countbox">
            <br>
            <i class="fa-solid fa-people-roof">
               <br>
               <br>
               <p style="font-family: Georgia, 'Times New Roman', Times, serif; color: black; font-weight: bold; font-size: 22px;">
                  <span style="background-color: bisque; color:black;">
                     Count Of Our Employees
                     <br>
                     <br>
                     <?php
                     $sql = "SELECT COUNT(employee_id) FROM employees";
                     $result = $conn->query($sql);
                     if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                           echo "{$row['COUNT(employee_id)']}";
                        }
                     }
                     ?>
                  </span>
               </p>
            </i>
         </div>
      </div>
      <br>
      <br>
      <div class="aboutus">
         <div id="infobox">
            Welcome to the vibrant university canteen, the <span style="background-color: bisque; color: black;">hub of delicious food</span> and campus
            mingling. Our canteen, which is centrally placed on campus, is a <span style="background-color: bisque; color: black;">well-liked gathering place
            </span> for instructors, staff, and students to interact while indulging in <span style="background-color: bisque; color: black;">tasty meals</span>
            and <span style="background-color: bisque; color: black;">engaging conversations.</span>
            <br>
            <br>
            As soon as you step in, you'll notice a <span style="background-color: bisque; color: black;">bustling atmosphere </span> the aroma of freshly prepared
            meals. Whether you're seeking for a <span style="background-color: bisque; color: black;">quiet place to study</span> or a busy table for
            <span style="background-color: bisque; color: black;">group chats</span>, the canteen offers a warm environment that encourages both academic and
            social engagement.
            <br>
            <br>
            With its <span style="background-color: bisque; color: black;">wonderful food</span>, <span style="background-color: bisque; color: black;">
               pleasant atmosphere</span>, and active social scene, our university canteen
            wants to be <span style="background-color: bisque; color: black;">more than just a place to get a lunch</span>.
         </div>
         <div id="infoimage">
            <img src="UniCanteen.jpg" alt="Photo" width="650" height="400">
         </div>
      </div>
   </div>
   <br>

   <div id="footer">
      <div id="foot">
         <img src="FinalLogo.png" alt="Logo" width="310" height="310">
         <div id="coroverall">
            <div class="overall">
               <a href="tel:+977 9865455939" target="_self">
                  <i class="fa-solid fa-phone"> (+977) 9865455939</i>
               </a>
               <br>
               <br>
               <a href="#" target="_self">
                  <i class="fa-solid fa-envelope"> apexcanteen@apexcollege.edu.np</i>
               </a>
               <br>
               <br>
               <i class="fa-solid fa-face-smile"> Open from 7AM to 5PM</i>
               <br>
               <br>
               <i class="fa-sharp fa-solid fa-location-dot"> Mid-Baneshwor, kathmandu</i>
               <br>
               <br>
               <hr style="border:2px solid black">
               <br>
               Link to our socials:
               <br>
               <br>
               <a href="https://www.facebook.com" target="_blank" style="margin-right: 20px;">
                  <i class="fa-brands fa-facebook"> Facebook</i>
               </a>
               <a href="https://www.instagram.com" target="_blank">
                  <i class="fa-brands fa-instagram"> Instagram</i>
               </a>
               <br>
               <br>
               <hr style="border:2px solid black">
               <br>
               &copy;: Copyright Reserved
            </div>
         </div>
      </div>
   </div>
</body>

</html>