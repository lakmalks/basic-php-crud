 <?php 


echo "<a href='/ayeakka/home.php'>Back to home</a>";
echo "<br><br>";

 include ("dbHelper.php");

 $emp_id= $_GET["emp_id"]; 
 $emp_name= $_GET["emp_name"];
 $emp_nic= $_GET["emp_nic"];
 $emp_dpt= $_GET["emp_dpt"];
 
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO emp (emp_id, emp_name, emp_nic,emp_dpt)
VALUES ('$emp_id', '$emp_name', '$emp_nic','$emp_dpt')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>