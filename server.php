
<?php
$host="localhost";
$username="root";
$password="";
$database="digital_notice_board";
$conn=mysqli_connect($host,$username,$password,$database);

if(!$conn){
  echo "Database Not Connected";
}


?>
