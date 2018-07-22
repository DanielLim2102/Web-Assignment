
<?php
                   
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
} 

$sql="UPDATE company SET Company_Name='".$_POST['cName']."',Address='".$_POST['address']."',Email='".$_POST['email']."', Contact='".$_POST['contact']."' WHERE ID='".$_GET['ID']."'";
 if ($conn->query($sql)===TRUE){
     //echo'<label name= "'.$_POST["cName"].'"></label>';
    echo"<SCRIPT>
   alert('Update success');
   </SCRIPT>";
   echo "<meta http-equiv='refresh' content='0 ;url=view.php'> ";
  header("location:Admin_view.php");

}

    
    
 else {
    echo "0 results";
}
$conn->close();
?>

