<?php 
include("dbHelper.php");
$sql="SELECT * FROM department";
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
  <h3><u>Department </u></h3>
<table border="1">
  <tr>
    <form action="dpt_ed.php">
      <td colspan="2"><input type="text" name="dpt_id" placeholder="Enter Dpt id to search"></td>
      <td><input type="submit" name="submit" value="Edit/Delete"></td>
    </form>
  </tr>
  <tr>
    <th> Department ID</th>
    <th> Department Name</th>
    <th> Department Location</th>
  </tr>
  <?php 
  echo "
<a href='/ayeakka/dpt_add.php' class=button>Add Department</a>
<a href='/ayeakka/home.php' class=button>Home</a>
<a href='/ayeakka/users.php' class=button>System User</a>


";
  if($result->num_rows>0){
  while($row=$result->fetch_assoc()){
    $dpt_id=$row['dpt_id'];
    $dpt_name=$row['dpt_name'];
    $dpt_location=$row['location'];
    echo "<tr> 
              <td> $dpt_id </td>
              <td> $dpt_name </td>
              <td> $dpt_location </td>


          </tr>";
      }
    }

  ?>
</table>

</div>
</body>
</html>