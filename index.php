<?php
session_start();
include "server.php";
 if(isset($_POST['login'])){
   $email=$_POST['email'];
   $pass=$_POST['password'];
   $sql = "select * from  `user` where email='$email' and password='$pass'";
   $query_run = mysqli_query($conn,$sql);
   if(mysqli_num_rows($query_run)>0){
     $_SESSION['email']=$email;
     $_SESSION['showlogin']=1;
     header("Location: user_dashboard.php");
   }
    else{
     echo "<script>alert('Please Enter correct email id and password ');

     </script>";
   }
 }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Digital Notice Board </title>
    <!--- Bootstrap files-->
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <script src="bootstrap-4.4.1-dist/js/bootstrap.min.js" charset="utf-8"></script>

    </script>
    <style>body{
      background-image:url("image/1.jpg");
      background-repeat: no-repeat;
      background-size: cover;
    }</style>
    <!-- CSS file --->
    <link rel="stylesheet"href="css/style.css">
  </head>
  <body>
    <!-- Header code -->
    <div class="row" id="header">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
        <h3>Digital Notice Board</h3>
      </div>
      <div class="col-md-4">
      </div>
    </div>
    <!-- Login code-->
    <section id="Login_form">
      <div class="row">
        <div class="col-md-4 m-auto block">
          <center><h4>Login Form </h4></center>
          <form  action="index.php" method="post">
            <div class="form-group">
              <label><b><font color ="Dark Red">Email ID:</font></b></lable>
                <input class="form-control" type="text" name="email" placeholder="Enter Your Email">
          </div>
          <div class="form-group">
            <label><b><font color ="White">Password:</font></b></lable>
              <input class="form-control" type="Password" name="password" placeholder="Enter Your Password">
          </div>
          <button class="btn btn-primary" type="Submit" name="login">Login</button>
          </form>
          <a href="register.php"><b><font color ="black"> Click here to register </font> </b></a>
        </div>
        </div>
    </section>
  </body>
</html>
