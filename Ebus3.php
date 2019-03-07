<!DOCTYPE html>
<html>
<body class="body">
<!-- //Starting the session to get the session variable from the last page-->
<?php
session_start();
$totalValue = $_POST['txtTotal'];
$fullNameValue = $_POST['txtName'];
 echo "the name is: ".$fullNameValue.".";
 echo "<br></br>";
echo "the total value is ".$totalValue.".";
?>

<style> 
   .body{
                
                background-image:url(menubackground.jpeg);
                background-size:100%;
            }
    
    
</style>



</body>
</html>