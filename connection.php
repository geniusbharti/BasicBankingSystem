<?php  
       $server = "localhost";
       $username = "root";
       $password = "";
       $database = "bank";
       //creating connection with database
       $conn = new mysqli($server, $username, $password, $database); 
       //checking the connection
      if($conn->connect_error){
          die('Connection Failed : ' .$conn->connect_error);
      }
?>  