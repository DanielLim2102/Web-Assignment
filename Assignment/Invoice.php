<html>
<head>
   
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegi#u1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Invoice_style.css">
    <link rel="stylesheet" type="text/css" href="Cstyle.css">
   

      
<?php
// Start the session
session_start();

?>
    
</head>
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
        
  
        <div class="Invoice">           
            <div class="Invoice-border"></div>
            <div class="Invoice-sender">

                <div class="Invoice-sender-logo">


                    <img src="https://cl.ly/kkla/Evil%20Inc%20Logo.svg" alt="" />

                </div>

                <p class="Invoice-sender-address">

                    FreeAgent Central

                    <br />

                    One Edinburgh Quay

                    <br />

                    133 Fountainbridge

                    <br />

                    Straits Quey

                    <br />
                    
                    EH3 9QG

                </p>
            </div>
            

            <div class="Invoice-details">

                <p class="Invoice-recipient-address">

                    Medianode

                    <br />

                    111 Smanks Drive

                    <br />

                    Kuala Liumpur

                    <br />

                    EC1 2AB

                </p>

                <p class="Invoice-reference">

                    INV 0001

                    <br />

                    02 June 2018

                    <br />

                    <br />

                    <b>Due by 01 July 2018</b>

                </p>
            </div>

            <div class="Invoice-amount">

                <div class="Invoice-items">

                    <div class="Invoice-items-headings">

                        <div class="Invoice-items-heading">

                            Quantity

                        </div>

                        <div class="Invoice-items-heading">

                            Description

                        </div>

                        <div class="Invoice-items-heading">

                            Unit Price (RM)

                        </div>

                        <div class="Invoice-items-heading">

                            Tax

                        </div>

                        <div class="Invoice-items-heading">

                            Net Subtotal (RM)

                        </div>
 
                    </div>

                    <div class="Invoice-item" tabindex="1">

                        <div class="Invoice-item-detail">
 
                            10 hours
     
                        </div>
          
                        <div class="Invoice-item-detail">
      
                            Scale robust e-services
     
                        </div>
     
                        <div class="Invoice-item-detail">
      
                            60.00
    
                        </div>
        
                        <div class="Invoice-item-detail">
          
                            20%
       
                        </div>
        
                        <div class="Invoice-item-detail">
         
                            600.00
        
                        </div>
        
                        <div class="Invoice-item-controls">
         
                            <button class="Button Button--ghost" tabindex="1">&times;</button>
        
                        </div>
      
                    </div>
      
                    <div class="Invoice-item" tabindex="1">
        
                        <div class="Invoice-item-detail">
         
                            10 hours
        
                        </div>
        
                        <div class="Invoice-item-detail">
          
                            Envisioneer next-generation action items
        
                        </div>
       
                        <div class="Invoice-item-detail">
         
                            60.00
       
                        </div>
        
                        <div class="Invoice-item-detail">
         
                            20%
        
                        </div>
        
                        <div class="Invoice-item-detail">
          
                            600.00
        
                        </div>
        
                        <div class="Invoice-item-controls">
          
                            <button class="Button Button--ghost" tabindex="1">&times;</button>
       
                        </div>
      
                    </div>
     
                    <div class="Invoice-addNewItem">
        
                        <button class="Button Button--primary Button--large">
          
                            &plus; Add new item
       
                        </button>
        
                        <button class="Button Button--large">
          
                            &#8645; Reorder
       
                        </button>
     
                    </div>
   
                </div>
    
                <div class="Invoice-itemTotals">
      
                    <div class="Invoice-itemTotals-subtotals">
       
                        <div class="Invoice-itemTotals-label">
        
                            Net Subtotal
        
                        </div>
        
                        <div class="Invoice-itemTotals-value">
        
                            1,200.00
        
                        </div>
        
                        <div class="Invoice-itemTotals-label">
         
                            Tax
      
                        </div>
       
                        <div class="Invoice-itemTotals-value">
       
                            240.00
       
                        </div>
     
                    </div>
      
                    <div class="Invoice-itemTotals-invoiceTotal">
        
                        <div class="Invoice-itemTotals-label">
          
                            Total
        
                        </div>
        
                        <div class="Invoice-itemTotals-value">
         
                            RM1,440.00
        
                        </div>
      
                    </div>
    
                </div>
  
            </div>
  
            <div class="Invoice-extraStuff">
    
                <div class="Invoice-extraStuff-paymentInfo">
      
                    <p>
        
                        <b>Bank Sort Code: </b>12-34-56
     
                    </p>
      
                    <p>
        
                        <b>Bank Account Number: </b>22446688
     
                    </p>
    
                </div>
    
                <div class="Invoice-extraStuff-companyInfo">
      
                    <p>
       
                        <b>Company Registration Number: </b>22446688
     
                    </p>
    
                </div>
    
                <div class="Invoice-extraStuff-additionalText">
      
                    <p>
       
                        Thank you for your payment.
      
                    </p>
    
                </div>
  
            </div>

        </div>
    </body>
    
    
</html>