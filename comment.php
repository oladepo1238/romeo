<?php
if(isset($_POST["submit"])){
$company=        $_POST["company"];
$name=       $_POST["name"];
$Address=      $_POST["Address"];
$Phone=   $_POST["Phone"];
$email=   $_POST["email"];
$comments=   $_POST["comments"];
 $no_wa=   $_POST["noWa"];
header("location://api.whatsapp.com/send?phone=$no_wa&textCompany:$company 
  Name:$name = Addres$Address =Phone:$Phone = Email:$email = Comments:$comments");

}{
    echo "<script> window.location=history.go(-1);</script>";


}








?>

