<!-- Creating a session variable and assigning it to txtTotal-->
<?php
session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>
<!DOCTYPE>
<html lang="en" xmlns="http.//ww.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        
        <link rel="stylesheet" href="eBusinessStyle.css">
        
        <title>Services</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
        
    </head>
    
    <body class="body">
        
        
        <style>
            
            .body{
                
                background-image:url(menubackground.jpeg);
                background-size:100%;
            }
           
            #titlehead{
                
                font-size:30px;
            }
            
            
            .btn1{
                
                background-color:Blue;
                 border: none;
                 color: white;
                 padding: 12px 16px;
                 font-size: 16px;
                cursor: pointer; 
                
            }
            .btn1:hover{
                
             
                 box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
                 background-color: RoyalBlue;
                
            }
            
            .btnCalc{
                
                background-color:#2fa03e;
            }
            
            .btnCalc:hover{
                
             
                 box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
                 background-color: #0e761c;
                
            }
            
           .btnClear{
                
                  background-color:grey;
              
                
            }
            
             .btnClear:hover{
                
             
                 box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
                 background-color: #4b4b4b;
                
            }
        </style>
        
        <div class="form">
            <form name="intCalc" method="post" action="ebus2.php">
               
                
                <br> <!-- break tag --> 
                <br>
                <br>
                <br>
                <br>
                
                <center id="titlehead">Please select a service:</center>
               
                <br>
                
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b></b></td>
                        </tr>
                        <tr>
                            <td><b>Blockchain @ $1000</b></td>
                            <td><input type="radio" id="Blockchain" name="rdoGroup" value="1000" /></td>
                        </tr>
                        <tr>
                            <td>Autonomous Things(Robots) @ $2000</td>
                            <td><input type="radio" id="AutonomousThings" name="rdoGroup" value="2000" /></td>
                        </tr>
                            <tr>
                            <td>Immersive Experience @ $3000</td>
                            <td><input type="radio" id="ImmersiveExperience" name="rdoGroup" value="3000" /></td>
                        </tr>
                    </table>
                </center>
                <br />
                <center><table cellspacing="10">
                        <tr>
                            <td>Sub Total</td>
                            <td><input type="text" id="txtSubTot" name="txtSub" readonly /></td>
                        </tr>
                        <tr><td>-Discount @30%</td>
                            <td><input type="text" id="txtDisc" name="txtDisc" readonly/>   </td>
                        </tr>
                        <tr>
                            <td>+VAT @40%</td>
                            <td><input type="text" id="txtVat" name="txtVat" readonly</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly</td>
                        </tr>
                        </table>
                </center>
           
            <center>
                <input type="button" class="btn1 btnCalc" name="btnCalc" id="btnCalc" onclick="calcSub()" value="Calculate"/>
                <input type="button" class="btn1 btnClear" name="btnClear" id="btnClear" onclick="AmountClear()" value="Clear"/>
                <input type="submit" class="btn1 btnProceed" name="btnProceed" id="btnProceed" onclick="" value="Continue"/>
            </center>
            
            </form>
        </div>
        <script type="text/javascript">
            function calcSub() {
                //Assigning variablesto the values
                var subAmount = parseFloat(document.getElementById('txtSubTot').value);
                var Blockchain = parseFloat(document.getElementById('Blockchain').value);
                var AutonomousThings = parseFloat(document.getElementById('AutonomousThings').value);
                var ImmersiveExperience = parseFloat(document.getElementById('ImmersiveExperience').value);
                
                // If radio buttons are clicked, values are assigned
                if (document.getElementById("Blockchain").checked) {
                    document.intCalc.txtSubTot.value = Blockchain;
                    subAmount = Blockchain;
                    calculation(subAmount);
                }
                else if (document.getElementById("AutonomousThings").checked) {
                    document.intCalc.txtSubTot.value = AutonomousThings;
                    subAmount = AutonomousThings;
                    calculation(subAmount);
                }
                else if (document.getElementById("ImmersiveExperience").checked) {
                    document.intCalc.txtSubTot.value = ImmersiveExperience;
                    subAmount = ImmersiveExperience;
                    calculation(subAmount);
                }
            }
            //function for calculating the values
            function calculation(parmSTotal) {
                var subTotal = parseFloat(parmSTotal);
                var discCalc = parseFloat(subTotal * 30);
                var vatCalc = parseFloat(subTotal * 40);
                var total = parseFloat(subTotal - discCalc + vatCalc);
                
                //Instering them into the correct feilds 
                document.intCalc.txtDisc.value = discCalc;
                document.intCalc.txtVat.value = vatCalc;
                document.intCalc.txtTotal.value = total;
            }
            function AmountClear() {
                document.getElementById("txtSubTot").value="";
                document.getElementById("txtDisc").value="";
                document.getElementById("txtVat").value="";
                document.getElementById("txtTotal").value="";
            }
            </script>
    </body>
</html>