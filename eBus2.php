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
        <title>Kirwan Ltd - Customer Details</title>
        <style>
        body{
  background-image: url(img/logo.png);
  background-size: cover;
  background-size: 15%;
  background-repeat: no-repeat;
  background-color: #5c9ea3;
  
  
}
h1{
   font-family: Lucida Console,monospace;
   color: white;
}
td,tr{
   color: white;
} 

</style>
    </head>
    <body>
        <div class="form">
            <form name="Details" method="post" action="ebus3.php">
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b></b></td>
                            <td><b>Enter in your details below</b></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" id="txtName" name="txtName" value=""></td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td><input type="tel" id="txtNum" name="txtNum" 
                         pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" 
                         title="Format: 123-456-7890" required>
                        
                        </td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" id="psw" name="psw" 
                                       pattern="[0-9]{4}" 
                                       title="Must contain four numbers" required></td>
                        </tr>
                        <tr>
                            
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>" /></td>
                        </tr>
                    </table>
               </center>
                <center>
                  <input type="submit" name="btnContinue" onclick="" value="Continue" />  
                </center>
       </div>
     </form>
    </body>
</html>