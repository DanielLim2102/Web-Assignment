<?php
session_start();
?>
<html>
<head>
 <?php
        include ('Admin_link.php');
    ?>
    
 

        
    
<style >
            table {
                width:100%;
                margin-top: 20px;
                
            }
            table, th, td {
                
                border-collapse: collapse;
                border:1px solid #565656;
                
                
            }
         
            th,td {
                padding: 25px;
                text-align: left;
                color:black;
                
            }
            table#t01 tr:nth-child(even) {
                background-color: #D7CEC7;
            }
            table#t01 tr:nth-child(odd) {
               background-color: #eee;
            }
            table#t01 th {
                background-color:#76323F;
                color: white;
            }
</style>
 <!--///// /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    
</head>
     <?php
        include ('Admin_navi.php');

        ?>
    <body style="margin: 0px;">        

        <div class="Text-manage">
            
            <h1 style="font-size: 65px; color:#D7CEC7; ">Manage</h1>
            
        </div>
        
        <div class="filter">
            
            <div class="Text-filter">
                
                <h1 style="font-size: 50px; color:#C09F80;  ">Filter</h1>
                
            </div>
            
            
        <div class="main-input">            
            
            <div class="filter-input">
                
                <label style="font-size:25px; color:#C09F80; margin-left: -32%;">Company Name :</label>
                <input style="float: left; margin-top: 0%;margin-left: 19%; width:300px; border-radius:40px;">
                
            </div>
                
            <div class="filter-input">
                
                <label style="font-size:25px; color:#C09F80; margin-left: -27%; margin-top: 1%;">Address :</label>
                <input style="float: left;margin-top: 1%; margin-left: 19%;  width:300px; border-radius:40px;">
                
            </div>
                
            <div class="filter-input">
                
                <label style="font-size:25px; color:#C09F80; margin-left: 45%; margin-top: -8.5%;">Email :</label>
                <input style="float: left; margin-top: -8.3%; margin-left: 55%; width:300px; border-radius:40px;">
                
            </div>   
                
            <div class="filter-input">
                
                <label style="font-size:25px; color:#C09F80;margin-left: 43.7%; margin-top: -7.5%;">Contact :</label>
                <input style="float: left; margin-top: -7.3%; margin-left: 55%;  width:300px; border-radius:40px;">
                
            </div>
            
        </div>
                
                
                
                <div class="search_bt" style="margin-top: -9%;
    margin-left: 83%;">                  
                
                <button class="btn" onclick=""style="font-size:25px; background-color:#C09F80; border-radius:10px; ">Filter <i class="fa fa-search"></i></button>
                </div>
        </div>        

<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        
            <br>
                <div>
                    <button onclick="openModal()" class="btn" style=" background-color:#1A63BB ; height:10%; width:10%; color:white; font-size: 25px;">Create new</button>
                </div>
        
<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->            
<!--            modal box-->
            <div class="container-table">
                <form action="Client_Details.php" method="post">
                    <div  class="modal-container" id="mcon">
                    
                        <div class="modal-content">
                        <i onclick="closeModal()" class="fa fa-times-circle" style="font-size:48px;color:red; float: right; margin-left: 605px ; margin-top: -70px;" ></i>
                        <div style="color:#565656 " class=modal-text>
                             
                            <h2 style="text-align: center  " >Add New Details</h2>
                            
                        </div>
                        
                        <div class="modal-input">
                            <label>Company Name :</label>
                            <input type="text" name="companyN" placeholder="  Company Name" style="width:230px; height:37px; border:none ;padding-left: 30px; background-color:#565656; color: #D7CEC7 ; border-radius:5px;" required >
                        </div>
                        
                        <div class="modal-input">
                                <label>Address :</label>
                                <input type="text" name="address" placeholder="  Address" style="width:230px; height:37px; border:none ;padding-left: 30px; background-color:#565656; color: #D7CEC7 ; border-radius:5px;" >
                        </div>
                        
                         <div class="modal-input">
                                <label>Email :</label>
                                <input type="text" name="email" placeholder="  Email" style="width:230px; height:37px; border:none ;padding-left: 30px; background-color:#565656; color: #D7CEC7 ; border-radius:5px;">
                        </div>
                        
                        <div class="modal-input">
                                <label>Contact :</label>
                                <input type="text" name="contact" placeholder="  Contact" style="width:230px; height:37px; border:none ;padding-left: 30px; background-color:#565656; color: #D7CEC7 ; border-radius:5px;" >
                         </div>
                            
                        <div class="modal-bt-save" >
                                <input type="submit" class="btn" value="Save" style="border-radius:8px; width: 100px; background-color:#1A63BB;  color:white;">
                        </div>

                        </div>
                    </div>
            </form>
            </div>
        
<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////            -->
            <div>
                <table id="t01">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Company name</th> 
                            <th>Address</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Action</th>
                        </tr>
                     </thead>
                    
                    <tbody>
                                                        
                        <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "project";

                        // Create connection
                        $conn = mysqli_connect($servername, $username, $password, $dbname);
                        // Check connection
                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }

                       $slc = "SELECT * FROM company ";
                       $res = mysqli_query($conn, $slc);
                               $x=0;
                       if (mysqli_num_rows($res) > 0) {
                           while($row = mysqli_fetch_assoc($res)){
                               $x+=1;
                               echo "<tr>";
                               echo "<td>";
                               echo "$x";
                               echo "</td>";
                               echo "<td>";
                               echo $row["Company_Name"];
                               echo "</td>";
                               echo "<td>";
                               echo $row["Address"];
                               echo "</td>";
                               echo "<td>";
                               echo $row["Email"];
                               echo "</td>";
                               echo "<td>"; 
                               echo $row["Contact"];
                               echo "</td>";
                    
                               echo "<td><i onclick=location.href='Admin_edit.php?ID=".$row['ID']."' class='fa fa-pencil-square' style='font-size:35px; color:#76323F; margin-right: 20px'></i>";
                      
                               echo "<i onclick=location.href='Admin_view_delete.php?ID=".$row["ID"]."' class='fa fa-trash' style='font-size:35px;color:#76323F'></i></td>";
                                echo "</tr>";
                            }
                        }
                            mysqli_close($conn);
                

                        ?>
                    
                </tbody>
            </table>

        </div>
    </body>

</html>
