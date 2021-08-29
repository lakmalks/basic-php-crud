 <?php 


echo "<a href='/ayeakka/home.php'>Back to home</a>";
echo "<br><br>";

 include ("dbHelper.php");

 $emp_id= $_GET["emp_id"]; 
 $user_name= $_GET["user_name"];
 $password= $_GET["password"];
 
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO login (emp_id, username, password)
VALUES ('$emp_id', '$user_name', '$password')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>