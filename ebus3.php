<!DOCTYPE html>
<html>
    <head>
        <title>Kirwan Ltd - Purchase Receipt</title>
        <style>
        body{
  background-image: url(img/logo.png);
  background-size: center;
  background-size: 15% 50%;
  background-repeat: no-repeat;
  Background-color:#5c9ea3;
  
}
h1,td,tr,button{
   font-family: Lucida Console,monospace;
   color: white;
}
echo{
    font-family: Lucida Console,monospace;
   color: white;
}

</style>
    </head>
<body>
<center>
    <h1>Purchase Receipt</h1>
</center>
<br>
<br>
<br>
<a href="EBusinessHomePage.html">Back to Home Page</a>
<!-- //Starting the session to get the session variable from the last page-->
<?php
session_start();
$totalValue = $_POST['txtTotal'];
$phoneNumber = $_POST['txtNum'];
$fullNameValue = $_POST['txtName'];
 echo "Name: ".$fullNameValue.".";
 echo "<br></br>";
 echo "Mobile No: ".$phoneNumber.".";
 echo "<br></br>";
echo "Total Price: ".$totalValue.".";
echo ""
?>

</body>
</html>