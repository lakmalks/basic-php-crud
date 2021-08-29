<?php 


echo "<a href='/ayeakka/home.php'>Back to home</a>";
echo "<br><br>";

 include ("dbHelper.php");

 $emp_id= $_GET["emp_id"]; 
 if($_GET["btn"]=='Delete'){

   echo "Delete <br>";
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sqlD = "DELETE FROM login WHERE emp_id =".$emp_id;

    if ($conn->query($sqlD) === TRUE) {
      echo "Deleted successfully";
    } else {
      echo "Error: " . $sqlD . "<br>" . $conn->error;
    }



 }else{
  $user_name=$_GET['user_name'];


  echo"Edit <br>";

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sqlE = "UPDATE login SET username='$user_name'WHERE emp_id='$emp_id'";

    if ($conn->query($sqlE) === TRUE) {
      echo "UPDATE successfully";
    } else {
      echo "Error: " . $sqlE . "<br>" . $conn->error;
    }

  }
 


$conn->close();
?>