
<?php
session_start();
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

$sql = "SELECT * FROM loginpage where Username = '".$_POST['uname']."' AND Password = '".$_POST['pword']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $_SESSION["Username"]=$row['Username'];
        echo $_SESSION["Username"];
        echo '.<meta http-equiv="Refresh" content="0; url=Admin_view.php">';

    }
} else {
    echo "0 results";
}
$conn->close();
?>