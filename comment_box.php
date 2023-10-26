<?php
require 'server.php';
if(isset($_POST['submit'])){

$name= $_POST['name'];
$message = $_POST['message'];



  $result="INSERT INTO comments VALUE ('','$name','$message')";

   mysqli_query($conn,$result);   
     echo '<script>alert("Successul")</script>';        
    header('location:comment_box.php');



   



exit();

}
?>

}



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>romeo & juliet matchmaker</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css" media="screen">

@import url("css/layout.css");>

</style>
</head>
<body>
<h1>ROMEO AND JULIET MATCHMAKERS</h1><br><br>
<h2>MATCHMAKERS AND MARRIAGE COUNCELLORS</h2><br><br>
<h3>COMMENTS BOX</h3><br><br>



 <form method="POST" >
            
                <strong></strong>
                <td width="280" align="left" valign="top"><input name="name" type="text" size="40" id="name" placeholder="Full Name" /><br>
              <br><br>
               
              
                <strong>  </strong></td>
                <td align="left" valign="top"><textarea name="message" cols="32" rows="6" placeholder="Questions / Comments:"></textarea></td>
             <br>
<br><br>
               
              <button type="submit" name="submit">comments</button>
              </tr>
            
          </form>

          <style>
   form{
text-align: center;
align-items: center;


   }         
strong{ 
color:green;


}
input{
  border-radius:10px;
padding: 10px 10px;

}
textarea{
  border-radius:10px;
padding: 10px 10px;


}

 h1{
color: white;
text-align: center;
font-size: 30px;
margin-top: 2px;
     }
     h2{
      color: green;
text-align: center;
font-size: 25px;
margin-top: -25px;
     }
     h3{
      background-color: black;
      color: white;
text-align: center;
margin-top: -20px;
     }

  button{
    cursor: pointer;
    padding: 5px 25px;
  background-color:#171;
  margin-top:10px;
  margin-left: 30px;
  border-radius: 5px;
  transition: 1s;


}
button:hover {
  background-color:red;
  margin-top:10px;
  margin-left: 100px;
  border-radius: 5px;
  transition: 1s;


}
          </style>