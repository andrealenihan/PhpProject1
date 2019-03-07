<?php
session_start();
$fullNameValue = "";
$totalValue = "";
/*
 * Create a session variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue2;

/*
 * Allocate the mobile number seesion variable to a textbox
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>eBusiness 2</title>
    </head>
  
    
    
    <body class="body">
        
        
        <style> 
            
              .body{
                
                background-image:url(menubackground.jpeg);
                background-size:100%;
            }
            
            .btnContinue{
                
                background-color:#2fa03e;
                 border: none;
                 color: white;
                 padding: 12px 16px;
                 font-size: 16px;
                cursor: pointer; 
                
            }
            .btnContinue:hover{
                
             
                 box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
                 background-color: #4b4b4b;
                
            }
       
              #titlehead{
                
                font-size:30px;
            }
        
        </style>
        <div class="form">
            <form name="Details" method="post" action="ebus3.php">
                
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                
                <center id="titlehead">Please Enter your Details</center>
                
                <br>
                <br>
                   
                <center>
                    <table cellspacing="10">
                       
                        <tr>
                            <td>Name</td>
                            <td><input type="text" id="txtName" name="txtName" value=""></td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td><input type="text" id="txtNum" name="txtNum" value=""></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="text" id="txtPassword" name="txtPassword" value=""></td>
                        </tr>
                        <tr>
                            
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>" /></td>
                        </tr>
                    </table>
               </center>
                <center>
                  <input type="submit" class="btnContinue" name="btnContinue" onclick="" value="Continue" />  
                </center>
       </div>
     </form>
    </body>
</html>