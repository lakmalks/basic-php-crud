 <?php 
include("dbHelper.php");
$username=$_GET['username'];
$password=$_GET['password'];


$sql="SELECT emp_id FROM login WHERE username='$username' AND password='$password'";
$result=$conn->query($sql);
if($result->num_rows>0){
    $data=$result->fetch_assoc();
    header("Location: /ayeakka/home.php");
  exit();
}else{
    echo"Wrong username or Password";
    header("Location: /ayeakka/login.php");
    exit();
}

 ?>