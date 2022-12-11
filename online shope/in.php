<?php
include('connect.php');
if(isset($_POST['confirming'])){
    $NAME =$_POST['YourName'];
    $COUNTRY =$_POST['country'];
    $ACCOUNTNUMBER =$_POST['AccountNumber'];
    $CURRENCY =$_POST['Currency'];
    $BRNDNAME =$_POST['BrandName'];
    $YOURORDER =$_POST['YourOrder'];
    $ORDERCOUNT =$_POST['OrderCount'];
    $ADDRESS =$_POST['Address'];
$insert = "INSERT INTO orders (YourName , Country , AccountNumber , Currency , BrandName , YourOrder , OrderCount , Address) VALUES ('$NAME',' $COUNTRY','$ACCOUNTNUMBER','$CURRENCY',' $BRNDNAME','$YOURORDER','$ORDERCOUNT',' $ADDRESS')";
mysqli_query($con,$insert);
}

if(isset($_POST['loggin'])){
    $NAME =$_POST['Name'];
    $EMAIL =$_POST['E-mail'];
    $insert = "INSERT INTO register (Name , E-mail) VALUES('$NAME',' $EMAIL')";
    mysqli_query($con,$insert);
}
?>