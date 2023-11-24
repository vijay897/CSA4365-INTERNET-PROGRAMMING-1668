<?php 
  if($_POST) {
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "hospital";
  
   
  // Database Connection
  $conn = new mysqli($servername, $username, $password, $database);
  
  // Check if error
  if($conn->connect_error) {
    echo "Connection Error";
  }
  
  // Username & Password
  $userid = $_POST["Id"];
  $amount = $_POST["Amount"];
  
  // Sql Query
  $sql = "INSERT INTO inputdata (ID,Amount) VALUES ('$userid', '$amount')";
 
  if($conn->query($sql)) {
   echo "Data stored successfully";
  } else {
   echo "Something went wrong";
  }
   
   $conn->close();
  }
?>
