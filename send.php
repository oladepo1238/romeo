<?php


if(isset($_POST["submit"])){

$name=       $_POST["name"];
$Address=      $_POST["Address"];
$phone=   $_POST["phone"];
$company=        $_POST["company"];
$email=   $_POST["email"];
$message=   $_POST["message"];
 $no_wa=   $_POST["noWa"];
 
header("location:https://api.whatsapp.com/send?phone=$no_wa&text=(1)=Name:$name (2)=Address:$Address (3)=Phone:$phone (4)=Email:$email  (5)=Message:$message");

}{
    echo "<script> window.location=history.go(-1);</script>";


}








?>

