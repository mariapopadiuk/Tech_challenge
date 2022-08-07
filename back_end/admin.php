
<html>
<body>

   <table border="1px" style="width: 1000px;">
    <tr>
      <th>First name</th>
      <th>Last name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Date</th>
    </tr>



<?php

$servername = "localhost:3306";
$username = "root";
$password= "";
$db = "form_db";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT fname, lname, email, phone, time_created FROM clients";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '  <tr>
      <td>'.$row["fname"].'</td>
      <td>'.$row["lname"].'</td>
      <td>'.$row["email"].'</td>
      <td>'.$row["phone"].'</td>
      <td>'.$row["time_created"].'</td>
    </tr>';
  }
} else {
  echo "0 results";
}
$conn->close();



?>
  </table>
</body>
</html>