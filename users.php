<?php 
include("dbHelper.php");
$sql="SELECT login.emp_id,login.username, emp.emp_name FROM emp INNER JOIN login ON emp.emp_id=login.emp_id";
$result=$conn->query($sql);
echo "<a href='/ayeakka/home.php'>Back to home</a>";


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
   <style>
      .button {
        background-color: #1c87c9;
        border: solid;
        border-color: black;
        color: white;
        padding: 10px 17px;
        text-align: center;
        display: inline-block;
        font-size: 18px;
        margin: 4px 2px;
        cursor: pointer;
      }
    </style>
  <title>Departments</title>
</head>
<body >

  <div align=center>
  <h3><u>System Users </u></h3>
<table border="1">
  <tr>
    <form action="users_ed.php">
      <td><input type="text" name="emp_id" placeholder="Enter Emp id to search"></td>
      <td><input type="submit" name="submit" value="Edit/Delete"></td>

    </form>
  </tr>
  <tr>
    <th> Employer ID</th>
    <th> Username</th>
    <th> Employer  Name</th>

  </tr>
  <?php 
  echo "
<a href='/ayeakka/users_add.php' class=button>Add System User</a>
<a href='/ayeakka/home.php' class=button>Home</a>
<a href='/ayeakka/dpt.php' class=button>Department</a>


";

  if($result->num_rows>0){
  while($row=$result->fetch_assoc()){
    $emp_id=$row['emp_id'];
    $user_name=$row['username'];
    $emp_name=$row['emp_name'];
    
    echo "<tr> 
              <td> $emp_id </td>
              <td> $user_name </td>
              <td> $emp_name </td>
          


          </tr>";
      }
    }

  ?>
</table>

</div>
</body>
</html>