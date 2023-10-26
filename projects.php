<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>romeo & juliet matchmaker</title>
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
        <li><a href="comment_box .php">comments-box</a></li>
        <li><a href="privacy.php">privacy</a></li>
        
        <li><a href="contact_us.php">contact Us</a></li>
      </ul>
    </div>
    <div id="banner"><img src="images/banner_11.jpg" alt="" /></div>
  </div>
  <div id="body_container_inner">
    <div id="left_container">
      <div class="user_login">
        <div class="login_box_left">
          <h2><img src="images/user_login.gif" alt="" /></h2>
        </div>
        <div class="login_box_right">
          <label>username:</label>
          <input type="text" name="" value="" />
          <label>password:</label>
          <input type="text" name="" value="" />
          <input type="image" src="images/login_btn.gif" class="login"/>
          <p>Forgot Your Password? Click here now.</p>
        </div>
      </div>
      <div class="last_added">
        <h3>MEET OUR STAF MEMBER</h3>
        <div class="profile_box"> <span class="photo"><a href="#"><img src="images/pic1.png" alt="" /></a></span>
          <div class="profile_detail">
            <p>Name: <span>MRS M. A OGUNLUSI </span><br />
              Number: <a href="whatsapp.php"><span>08131200526</span></a><br />
              Location: <span>Ibokun </span><br />
              MESAGE: <span>We specialize in building Godly relationships,Happy Home and cancelling that can completely change how you interact with your husband, wife or audience. </span> </p>
            <p class="know_more"><a href="#">know more</a></p>
          </div>
        </div>
        <div class="profile_box"> <span class="photo"><a href="#"><img src="images/ta.jpg" alt="" /></a></span>
                   <div class="profile_detail">
             <p>NAME: <span>Mis A. O Tajudeen </span><br />
              Number: <a href="whatsapp.php"><span>08131200526</span></a><br />
              Location: <span>Owode Ede </span><br />
              MESSAGE: <span>Marry Because you want to Fulfil DESTINY. I pray to God almighty to give the Best Life Partner to Settle down and enjoy the fruits of marriage in the name of God Almighty. Amen. </span> </p>
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

<?php
include('database.php');
$result="SELECT *from comments"; 
$result= $conn->query($result);
//if ($result->num_rows >0) {
while($row= $result->fetch_assoc()){

?>




        <div class="find_more_profile">
         <a href="contact_us.php"> <p>Thanks you for your comments we will get back to you OR Contact us by click </p></a>
        </div>
      </div>
    </div>
    <div id="right_container">
    
      <div style="padding:20px 35px 30px 15px;">
        <h1><span></span> </h1>
        <div class="ourprojectrow">
          <h6> <?php echo $row['name'];?></h6>
          <div> <img src="images/comment.png" alt="" width="210" height="139" class="project-img" /> <br />
            <br />
            <br />
           <?php echo $row['message'];?>
            <div class="clear"></div>

<?php } ?>
          </div>
          <br />
        
 