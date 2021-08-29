 <?php 


echo "<a href='/ayeakka/home.php'>Back to home</a>";
echo "<br><br>";

 include ("dbHelper.php");

 $dpt_id= $_GET["dpt_id"]; 
 $dpt_name= $_GET["dpt_name"];
 $dpt_location= $_GET["dpt_location"];
 
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO department (dpt_id, dpt_name, location)
VALUES ('$dpt_id', '$dpt_name', '$dpt_location')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>