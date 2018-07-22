<?php
// Start the session
//session_start();

?>
   
<div class="nav-container">
     <br>
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
                 <br>
                 
                
                 <li onclick="location.href='Admin_view.php'">
                     
                    <i class="fa fa-users" style="font-size:48px;color:#C09F80 ; margin-top: 20px;"></i>

                 </li>

                <br>
                  
                <li onclick="location.href='Logout.php'">
                    
                    <div class="logout">
                        
                    <i class="fa fa-power-off" style="font-size:48px;color:#C09F80"></i>
                        
                    </div>
                </li>
              </ul>
                
            </nav>

        </div>

<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////             -->
       <div style="padding-left: 120px; width:100%; height:100%; ">
           
            <div class="logo" style=" background-color: #D7CEC7; margin-left: -20px;  height: 90px;">
                
                <img src="logo.png" style="height: 85px; margin-left: 100px; margin-top: 2px;">
                <label style="margin-left:60%; font-size:30px; font-family:aria; color:#565656;">Welcome, <?php echo $_SESSION["Username"] ?></label>
                
            </div><br>
           
           <div style="padding: 0px 50px 0px 35px;  width:100%; height:85%;">
<!--///// /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
