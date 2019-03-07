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
        <title>Enter your Details</title>
    </head>
  
    
    
    <body class="body">
        
        
        <style> 
            
              .body{
                
                background-image:url(menubackground.jpeg);
                background-size:150%;
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
            
            /* this css if for the payement section row */ 
            
          * {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

#font{
    
    font-size:20px;
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
                
                <div class="col-50">
             <center id="titlehead">Please Enter your Payment Details</center>
            <label for="fname" id="font">Accepted Cards - Visa, Debit, Mastercard, Laser</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
        
                <center>
                  <input type="submit" class="btnContinue" name="btnContinue" onclick="" value="Continue" />  
                </center>
       </div>
        
        
     </form>
    </body>
</html>