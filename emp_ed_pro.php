<?php 


echo "<a href='/ayeakka/home.php'>Back to home</a>";
echo "<br><br>";

 include ("dbHelper.php");

 $emp_id= $_GET["emp_id"]; 
 if($_GET["btn"]=='Delete Employer'){

   echo "Delete <br>";
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sqlD = "DELETE FROM emp WHERE emp_id =".$emp_id;
    $sqlD_login="DELETE FROM login WHERE emp_id =".$emp_id;

    if ($conn->query($sqlD) === TRUE AND $conn->query($sqlD_login) === TRUE) {
      echo "Deleted successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }



 }else{
  $emp_name=$_GET['emp_name'];
  $emp_nic=$_GET['emp_nic'];
  $emp_dpt=$_GET['emp_dpt'];

  echo"Edit <br>";

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sqlE = "UPDATE emp SET emp_name='$emp_name',emp_nic='$emp_nic' , emp_dpt='$emp_dpt' WHERE emp_id='$emp_id'";

    if ($conn->query($sqlE) === TRUE) {
      echo "UPDATE successfully";
    } else {
      echo "Error: " . $sqlE . "<br>" . $conn->error;
    }

  }
 


$conn->close();
?>