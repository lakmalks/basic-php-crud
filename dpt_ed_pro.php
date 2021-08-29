<?php 


echo "<a href='/ayeakka/home.php'>Back to home</a>";
echo "<br><br>";

 include ("dbHelper.php");

 $dpt_id= $_GET["dpt_id"]; 
 if($_GET["btn"]=='Delete'){

   echo "Delete <br>";
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sqlD = "DELETE FROM department WHERE dpt_id =".$dpt_id;

    if ($conn->query($sqlD) === TRUE) {
      echo "Deleted successfully";
    } else {
      echo "Error: " . $sqlD . "<br>" . $conn->error;
    }



 }else{
  $dpt_name=$_GET['dpt_name'];
  $dpt_location=$_GET['dpt_location'];

  echo"Edit <br>";

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sqlE = "UPDATE department SET dpt_name='$dpt_name',location='$dpt_location' WHERE dpt_id='$dpt_id'";

    if ($conn->query($sqlE) === TRUE) {
      echo "UPDATE successfully";
    } else {
      echo "Error: " . $sqlE . "<br>" . $conn->error;
    }

  }
 


$conn->close();
?>