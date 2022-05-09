<?php 
	   $hName='localhost'; // host name
    $uName='root';   // database user name
    $password='';   // database password
    $dbName = 'crud'; // database name
    $conn= mysqli_connect($hName,$uName,$password,$dbName);
    mysqli_select_db($conn,$dbName);
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
      }
?>