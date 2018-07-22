<html>
<head>
    <title>Admin Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" media="Screen and (max-width:800px)" type="text/css" href="Responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegi#u1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    
    <style>
        .logo-container{
            float:left; width:44%; margin-top:60px;padding: 0px;
        }
        .login-container{
            width:52%; height:60%; border:1px; 
            margin-right: auto;  margin-left: 27%; margin-top:75px; padding:30px; 
            background-color:#E8E3E2; opacity: 0.85; border-radius: 20px;
        }
        .vl {
                border-left: 3px solid ;
                height: 50%;
                position: absolute;
                right:50%;
                margin-left: 3px;
                top: 170px;
                color: #565656;
            }
        .align{
                 margin-left: 80px;   
                    
              }

    </style>
    
</head>
    <body align="center" style="background-image:url(bg4.jpg); background-size: 100% 100%" >
               
        <br><br>
        <div class="form">
            
            <form action="LoginDB.php" method="post">
                
                <div class="container login-container">
                    
                    <div class="container logo-container"id="a">
                        
                        <img src="main-logo.png" style="height: 80% ; width:90%; position:relative; z-index: 2;">
            
                    </div>
            
                        <div class="vl"></div>
            
                    <div class="container" style="float: right ;width: 40%; margin-top: -10px; height: 400px; color: black;" >
                
                        <div style="width: 300px; height: 100px;">
                    
<!--//////////////////////////////////////icon/////////////////////////////////////////////////////////////////////-->
                    
                             <i class="fa fa-user-circle-o" style="font-size:100px; float:left ; color:#565656; margin-left: 65px ;margin-top: 40px"></i>
                    
                        </div>
                
                    <div style="width: 300px; height: 40px; margin-top: 75px;"> 
                    
<!--///////////////////////////////// username//////////////////////////////////////////////////////////////////////////////-->
                    
                        <i class="fa fa-user" style="position: absolute;  margin-top: 13px;  margin-left:  15px; color:#D7CEC7;"></i>
                    
                        <input type="text" name="uname" placeholder="  Username" style="width:85%; height:110%; border:none ;padding-left: 45px; background-color:#565656; color: #D7CEC7 ; border-radius:50px;"  required>
                    
                    </div>
                        
                        <div  style="width: 300px; height: 40px; margin-top: 25px;">
                    
<!-- //////////////////////password////////////////////////////////////////////////////////////////////////////////////-->
                            <i class="fa fa-lock"  style="position: absolute;  margin-top: 14px;  margin-left:  15px; color:#D7CEC7;"></i>
                    
                            <input type="password" name="pword" placeholder="  Password" style="width:85%; height:110%; border:none;padding-left: 45px;background-color:#565656; color: #D7CEC7; border-radius:50px;" required >
                    
                        </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->  
                        
                        <div style="font-size: 18px; text-align: left;margin-top: 20px">
                            
                            <input type="checkbox" >Remember Me
                
                        </div>
                
                        <div style="margin-top: 20px;">
                    
                            <input type="submit" value="Login" class="align btn" style="background-color: #565656; color:#D7CEC7; "  >
                    
                        </div>

               
                        <div style="font-size: 16px ; margin-top: 20px">
                    
                        <a href="" >Forgot password? </a>     
                    
                        </div>
                    </div>
                </div>
            </form>

        </div>
       
    </body>
</html>