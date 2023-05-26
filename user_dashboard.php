<?php
session_start();
if(!isset($_SESSION['email'])){
  header("Location: login.php");
}
if(isset($_POST['update_profile'])){
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"digital_notice_board");
  $query = "update user set fname='$_POST[fname]',lname='$_POST[lname]',email='$_POST[email]'
  ,password='$_POST[password]',branch='$_POST[branch]'where email = '$_SESSION[email]'";
  $query_run = mysqli_query($connection,$query);
  if($query_run){
    echo "<script type= 'text/javascript'>
    alert('Profile Updated Successfully');
    window.location.href = 'user_dashboard.php'
    </script>";
  }
  else {
    echo "<script type= 'text/javascript'>
    alert('Profile Not Updated ');
    window.location.href = 'user_dashboard.php'
    </script>";
  }
}
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
     <meta charset="utf-8">
     <title>Digital Notice Board </title>
     <!--- Bootstrap files-->
     <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
     <script src="bootstrap-4.4.1-dist/js/bootstrap.min.js" charset="utf-8"></script>
     <style>body{
       background-image:url("image/20.jpg");
       background-repeat: no-repeat;
       background-size: cover;
     }</style>
     </script>
     <!-- CSS file --->
     <link rel="stylesheet"href="css/style.css">
     <script src="jQuarry/jquery-3.6.4.js" charset="utf-8"></script>
     <script type="text/javascript">
       $(document).ready(function(){
         $("#edit_profile_button").click(function(){
           $("#main_content").load('edit_profile.php');
         });

       });

     </script>
   </head>
   <body>
     <?php
     if($_SESSION['showlogin']==1){
       echo "<script>
       const Toast = Swal.mixin({
   toast: true,
   position: 'top-end',
   showConfirmButton: false,
   timer: 3000,
   timerProgressBar: true,
   didOpen: (toast) => {
     toast.addEventListener('mouseenter', Swal.stopTimer)
     toast.addEventListener('mouseleave', Swal.resumeTimer)
   }
 })

 Toast.fire({
   icon: 'success',
   title: 'Signed in successfully'
 })
       </script>";
       $_SESSION['showlogin']=0;
     }
      ?>
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
     <br>
     <section id="container">
       <div class="row">
         <div class="col-md-2" id="left_sidebar">
           <img src="image/19.jpg"  class="img-rounded" width="200px" height="200px"></br><br>

           <button type="button" class="btn btn-primary btn-block" id="edit_profile_button">Edit Profile</button>
           <button type="button" class="btn btn-warning btn-block" id="view_notice_button">View All Notice</button>
           <button type="button" class="btn btn-success btn-block"><a href="logout.php">Logout</a></button>
         </div>
         <div class="col-md-8" id="main_content">
           <h2>Welcome to user Dashboard</h2>
           <p>
             This is the admin Dashboard page. Here admin can mangage notice board system.He can create
             notice, delete a notice amd all the replies of the notice. </p>
             <p>
               This is the admin Dashboard page. Here admin can manage notice board sysytem.He can create
               notice, delete a notice and all the replies of the notice. </p>
         </div>
     </section>
   </body>
 </html>
