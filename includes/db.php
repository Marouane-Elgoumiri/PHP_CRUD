<?php 
  $servername = "127.0.0.1:3306";
  $username = "sqluser";
  $password = "j5hLo@sbJuDq]pPC";
  $dbname = "notes";
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  
  if(!$conn){
      die("Connection failed!" . mysqli_connect_error());
  }  
?>