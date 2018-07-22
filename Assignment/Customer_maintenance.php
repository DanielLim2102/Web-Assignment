<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegi#u1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Cstyle.css">
   
    <script>
    function Tab_customer(){
    document.getElementById("tbc").style.display="block";
    document.getElementById("tbp").style.display="none";
    
}

function Tab_product(){
    document.getElementById("tbc").style.display="none";
    document.getElementById("tbp").style.display="block";  
}
    </script>
      
<?php
// Start the session
session_start();

?>
    
</head>
    <style >
            table {
                width:100%;
                margin-top: 20px;
                
            }
            .table1, th, td {
                
                border-collapse: collapse;
                padding: 25px;
                text-align: left;
               
                border:1px solid #565656;
                
            }
            .table2, th, td {
                
                border-collapse: collapse;
                padding: 25px;
                text-align: left;
                border:1px solid #565656;
                
            }
        .table2 tbody{
            color:white;
        
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
            table#t02 tr:nth-child(even) {
                background-color: #76323F;
            }
            table#t02 tr:nth-child(odd) {
               background-color: #9E4D52;
            }
            table#t02 th {
                background-color:#D7CEC7;
                color: #76323F;
            }
        #tbp{
            display:none;
            
            
            
            </style>
    
    
    <body style="margin: 0px;">
<!--///////////////////////////////////navigation bar////////////////////////////////////////////-->
        
        <div class="nav-container">
            <nav class="navigation-bar">
                <ul>
                    <li onclick="location.href=''">
                        <div class="home-icon">
                            <div class="roof">
                                <div class="roof-edge"></div>
                            </div>
                            <div class="front"></div>
           
                        </div>
                    </li>
                    
                    <li onclick="location.href=''">
                        <div class="about-icon">
                            <div class="head">
                                <div class="eyes"></div>
                                <div class="beard"></div>
                            </div>
                        </div>
                    </li>
                    
                    <li onclick="location.href='Customer_invoice_summarize1.php'">
                        <div class="work-icon">
                            <div class="paper"></div>
                            <div class="lines"></div>
                            <div class="lines"></div>
                            <div class="lines"></div>
                        </div>
                    </li>
                                        
                  
                    <li onclick="location.href='Customer_maintenance.php'">
                        
                        <i class="fa fa-wrench" style="font-size:48px;color:#C09F80 ; margin-top: 20px;"></i>

                    </li>
                  
                  <li onclick="location.href=''">
                      
                    <i class="fa fa-gears" style="font-size:48px;color:#C09F80 ; margin-top: 20px;"></i>

                  </li>

                  <br><br><br><br>
                  
                  <li onclick="location.href=''">
                      
                      <div class="logout">
                          
                 <i class="fa fa-power-off" style="font-size:48px;color:#C09F80"></i>
                          
                      </div>
                  </li>
              </ul>
                
            </nav>
        </div>
        
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        
          <div style="padding-left: 120px; width:100%; height:100%; ">
              
              <div class="logo" style=" background-color: #D7CEC7; margin-left: -20px;  height: 90px;">
                  
                  <img src="logo.png" style="height: 85px; margin-left: 100px; margin-top: 2px;">
                  <label style="margin-left:60%; font-size:30px; font-family:aria; color:#565656;">Welcome, <?php echo $_SESSION["Username"] ?></label>
                  
            </div><br>
              
 <!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////--> 
              
               <div class="Text-maintenace">
                                     
                    <h1 style="font-size: 50px; color:#D7CEC7; ">Maintenance</h1>
                   
               </div>
               <div class="customer-tab">
                   <button type="button" id="tab_c" onclick="Tab_customer()" class="btn" style="background-color:#76323F; height:10%; width:175px; color: white;"><i class="fa fa-vcard"></i>  Customer</button>
               </div>
               
                
               <div class="product-tab">
                   <button  type="button"  class="btn" onclick="Tab_product()" style="background-color:#D7CEC7; height:10%; width:175px; color: #76323F;" ><i class="fa fa-archive"></i>  Product</button>
               </div>
               
              <div>
                    <button onclick="" class="btn" style=" background-color:#1A63BB ; height:10%; width: 20%; margin-left: 79%; margin-top: -5%; color:white; font-size: 25px;">Create new Customer/Product</button>
                </div>
              
 <!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////--> 
        
                <div id="tbc" class="table1">
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
                    <tr>
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
                    echo  "$x";
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
                    
                     echo "<td><i onclick='location.href=' class='fa fa-pencil-square' style='font-size:35px; color:#76323F; margin-right: 20px'></i>";
                      
                   echo "<i onclick='location.href='' class='fa fa-trash' style='font-size:35px;color:#76323F'></i></td>";

                  
                  
                  
                    echo "</tr>";
                  }
                }
                mysqli_close($conn);
                    

              ?>
            </tr> 
            </tbody>
              <tfoot>
                </tfoot>
                </table>
                   
            </div>
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
              
                <div id="tbp"  class="table2">
                <table id="t02" >
                <thead>
                <tr>
                    <th>#</th>
                  <th>Product name</th> 
                   <th>Description</th>
                   <th>Price</th>
                   <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
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
                if (mysqli_num_rows($res) > 0) {
                  while($row = mysqli_fetch_assoc($res)){
                    echo "<tr>";
                    echo "<td>";
                    echo "<input type='checkbox'>";
                    echo "</td>";
                    echo "<td>";
                    echo $row["Company_Name"];
                    echo "</td>";
                    echo "<td>";
                    echo $row["Address"];
                    echo "</td>";
                    echo "<td>";
                    
                    
                    
                     echo "<td><i onclick='location.href=' class='fa fa-pencil-square' style='font-size:35px; color:#D7CEC7; margin-right: 20px'></i>";
                      
                   echo "<i onclick='location.href='' class='fa fa-trash' style='font-size:35px;color:#D7CEC7'></i></td>";

                  
                  
                  
                    echo "</tr>";
                  }
                }
                mysqli_close($conn);
                    

              ?>
            </tr> 
            </tbody>
              <tfoot>
                </tfoot>
                </table>
                   
            </div>
            </div>
    </body>
</html>