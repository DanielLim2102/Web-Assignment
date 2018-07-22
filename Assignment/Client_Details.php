<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO company (Company_Name,Address,Email,Contact)
VALUES ('".$_POST['companyN']."','".$_POST['address']."','".$_POST['email']."','".$_POST['contact']."')";

if ($conn->query($sql) === TRUE) {
    echo "<meta http-equiv='refresh' content='0;url=./Admin_view.php' >";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();




?>