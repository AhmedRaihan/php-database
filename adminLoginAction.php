<?php
 

 

if( $_SERVER["REQUEST_METHOD"] == "POST"){

 

  $username = $_POST['username'];
  $password = $_POST['password'];
  
  $conn = mysqli_connect("localhost","user1","123","task");

 

  $result = mysqli_query($conn, "select * from user where username = '" . $username . "' and password = '" . $password . "'") or die("Failed to query database" . mysqli_error($conn));

 

          $row = mysqli_fetch_array($result);

         
          if($row['username'] == $username && $row['password'] == $password) {

            echo "Login successfull...!!!" ;
          }
          else {

            echo "Login failed..!!!" ;
          }

  }
?>