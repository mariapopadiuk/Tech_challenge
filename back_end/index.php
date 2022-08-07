<html>
<body>

<?php 
$date_now = date("Y-m-d h:i:s"); 
$fname = $_GET["fname"];
$lname = $_GET["lname"];
$email = $_GET["email"];
$phone = $_GET["phone"];  

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

$sql = "INSERT INTO clients (fname, lname, email, phone, time_created)
VALUES ('$fname', '$lname','$email','$phone', '$date_now')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

 
$conn->close(); 

header("Location: http://localhost:8888/tech_challenge/back_end/admin.php");
?>
 
</body>
</html>

