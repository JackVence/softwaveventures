<?php
session_start();
     
include("connection.php");
include("function.php");

$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="index.css">
    <!-- boxicons-->
    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <!-- navbar -->
<header>
        <!-- menu icon-->
        <div class="bx bx-menu" id="menu-icon"></div>
        <a href="signup.html" class="logo"><i class='bx bxs-home-smile'></i>Softwave</a>
        <!-- nav list-->
        <ul class="navbar">
            <li><a href="#home" class="home-active">Dashboard</a></li>
            <li><a href="dashboard2.html">Deposit</a></li>
            <li><a href="#Withdraw">Withdraw</a></li>
            <li><a href="#Surveys">Surveys</a></li>
            <li><a href="#Blogs">Blogs</a></li>
            <li><a href="#Games">Games</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        <!--profile-->
        <div class="profile">
            <img src="profile.jpg" alt="">
            <span><?php echo $user_data['user_name'];?></span>
            <div class='bx bx-caret-down' id="caret"></div>
        </div>
    </header>
    <!--Home-->
<div class="heading">
    <h3>Welcome back mate</h3>
</div>
<!--referral box-->
<div class="card-container">
 <h3 class="main--title">Welcome back </span><?php echo $user_data['user_name'];?><br>This is your data</h3>
  <div class="card--wrapper">
    <div class="payment--card light-red">
     <div class="card--header">
      <div class="amount">
        <span class="title"><b>TOTAL BALANCE</b></span>
        <span class="amount-value"><b>KES1000</b></span>
      </div>
      <i class='bx bx-dollar' ></i>
     </div>
     <span class="card-detail">**** **** **** 3529</span>
    </div>

    <div class="payment--card light-purple">
      <div class="card--header">
       <div class="amount">
         <span class="title"><b>REFERRAL EARNINGS</b></span>
         <span class="amount-value"><b>KES1000</b></span>
       </div>
       <i class='bx bx-dollar' ></i>
      </div>
      <span class="card-detail">**** **** **** 3529</span>
     </div>
     
     <div class="payment--card light-green">
      <div class="card--header">
       <div class="amount">
         <span class="title"><b>SURVEY EARNINGS</b></span>
         <span class="amount-value"><b>KES1000</b></span>
       </div>
       <i class='bx bx-dollar' ></i>
      </div>
      <span class="card-detail">**** **** **** 3529</span>
     </div>

     <div class="payment--card light-blue">
      <div class="card--header">
       <div class="amount">
         <span class="title"><b>GAME EARNINGS</b></span>
         <span class="amount-value"><b>KES1000</b></span>
       </div>
       <i class='bx bx-dollar' ></i>
      </div>
      <span class="card-detail">**** **** **** 3529</span>
     </div>

     <div class="payment--card light-yellow">
      <div class="card--header">
       <div class="amount">
         <span class="title"><b>TOTAL WITHDRAWALS</b></span>
         <span class="amount-value"><b>KES1000</b></span>
       </div>
       <i class='bx bx-dollar' ></i>
      </div>
      <span class="card-detail">**** **** **** 3529</span>
     </div>
  </div>
</div>
<div class="payment--card" id="referral">
  <div class="card--header">
   <div class="amount">
     <span class="title"><b>Your referral link</b></span><br><br><br>
     <span class="amount-value"><b>https://softwaveventures.co.ke/index.php?ref=<?php echo $user_data['user_name'];?></b></span>
   </div>
 </div>
</div>
<!--graph-->
<div class="payment--card" id="graph">
  <div class="card--header">
   <div class="amount">
     <span class="title"><b>Weekly Analysis</b></span>
     <span class="amount-value"><b>KES1,000,000</b></span>
   </div>
   <i class='bx bx-dollar' ></i>
  </div>
  <img src="graph.jpg" id="graphpic">
 </div>
</div>
    <!--footer-->
<div>
 <section class="footer" id="footer">
        <div class="footer-box">
            <a href="#" id="home" class="logo"><i class='bx bxs-home-smile'></i>Softwave</a>
            <p>Find us on social media websites below</p>
            <div class="social">
                <a href="https://www.facebook.com/profile.php?id=100088955243827&mibextid=ZbWKwL"><i class='bx bxl-facebook'></i></a>
                <a href="https://x.com/JackVence3?t=tc5mbgFW1umkJR73noIFpw&s=09"><i class='bx bxl-twitter'></i></a>
                <a href="https://www.instagram.com/jackvence.254?igsh=YzljYTk1ODg3Zg=="><i class='bx bxl-instagram'></i></a>
                <a href="https://www.youtube.com/@jack-vence8990"><i class='bx bxl-youtube'></i></a>
                <a href="https://chat.whatsapp.com/BxNs0d0Uqh5JsXLMNgMswf"><i class='bx bxl-whatsapp'></i></a>
            </div>
        </div>
 </section>
</div>
<!--copyright-->
<copyright class="copyright">
  <p>Softwave © 2024</p>
</copyright>

    <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!--kink to js-->
    <script src="main.js"></script>
</body>
</html>