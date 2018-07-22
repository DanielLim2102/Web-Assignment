<?php
session_start();
?>
<html>
<head>
   
    
        <?php
        include ('Admin_link.php');
        ?>
    
</head>

    <body>
        <?php
        include ('Admin_navi.php');
        ?>
        
        
        
        
        <div class="box-edit">
            <div class="box-edit-1">
                
                
                
                
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
    

$sql = "SELECT * FROM company WHERE ID='".$_GET["ID"]."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
    
     
                
        echo'      
                
                <form action="Admin_view_update.php?ID='.$row["ID"].'" method="post">
                <h1 style="margin-top:-76%; margin-left:10%; color:#565656;">Edit Details</h1>
                <div class="edit-input" style="margin-left: 13%">
                            <label style="font-size:25px; color:#C09F80;">Company Name :</label>
                            <input type="text" name="cName" value="'.$row["Company_Name"].'" placeholder="  Company Name" style="width:35%; height:37px; border:none ;padding-left: 30px; background-color:#D7CEC7; color: #565656 ; border-radius:5px;" required >
                        </div>
                        
                        <div class="edit-input" style="margin-left: 24%" >
                                <label style="font-size:25px; color:#C09F80;">Address :</label>
                                <input type="text" name="address" value="'.$row["Address"].'"  placeholder="  Address" style="width:35%; height:37px; border:none ;padding-left: 30px; background-color:#D7CEC7; color: #565656 ; border-radius:5px;" >
                        </div>
                        
                         <div class="edit-input" style="margin-left: 27%">
                                <label style="font-size:25px; color:#C09F80;">Email :</label>
                                <input type="text" name="email" value="'.$row["Email"].'" placeholder="  Email" style="width:35%; height:37px; border:none ;padding-left: 30px; background-color:#D7CEC7; color: #565656 ; border-radius:5px;">
                        </div>
                        
                        <div class="edit-input" style="margin-left: 24%;">
                                <label style="font-size:25px; color:#C09F80;">Contact :</label>
                                <input type="text" name="contact"  value="'.$row["Contact"].'"  placeholder="  Contact" style="width:35%; height:37px; border:none ;padding-left: 30px; background-color:#D7CEC7; color: #565656 ; border-radius:5px;" >
                         </div>
                          
                          <div class="save_edit">
                          <input type="submit"  value="Save"  class="btn" style="margin-left: 39%; margin-top: 20%; width:19%; background-color:#1A63BB ; color:white; font-size: 25px;"  >
                          
                         </div>
    
                </form>
            </div>
            
           
            
     ';
                } else {
    

    
    echo "0 results";
}
               
$conn->close();
                ?>
            
            </div>
        </div>        
    </body>
</html>
