
<?php
include("server.php");
if(isset($_POST["submit"])){

$usernameemail=   $_POST["usernameemail"];
$password=   $_POST["password"];
$result=mysqli_query($conn,"SELECT * FROM form WHERE username='$usernameemail' OR email='$usernameemail'");
   $row=mysqli_fetch_assoc($result);



   if(mysqli_num_rows($result)>0){


    if($password == $row["password"]){

    $_SESSION['login'] = true;
    $_SESSION['id'] = $row["id"];
    $_SESSION['fname'] = $row["name"];
    header("Location:register.php");
   
   
}
       else{
         echo
                 "<script>alert('Wrong Password ')
                 </script>";
    }

}
    else{
         echo
        "<script> alert('User Not Registered')</script>";
    }

    
      

}



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Link Your Souls</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css" media="screen">



</style>
</head>
<body >

<div class="container"> 
<div class="container-img">
<img src="images/log-1.jpg" style="width: 80px;height: 70px;background:0px;border-radius: 50px; margin-top:10px;margin-left:160px; display: flex;"></div>
<div class="form_con">
	<form method="POST" autocomplete="off" action="login.php">

        
    <label for="usernameemail"></label>
      <input type="text" name="usernameemail" id="usernameemail" required value="" placeholder="Username or Email:"><br>
      <div class="line"></div>
      <label for="password"> </label>
      <input type="password" name="password" id="password" placeholder="Password:"><br>

    <div class="line"></div>

        <button type="submit" name="submit"> login</button><br>
       <h4> please only admin have the asses <a href="registration.php">admin</a></h4>


</form>

</div>
</div> 




<style>
body{
display: flex;
background-image:url(images/bg.jpg) ;
background-size: cover;
}
.container{
display: flex;
background-image: url(images/bed.jpg);
	width: 400px;
	height: 400px;
	margin-left: 30%;
	margin-top: center;
background-size: cover;
border-radius: 20px;

}
.form_con{
	width: 390px;
	height: 300px;
	display: flex;
margin-top: 100px;
background-color:#77fff1;
margin-left:-60%;
border-right:red ;
border-right: white;
border: solid;
border-bottom:10px ;
border-style: dashed;
border-width: thick;
border-radius: 20px;
border-color: blue;





}

input{
background-color:transparent;
width:395px ;
height:40px ;
border:none ;
border-radius: 2px;
box-shadow:red;
border-width:1px ;
border-color:blue;
color:red;
font-size: 1rem;
margin-left: -40px;
border-style:none ;
background-size: cover;
text-align: center;
font-size:5mm;

text-decoration-color: red;


}

.line{

background-color:blue ;
width:100%;
height:5px;
margin-top:-2px;
border-radius: 10px;
margin-left: -3px;

}
.form_con:hover{
transform: ;
display:;
transition: 2s;
background-color:transparent ;
border: transparent;

}

input:hover{
transform: ;
display:;
transition: 2s;
background-color:white;
border: transparent;
}
button{
    cursor: pointer;
    padding: 5px 10px;
  background-color:#171;
  margin-top:10px;
  margin-left:160px ;
  border-radius: 5px;
  transition: 0.1s;
  color: white;
  font-size: large;

}
button:hover {
  background-color:red;
  margin-top:10px;
  margin-left: 170px;
  border-radius: 5px;
  transition: 2s;


}
label{
color: white;
margin:20px;
margin-top:80px;
}
h4{

margin-left: 40px;
color:black;


}
h4 a{
  text-decoration: none;


}

</style>
</body>
</html>