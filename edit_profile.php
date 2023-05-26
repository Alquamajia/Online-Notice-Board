<?php
  session_start();
  include "server.php";
     $email=$_SESSION['email'];
     $fname = "";
     $lname = "";
     $email = "";
     $password = "";
     $class = "";
     $sql = "select * from  `user` where email='$email'";
     $query_run = mysqli_query($conn,$sql);
     while($row = mysqli_fetch_assoc($query_run)){
       $fname = $row['fname'];
       $lname = $row['lname'];
       $email = $row['email'];
       $password = $row['password'];
       $branch = $row['branch'];

     }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="" method="post">
      <div class= "form-group">
        <div class= "form-group">
          <label> First Name:</label>
          <input type="text" class="form-control" name="fname" value="<?php echo $fname;?>">
        </div>
      <div class= "form-group">
        <label> Last Name:</label>
        <input type="text" class="form-control" name="lname" value="<?php echo $lname;?>">
      </div>
      <div class= "form-group">
        <label> email:</label>
        <input type="email" class="form-control" name="email" value="<?php echo $email;?>">
      </div>
      <div class= "form-group">
        <label> password:</label>
        <input type="password" class="form-control" name="password" value="<?php echo $password;?>">
      </div>
      <div class= "form-group">
        <label>< Select Branch:</label>
        <select branch="form-control" name="class" required>
          <option><?php echo $class; ?></option>
          <option>CSE</option>
          <option>MECH</option>
          <option>CIVIL</option>
          <option>EEE</option>
        </select>
      </div>
      <button type="submit" name="update_profile" class="btn btn-primary">Update</button>
    </form>
  </body>
</html>
