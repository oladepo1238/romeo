<?php
require 'server.php';
 $gsm =$_SESSION["gsm"] ; // GET THE VALUE BACK FROM SESSION AND SET IT TO A AVARIABLE CALLED SESSION
 $name =$_SESSION["name"] ; // GET THE VALUE BACK FROM SESSION AND SET IT TO A AVARIABLE CALLED SESSION
$result="select * from romeo where gsm={$gsm}";// QUERY TO GET PARTICULAR DATA BACK USING THE REGISTRATION PHONE NUMBER.

$result=mysqli_query($conn,$result);





?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- responsive style -->
  <link rel="stylesheet" href="css/responsiv.css">
<head>
 <title> <?php echo $name; ?></title>
</head>
<body bgcolor="white">

<?php





while($row=mysqli_fetch_assoc($result))
{
//$counter+=  1;
?>
<div class="container">
<div class="head">

<h1>ROMEO AND JULIET MATCHMAKERS</h1>
<h2>MATCHMAKERS AND MARRIAGE COUNCELLORS</h2>
<h3>08029189819,08034993019</h3></div>
<h4>REGISTRATIONS FORM</h4>
<?php
echo "<h1 style='background-color:red'> This is the phone number we passed from our previous page " . $gsm . "</h1>";
?>

  <div class="bio">1. Full Name   :-   <?php echo $row['name'];?></div>
   <div class="bio">2. Contact Address  :- <?php echo $row['present'];?></div>
   <div class="bio">3. Tel. (G.S.M)  :- <?php echo $row['gsm'];?> </div>
   <div class="bio">4. Name of place of work  :- <?php echo $row['work'];?></div>
   <div class="bio">5. Office Address    :-<?php echo $row['office'];?> </div>
   <div class="bio">6. Home town Address   :-<?php echo $row['home'];?> </div>

    <div class="bio">7. State  :- <?php echo $row['state'];?></div>
   <div class="bio">8. Local Gov. Area   :- <?php echo $row['lga'];?></div>
   <div class="bio">9. Town  :- <?php echo $row['town'];?></div>
   <div class="bio">10. Religion   :- <?php echo $row['religion'];?></div>
   <div class="bio"> 11. Church   :- <?php echo $row['church'];?> </div>
    <div class="bio"> 13. E-mail  :- <?php echo $row['email'];?> </div>
   <div class="bio">14. Facebook   :- <?php echo $row['facebook'];?> </div>


    <div class="bio">15. Name of  Primary School   :- <?php echo $row['pry'];?> </div>
   <div class="bio">16. Name of  Secondary School   :- <?php echo $row['secondary'];?></div>
   <div class="bio">17. Teacher Training   :- <?php echo $row['teacher'];?> </div>
    <div class="bio"> 18. Polytechnic   :- <?php echo $row['poly'];?> </div>
   <div class="bio">19. University  :- <?php echo $row['university'];?></div>
   <div class="bio">20. Other   :-<?php echo $row['other'];?> </div>
   <div class="bio">21. Others Studied   :-<?php echo $row['course'];?> </div>
   <div class="bio">22.Qualification :- <?php echo $row['qualification'];?> </div>

 <div class="bio">23. Profession  :- <?php echo $row['profession'];?></div>
   <div class="bio">24. Status/Position   :- <?php echo $row['position'];?></div>
   <div class="bio">25. Salary Range   :- <?php echo $row['salary'];?></div>
   <div class="bio">26. No of year in the job :- </div>
   <div class="bio">27. Father's Name  :-  <?php echo $row['father'];?>        <h class="age">Age  :- </h><?php echo $row['age'];?>  
     <h class="age">Occupation :- </h> <?php echo $row['occupation'];?></div>
 <br>
  <br> 

<div class="bio">
     <div style="background:black;width: 200px;height: 2px;"><h6>manager Sign/Date</h6> </div> <div style="background:black;width: 200px;height: 2px;margin-left: 400px;"><h6>Applicant Sign/Date</h6> </div>
   </div>
   <?php


}



                    ?>

   <style>
   .container{
 width: auto;
      border: 5px;
      border-width: 5px;
      border-style:double;
      border-radius: 5px;

   }
   .head{
   
    width: auto;
      border: 5px;
      border-width: 5px;
      border-style:double;
      border-radius: 10px;
      background-color: black;
   }
     
     .bio{
width: auto;
      border: ;
      border-width: 4px;
      border-style: ridge;
      padding: 5px 20px;
      margin: 5px;
      border-radius:10px;
     font-size: 5mm  solid;
     word-spacing:5px 25px;
     border-top: transparent;
     }
     .age{
      margin-left:20px 
     }
     h1{
color: white;
text-align: center;
font-size: 40px;
margin-top: 2px;
     }
     h2{
      color: white;
text-align: center;
font-size: 25px;
margin-top: -25px;
     }
     h3{
      color: white;
text-align: center;
margin-top: -20px;
     }

 h6{
 font-size: 15px;     
margin-left: 40px;
margin-top: 10px;
     }




   h4{
 font-size: 30px;     
text-align: center;
margin-top: 10px;
     }
   </style>
</div>
 </body>
 </html>