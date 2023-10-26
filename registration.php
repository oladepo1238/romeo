<?php
require 'server.php';

if(isset($_POST["submit"])){

$name=       $_POST["name"];
$username=   $_POST["username"];
$email=      $_POST["email"];
$password=   $_POST["password"];
$confirmpassword= $_POST["confirmpassword"];
$duplicate=mysqli_query($conn,"SELECT * FROM form WHERE username='$username' OR email='$email'");
    if(mysqli_num_rows($duplicate)>0){
        echo
        "<script> alert('username or Email has already taken')</script>";


    }

else{


    if($password == $confirmpassword){
        $query="INSERT INTO form VALUE('', '$name','$username','$email','$password')";
        mysqli_query($conn,$query);
           echo
        "<script>alert('Registration Sucessfully')</script>";

    }
    else{
         echo
        "<script>alert('Password Does Not Match')</script>";
    }
}

}








?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- responsive style -->
  <link href="css/responsiv.css" rel="stylesheet" />

 <body><div class="con-payment-form">
    <div class="payment-form">

<head>
 <title>registration</title>
</head>
<body>
     <img src="images/log-1.jpg" style="width: 80px;height: 70px;background:0px;border-radius: 50px; margin-top:8px;margin-left: 150px;">
<h1 style="color: white;background: black;margin-top: -6px;">REGISTRATIONS PAAGE</h1>

<br>



<form class=""  action="" method="post" autocomplete="off">
    <label for="name"> Name:</label>
    <input type="text" name="name" id="name" required value=""><br>

     <div class="line"></div>

    
      <label for="username"> Username:</label>
    <input type="text" name="username" id="username" required value=""><br>

     <div class="line"></div>

    
      <label for="email"> Email:</label>
    <input type="email" name="email" id="email" required value=""><br>

     <div class="line"></div>

    
      <label for="password"> Password:</label>
    <input type="Password" name="password" id="password" required value=""><br>

     <div class="line"></div>

    
<label for="confirmpassword">Confirm Password:</label>
    <input type="confirmpassword" name="confirmpassword" id="confirmpassword" required value=""><br>

<div class="line"></div>


    <button type="submit" name="submit"> Register</button>

     <div class="line"></div>


</form>
<a href="login.php">Login</a>



<style>
  
.con-payment-form{
background-color:#1717;
width: cover;
height: 800px;
margin-top: 10px;

}
.payment-form{
background-color:transparent;
width: 400px;
height: 450px;
margin-left: 300px;
border: dotted;
border-width:2px;
border-radius:10px ;
border-color: white;

}
.payment-form:hover{
background-image: url(images/bgg.jpg);


}
input{
background-color: transparent;
width:200px ;
height:30px ;
border:none ;
border-width:1rem ;
border-color: white;
font-size: 1rem;
color: white;

}

.line{

background-color: white;
width: cover;
height: 2px;
margin-top: 8px;


}

button{
    cursor: pointer;
    padding: 5px 25px;
  background-color:#171;
  margin-top:10px;
  margin-left: 170px;
  border-radius: 5px;
  transition: 1s;


}
button:hover {
  background-color:red;
  margin-top:10px;
  margin-left: 170px;
  border-radius: 5px;
  transition: 1s;


}

a{
background-color:white;
text-decoration: none;
padding: 2px 15px;
  margin-top:20px;
  margin-left: 170px;
  border-radius: 5px;
  border-color: blue;
  border-width: 1px;
  border-style: dashed;
 

     
}

label{
color: white;
margin:15px;
font-size: 15px;


}
</style>


 </body>

</body>