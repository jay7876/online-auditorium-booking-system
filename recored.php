<html>
  <head>
    <style>
      table,th,td{
        border: 1px solid black;
        border-collapse: collapse;
      }
</style>
<body>

<?php 

//$hall_id = $_GET['hallid'];

// Create connection
$conn = new mysqli("localhost", "root", "", "users");

// Check connection
if($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM  booking";
$result = $conn->query($sql);


if ($result->num_rows > 0)  {
  echo "<table> <tr>  <th> 	name </th> 
   <th> 	aid </th> 
  <th> total_cost  </th> 
  <th> seats </th >
   <th> date</th>
   <th>  event</th>
   <th>  	time </th>
   <th>  	phone_number </th>
   <th> operation </th>    <th> operation 1 </th>
    </tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>  <td>".$row["name"]."</td>  
      <td>".$row["aid"]."</td> 
    <td>".$row["total_cost"]."</td>
    <td>".$row["seats"]."</td>
    <td>".$row["date"]."</td>
    <td>".$row["event"]."</td>
    <td>"."".$row["time"]."</td> 
    <td>"."".$row["phone_number"]."</td> 
    <td><a href='delete.php?id=$row[aid]'>"."delete"."</a></td>
    <td><a href='update.php?id=$row[aid]'>"."update"."</a></td>
    
    
    </tr>";
    
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>

</body>
</html>