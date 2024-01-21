<?php
session_start();
     
include("connection.php");
include("function.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
 {
    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if( !empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
        //read from database
        $query = "select * from watu where user_name = '$user_name' limit 1";

        $result = mysqli_query($con, $query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
          {

            $user_data = mysqli_fetch_assoc($result);
            if($user_data['password'] === $password)
            {
                $_SESSION['user_id'] = $user_data['user_id'];
                header("Location: index.php");
                 die;
            }
          }
        }
        echo "wrong username or password";
    }else
    {
        echo "wrong username or password";
    }
 }


?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="signup.css">
    <title>Login</title>
</head>
<body>
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
    font-size: 15px;
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
<!--login form-->
<div>
 <h1><b>SOFTWAVE VENTURES</b></h1>
  <p>Welcome back Mate</p>
  <div class="login-box">
    <h2><b>Login To Your Acount</b></h2>
    <form method="post">
    <label for="username"><b>USERNAME:</b></label>
      <input name="user_name" type="text"><br>
      <label for="password"><b>CREATE PASSWORD:</b></label>
      <input name="password" type="password"><br><br>
      <button id="button" value="Login" type="submit">Login</button>
      <p id="p2">You don't have an account?<br><a href="signup.php">Signup Here</a></p>
    </form>
  </div>
</div>
</body>
</html>