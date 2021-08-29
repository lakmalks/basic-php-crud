 <?php
include("dbHelper.php");
?>
 <html>
  <head>
    <title>Employer</title>
    <style>
      .button {
        background-color: #1087cf;
        border: solid;
        border-color: black;
        color: white;
        padding: 10px 17px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 18px;
        margin: 4px 2px;
        cursor: pointer;
      }
    </style>
  </head>
</body>
 <?php

$sql = "SELECT * FROM emp";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "<div id=tbl align =center>";

  echo("<table border=1 align=center>
    <tr>
    <form>
    <td colspan=3><input type=text placeholder='Enter user Id to search'></td> <td><input type=button value='Search'></td>
    </form>
    </tr>
    

    <tr><td>ID</td><td>Name</td><td>NIC</td><td>Department</td></tr>");

  
  while($row = $result->fetch_assoc()) {
    $dpt_code=$row["emp_dpt"];
    $dpt_sql="SELECT dpt_name FROM department WHERE dpt_id='$dpt_code'";
    $dpt_rset=$conn->query($dpt_sql);
    $dpt_name="";
    if($dpt_rset->num_rows>0){
      $data=$dpt_rset->fetch_assoc();
      $dpt_name=$data["dpt_name"];
     
    }
    echo "<tr>".
          "<td>" . $row["emp_id"]. "</td>" .
          "<td>". $row["emp_name"].  "</td>".
          "<td>" . $row["emp_nic"]. "</td>".
          "<td>" . $dpt_name. "</td>".
          "</tr>";
  }
} else {
  echo "No results found";
}
echo "</div>";
echo "<div id=btnSet align =center>";
echo "
<a href='/ayeakka/emp_add.php' class=button target='_blank'>Add Employer</a>
<a href='/ayeakka/emp_edit.php' class=button>Edit Employer</a>
<a href='/ayeakka/emp_del' class=button>Delete Employer</a>


";

echo "</div>";
echo "<br>";

$conn->close();
?> 

</html>