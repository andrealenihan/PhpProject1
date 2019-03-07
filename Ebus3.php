<!DOCTYPE html>
<html>
<body class="body">
<!-- //Starting the session to get the session variable from the last page-->
<?php
session_start();
$totalValue = $_POST['txtTotal'];
$fullNameValue = $_POST['txtName'];

 echo "Customer Name: ".$fullNameValue.".";
 echo "<br></br>";
echo "The Final Amount is: ".$totalValue.".";
?>

<style> 
   .body{
                
                background-image:url(menubackground.jpeg);
                background-size:100%;
            }
    
            .alert {
                     padding: 20px;
                    background-color: green;
                     color: white;
}

            .closebtn {
                    margin-left: 15px;
                    color: white;
                     font-weight: bold;
                     float: right;
                     font-size: 22px;
                     line-height: 20px;
                   cursor: pointer;
                    transition: 0.3s;
}

            .closebtn:hover {
                 color: black;
            }
    
            .btnReturn {
                
                width: 100%;
            }
            
            .btnReturn {
         background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>

<br>
<br>
<br>
<br>
<br>
<br>



 <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Success!</strong> Your purchase has been successful. Thank you.
</div>


<br>
<br>
<br>


<a class="btnReturn" href="index.php">Return to Main Menu</a
</html>