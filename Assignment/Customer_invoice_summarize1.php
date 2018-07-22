<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegi#u1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="Cstyle.css">
   
      
<?php
// Start the session
session_start();

?>
    
<style >
    
    table {
                width:100%;
                margin-top: 20px;
                
          }
    
    
    table, th, td {
                
                border-collapse: collapse;
        
            
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
</head>
    
    <body style="margin: 0px;">
        
<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        
        <div class="nav-container" style="position:fixed; z-index:1;">
            
            <nav class="navigation-bar">
                
                 <ul>
                     <li onclick="location.href=''">
                         
                         <div class="home-icon">
                             
                             <div class="roof">
                                 
                                 <div class="roof-edge">
                                 </div>
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
        
        <div style="padding-left: 120px; width:100%; height:100%; ">
            
            <div class="logo" style=" background-color: #D7CEC7; margin-left: -20px;  height: 90px;">
                
                <img src="logo.png" style="height: 85px; margin-left: 100px; margin-top: 2px;">
                <label style="margin-left:60%; font-size:30px; font-family:aria; color:#565656;">Welcome, <?php echo $_SESSION["Username"] ?></label>
                
            </div><br>

               <div style="padding: 0px 50px 0px 35px;  width:100%; height:85%;">
    
 <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////              -->
               <div class="row">
               <div class="col-12" style="width:100%">
                   
                <div class=create-invoice-btn>
                    
                    <h2 style="font-size: 50px; color:#D7CEC7; ">Invoice
                    <button class="btn" onclick=location.href='Invoice.php' style=" background-color:#1A63BB; float:right;  color:white; font-size: 26px; margin-top: 0.5em; height: 70px; ">Create an Invoice</button>
                    </h2>
                
                </div>
                </div>
                </div>
               
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////              -->
                   
               <div class="details-container" >
                   
                   <div class="details-container1 ">
                       
                       <h4 style="color: #eee ; margin-left: 5%; padding-top:3%;">Overdue</h4>
                       <h1 style="color: #76323F; margin-left: 5%;">RM 400</h1>
                       <h6 style="color: #565656; margin-left: 5%;">Last updated a min ago.</h6>
                       <h6 style="color: #1A63BB; margin-left: 47%; margin-top:-6.6%"><u>Refresh</u></h6>
                       
                   </div>
                   
                   <div class="details-container2 ">
                       
                       <h4 style="color: #eee ; margin-left: 5%; padding-top:3%;">Coming due within 30 days</h4>
                       <h1 style="color: #76323F;  margin-left: 5%;">RM 200</h1>
                       
                   </div>      
                   
                   <div class="details-container3 ">
                       
                       <h4 style="color:#eee ; margin-left: 5%; padding-top:3%;">Average time to get paid</h4>
                       <h1 style="color: #76323F;  margin-left: 5%;">28 days</h1>
                       
                   </div> 
               </div>
               <br>
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////              -->               
               <div style="height:50px;">
                                     
                    <input type="text" name="cname" placeholder="  Customer's Name" style="width:250px; height:40px; border:none ;padding-left: 30px; background-color:#D7CEC7 ; color: #565656; border-radius:10px;margin-left: 10px" >
                  

                   <select style="border-radius: 5px; width: 150px;height: 40px; background-color:#D7CEC7;color: #565656; margin-left: 20px;">
                       
                       <option value="all">All Statuses</option>
                       <option value="saab">Overdue</option>
                       <option value="opel">Opel</option>
                       <option value="audi">Audi</option>
                       
                   </select>
                
                   <label style="color:#D7CEC7; margin-left: 20px;">From</label>
                   <input type="date" name="from" placeholder="  From" style="width:230; height:40px; border:none ;padding-left: 30px; background-color:#D7CEC7 ; color: #565656; border-radius:10px;"  >
                  
                   <label style="color:#D7CEC7;">To</label>
                   <input type="date" name="to" placeholder="  To" style="width:230px; height:40px; border:none;padding-left: 30px; background-color:#D7CEC7 ; color: #565656; border-radius:10px;"  >
                   
                   <input type="text" name="invoice" placeholder="Enter Invoice #" style="width:200px; height:40px; border:none; padding-left:30px;   background-color: #D7CEC7;  color: #565656; border-radius:10px; margin-left: 20px"   >
                       
                   <button style="width: 140px;height: 45px;border: 0px;background-color:#565656 ;  border-radius: 10px; border: 3px solid DimGray ; margin-left: 1250px; margin-top: -45px"><i class="fa fa-search" style="font-size:25px ;color: #D7CEC7 ;" ></i></button>
                  
                  
               </div>
               <br>
                   
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
                   
               <div class="tab">
                   
                   <h6 style="color: #eee ; margin-left: 3%; padding-top:0.8%;">Unpaid(74)</h6>
                   <h6 style="color: #eee ; margin-left: 12%; margin-top:-2%;">Drafts(16)</h6> 
                   <h6 style="color: #eee ; margin-left: 21%; margin-top:-2%;">All Invoice</h6>
                   
               </div>
                   
               <div>
                 <table id="t01" style="margin-top: -10px;">
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
                    
                            echo "<td><i onclick='location.href=' class='fa fa-pencil-square' style='font-size:35px; color:#76323F; margin-right: 20px'></i>";
                      
                            echo "<i onclick='location.href='' class='fa fa-trash' style='font-size:35px;color:#76323F'></i></td>";

                  
                  
                  
                    echo "</tr>";
                  }
                }
                mysqli_close($conn);
                

              ?>
                     
           
                  
            </tbody>
        
            </table>
                
                
    
    
                </div>
            </div>
        </div>
        
    </body>
</html>