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
    header("Location:Register.php");
   
   
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
@import url("css/layout.css");
</style>
</head>
<body>
<div id="layout">
  <div id="header"><span class="left_bg"><img src="images/header_bg.gif" alt="" /></span>
    <div id="menu">
      <ul>
        <li class="first"><a class="current" href="index.php">home</a></li>
        <li><a href="about_us.php">about us</a></li>
        <li><a href="comment_box.php">comments-box</a></li>
        <li><a href="privacy.php">privacy</a></li>
        <li><a href="login.php">Record</a></li>
        <li><a href="contact_us.php">contact Us</a></li>
      </ul>
    </div>
    <div id="banner"><img src="images/bane.jpg" alt="" /></div>
  </div>
  <div id="body_container">
    <div id="left_container">
      <div class="user_login">
        <div class="login_box_left">
          <h2><img src="images/user_login.gif" alt="" /></h2>
        </div>
        <div class="login_box_right">
          <form method="POST" autocomplete="off" action="index.php">
  <label>username:</label>
          <input type="text" name="usernameemail" value="" required="name"  id="usernameemail" />
          <label>password:</label>
          <input type="text" name="password" value="" required="password" id="password"/>
          <button type="submit" name="submit"> login</button><br>
          <p>Forgot Your Password? Click here now.</p>
        </div>
      </div>
      <div class="last_added">
        <h3>MEET OUR STAF MEMBER</h3>
        <div class="profile_box"> <span class="photo"><a href="#"><img src="images/pic1.png" alt="" /></a></span>
          <div class="profile_detail">
            <p>NAME: <span>MRS M. A OGUNLUSI </span><br />
              Number: <a href="whatsapp.php"><span>08131200526</span></a><br />
              Location: <span>Ibokun </span><br />
              MESSAGE: <span>We specialize in building Godly relationships,Happy Home and cancelling that can completely change how you interact with your husband, wife or audience. </span> </p>
            <p class="know_more"><a href="whatsapp.php">know more</a></p>
          </div>
        </div>
        <div class="profile_box"> <span class="photo"><a href="#"><img src="images/ta.jpg" alt="" /></a></span>
          <div class="profile_detail">
             <p>NAME: <span>Mis A. O Tajudeen </span><br />
              Number: <a href="whatsapp.php"><span>08131200526</span></a><br />
              Location: <span>Owode Ede </span><br />
              MESSAGE: <span>Marry Because you want to Fulfil DESTINY. I pray to God almighty to give the Best Life Partner to Settle down and enjoy the fruits of marriage in the name of God Almighty. Amen. </span> </p>
                <p class="know_more"><a href="whatsapp.php">know more</a></p>
          </div>
        </div>
        <div class="profile_box last"> <span class="photo"><a href="#"><img src="images/pic_7.gif" alt="" /></a></span>
          <div class="profile_detail">
            <p>Name: <span>Jennifer</span><br />
              Age: <span>19 yrs</span><br />
              Location: <span>Milan</span><br />
              Bio: <span>This is a demo text. Some text can go here. This text is only for the purpose of viewing.</span> </p>
            <p class="know_more"><a href="#">know more</a></p>
          </div>
        </div>
        <div class="find_more_profile">
          <p>Find more profiles</p>
        </div>
      </div>
    </div>
    <div id="right_container">
      <div class="option_detail"> <span class="register"><a href="login.php"><img src="images/pic_1.gif" alt="" border="0" /></a></span> <span class="profile"><a href="comment_box.php"><img src="images/coment.jpg" alt="" border="0" /></a></span> <span class="dating"><a href="#"><img src="images/pic_3.gif" alt="" border="0" /></a></span> </div>
      <div class="partner_search">
        <div class="search_form">
          <h2></h2>
          <form action="#" method="get">
            <fieldset>
            <div class="search_row">
              <div class="search_column_1">
                 <img src="images/bed.jpg" style="width:290px;height: 180px;margin-left: -20px;margin-top: -20px;">
                      
              </div>
              <div class="search_column_2">
                
                 <h2 style="background-color: black;margin-top:130px; margin-left:-60px;font-size:;color:white; font-weight: solid;width:200px;height:10px; border-radius:40px;">HAPPY MARRIAGE </h2>
                 
                
              </div>
            </div>
            <div class="search_row">
              <div class="search_column_1">
               
              </div>
              <div class="search_column_2">
                
              </div>
            </div>
            <div class="search_row">
              <div class="search_column_1">
                
              </div>
              <div class="search_column_2">
                
              
              
                  
              </div>
            </div>
            <div class="search_row">
              <div class="search_column_1">
               
              </div>
              <div class="search_column_2">
               
              </div>
            </div>
            <div class="search_row last">
              <div class="search_column_1">&nbsp;</div>
              <div class="search_column_2">
                
              </div>
            </div>
            </fieldset>
          </form>
        </div>
        <div class="member_advantage">
          <h2 style="color:white;">Be carefull of this</h2>
          <ul>
            <li>Don't Marry Because of SEX,</li>
            <li>Don't Marry because you are getting OLD,</li>
            <li>Don't Marry because you are of AGE,</li>
            <li>Don't Marry because you are LONELY,</li>
            <li>Don't Marry because you Need someone to Support you FINANCIALLY. Don't Marry because you </li>
            <li>Mistakenly Got PREGNANT for Him, Don't Marry because you don't want to LOSE the person, Don't Marry because of Family PRESSURES,</li>
            <li>Marry Because you want to Fulfil DESTINY. I pray to God almighty to give the Best Life Partner to Settle down and enjoy the fruits of marriage in the name of God Almighty. Amen.</li>
           
          </ul>
        </div>
      </div>
      <div class="success_story">
        <h3>Love Message</h3>
        <p>Why Stay alone <span>I will forever be thankful to God for gifting me to you. you are not just my husband/lover; you are my best friend.I know i can always count on you. love you so much</span></p>
        <p>Love Qoute <span>If someone were to have asked me about my ideal woman, i wouldn't have had the words to discribe you.you haqve surpassed all expectation, fantasies, and dreams combined.</span> </p>
        <p><a href="https://google.com/marriage seminar ">more stories</a></p>
      </div>
    </div>
  </div>
  <div id="footer">
    <ul>
      Copyright (c) All rights reserved. Design by Prince Awakan <a href="whatsapp.php">Contact Us </a>.
    </ul>
  </div>
</div>

<style>
  




button{
    cursor: pointer;
    padding: 0px 2px;
  background-color:#171;
  margin-top:0px;
  margin-left:80px ;
  border-radius: 5px;
  transition: 0.1s;
  color: white;
  font-size: large;

}
button:hover {
  background-color:red;
  margin-top:2px;
  margin-left:0px;
  border-radius: 5px;
  transition: 2s;


}

</style>

</body>
</html>
