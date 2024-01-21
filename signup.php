<?php
session_start();
     
    include("connection.php");
    include("function.php");
   
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $f_name = $_POST['f_name'];
        $l_name = $_POST['l_name'];
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            //save to database
            $user_id = random_num(20);
            $query = "insert into watu (user_id,f_name,l_name,user_name,password,email) values ('$user_id','$f_name','$l_name','$user_name','$password','$email')";

            mysqli_query($con, $query);

            header("Location: login.php");
            die;
        }else{
            echo "Please fill out the required fields to proceed!";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>SIGNUP/PAGE</title>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/002b7790e1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="signup.css">
    <META name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<!--style-->
<style type="text/css">
     {
    margin: 0;
    padding: 0;
    font-family: 'Courier New', Courier, monospace;
     }
     body{
    background: linear-gradient(rgb(124, 204, 124),rgb(79, 79, 199));
    background-repeat: no-repeat;
    background-attachment: fixed;
     }
     h1{
    color: red;
    margin-bottom: 30px;
    padding-top: 15px;
    margin-top: 50px;
    text-align: center;
    text-shadow: 5px 5px 10px rgb(122, 122, 204);
    box-shadow: 5px 5px 5px black;
    width: 370px;
    margin-left: auto;
    margin-right: auto;
     }
     p{
    text-align: center;
    margin-bottom: 30px;
     }
     .signup-box{
    background-image: url("softwaveventures2.jpg");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    margin-left: auto;
    margin-right: auto;
    border-style: none;
    width: 370px;
    height: 760px;
    padding: 5px;
    text-align: center;
     }
     .login-box{
    background-image: url("softwaveventures2.jpg");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    margin-left: auto;
    margin-right: auto;
    border-style: none;
    width: 370px;
    height: 500px;
    padding: 5px;
    text-align: center;
     }
     form{
    width: 300px;
    margin-left: 25px;
    text-align: center;
     }
     form label{
    display: flex;
    margin-top: 40px;
    font-size: 18px;
    text-align: center;
     }
     form input{
    width: 100%;
    padding: 8px;
    border: 1px solid gray;
    border-radius: 6px;
    outline: none;
    background-color: rgb(176, 207, 207);
    justify-content:center;
     }
     a:link{
    color: yellow;
     }
     form button{
    margin-top: 40px;
    text-align: center;
    margin-bottom: 40px;
    width: 105%;
    margin-left: auto;
    margin-right: auto;
    height: 30px;
    text-decoration: none;
    background-color: black;
    color:white;
     }
     #p2{
    color: yellowgreen;
     }
     .connect{
    margin-left: auto;
    margin-right: auto;
    border-style: none;
    width: 370px;
    height: 200px;
    padding: 5px;
    text-align: center;
    margin-top: 20px;
    margin-bottom: 20px;
     }
     .connect a{
    display: block;
    width: 296px;
    margin: auto;
    color: aquamarine;
    font-size: 14px;
    padding: 15px 30px;
    text-decoration: none;
     }
     .connect i{
    font-size: 18px;
    margin-right: 10px;
    color: white;
     }
     .fb-link{
    background: blue;
     }
     .tw-link{
    background: black;
     }
     .g-link{
    background: #f81717;
     }
</style>
<body>
<!--signup form-->
<div>
 <h1><b>SOFTWAVE VENTURES</b></h1>
  <p>It only takes a minute to sign up</p>
  <div class="signup-box">
    <h2><b>Create Your Acount</b></h2>
    <form  method="post">
      <label for="fname"><b>FIRST NAME:</b></label>
      <input name="f_name" type="text" placeholder="Jack"><br>
      <label for="lname"><b>LAST NAME:</b></label>
      <input name="l_name" type="text" placeholder="Vence"><br>
      <label for="username"><b>USERNAME:</b></label>
      <input name="user_name" type="text" placeholder="JackVence"><br>
      <label for="password"><b>CREATE PASSWORD:</b></label>
      <input name="password" type="password" placeholder="Create Password"><br>
      <label for="email"><b>YOUR EMAIL:</b></label>
      <input name="email" type="email" placeholder="jackvence04@gmail.com"><br>
      <label for="referrer"><b>REFERRER:</b></label>
      <input name="referrer" type="text" placeholder="Jack"><br>
      <button id="button" value="Login" type="submit">Sign Up</button>
      <p id="p2">Already have an account?<br><a href="login.php">Login Here</a></p>
    </form>
</div>
</body>
</html>