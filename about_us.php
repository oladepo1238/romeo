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
<title>About Us</title>
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
        
        <li><a href="contact_us.php">contact Us</a></li>
      </ul>
    </div>
    <div id="banner"><img src="images/banner_1.jpg" alt="" /></div>
  </div>
  <div id="body_container_inner">
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
         <h3>OUR STAF MEMBER</h3>
        <div class="profile_box"> <span class="photo"><a href="#"><img src="images/pic1.png" alt="" /></a></span>
          <div class="profile_detail">
            <p>Name: <span>MRS M. A OGUNLUSI </span><br />
              Number: <a href="https:/wa.me/+2348146079971"><span>08131200526</span></a><br />
              Location: <span>Ibokun</span><br />
              Bio: <span>We specialize in building Godly relationships,Happy Home and cancelling that can completely change how you interact with your husband, wife or audience. </span> </p>
            <p class="know_more"><a href="#">know more</a></p>
          </div>
        </div>
       <div class="profile_box"> <span class="photo"><a href="#"><img src="images/ta.jpg" alt="" /></a></span>
          <div class="profile_detail">
             <p>Name: <span>Mis A. O Tajudeen </span><br />
              Number: <a href="https:/wa.me/+2348146079971"><span>08131200526</span></a><br />
              Location: <span>Owode Ede </span><br />
              Bio: <span>We specialize in building Godly relationships,Happy Home and cancelling that can completely change how you interact with your husband, wife or audience. </span> </p>
          
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
      <div style="padding:20px 35px 30px 15px;">
        <h1><span>Company</span> Information</h1>
        <div><img src="images/photo-about.jpg" alt="" width="177" height="117" class="aboutus-img" />Welcome to Romeo and juliet match maker  website! We are excited to introduce you to the world of intelligent virtual assistants.<br />
          <br />
        We specialize in building Godly relationships, Happy Home and cancelling that can completely change how you interact with your husband, wife or audience.

We are elated to have you join us. Get ready for a journey you will never forget. Let’s fly together
Welcome, the beautiful customer. Thank you for joining the family. We have prepared the best just for you. Don’t miss out on this!
Good to see you sir/ma. We are super excited to have you here. You can rest assured that we will give you the best service.
 <br />
          <br />
          <br />
          <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <div>
          <h6>Our Advice</h6>
          <div>
Be very careful from who and where you take your relationship and marriage advice. The only advice you can get from a fool is a foolish advice. Anyone who recommends divorce or break up to you at every slight argument with your partner is an enemy that appears like friend.
</div>
        </div>
        <div class="clear"></div>
        <div class="aboutcolumnzone">
          <div class="aboutcolumn1">
            <div>
              <h5>Customer Service</h5>
              <img src="images/ico-med-1.png" alt="" class="abouticon" /> We welcome you to our Office  Blocks C263 Orisunbare  <br />
          Complex Osogbo<br />
          Osun State .
              <div class="insidereadmore"><a href="whats.php"></a></div>
            </div>
          </div>
          <div class="aboutcolumn2">
            <div>
              <h5>TELL YOURSELF, IT'S OKAY TO CRY: </h5>
              <img src="images/ico-med-2.png" alt="" class="abouticon" /> It's okay to process your feelings, the hurts and the pains. You're an emotional being, it is really okay to cry.. cry all you want but don't get soaked up in the pains. After crying out the hurts, dust up yourself and wear your heart of self-worth with dignity again.
              <div class="insidereadmore"><a href="#">Read More...</a></div>
            </div>
          </div>
          <div class="clear"></div>
          <div class="aboutcolumn1">
            <div>
              <h5>BE CAREFUL OF EXTREME CARE FROM THE OPPOSITE GENDER:</h5>
              <img src="images/ico-med-3.png" alt="" class="abouticon" /> When people suffer heartbreaks, most times they are at a very critical and vulnerable state with their emotions. It is very easy for them to let down their walls and guards in a bid to gain succor, empathy and compassion especially from friends of the opposite gender. Be careful when such care presents itself on a platter of gold, else you may get into more trouble while trying to heal.  
              <div class="insidereadmore"><a href="#">Read More...</a></div>
            </div>
          </div>
          <div class="aboutcolumn2">
            <div>
              <h5>TAKE GOOD CARE OF YOURSELF:</h5>
              <img src="images/ico-med-4.png" alt="" class="abouticon" /> Make sure your body and mind are as healthy as possible. It's okay if you don't feel much like getting out of bed for the first day or two after a breakup. However, after that, you'll feel a lot better when you start taking care of yourself. Try to stick to a regular sleep routine, get some physical exercise, and eat nutritious meals that make your body feel good. Do things that make you feel relaxed and try saying positive affirmations out loud to yourself, like "I love myself and I am enough."
              <div class="insidereadmore"><a href="#">Read More...</a></div>
            </div>
          </div>
          <div class="clear"></div>
        </div>
        <div>
          <h6>Our Commitment</h6>
          <div> There are only two ways to regret in life. BEFORE AND AFTER. A woman who choose never to be patience for a while might ends up enduring for life. Marriage is not a bed of roses.  </div>
        </div>
      </div>
    </div>
  </div>
  <div id="footer">
    <ul>
      Copyright (c) All rights reserved. Design by Prince Awakan <a href="http://www/wa.me/+2348146079971">Contact Us </a>.
    </ul>
  </div>
</div>
</body>
</html>

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