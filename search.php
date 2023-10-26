
<?php
require 'server.php';

if (isset($_POST['submit'])) {
$gsm=$_POST['gsm'];	
	
$result = "SELECT * FROM romeo where gsm='$gsm'";
$result_run=mysqli_query($conn,$result);

while($row=mysqli_fetch_array($result_run)){



?>
<form method="POST" >
	
<<h1>ROMEO AND JULIET MATCHMAKERS</h1>
<h2>MATCHMAKERS AND MARRIAGE COUNCELLORS</h2>
<h3>08029189819,08034993019</h3></div>
<h4>REGISTRATIONS FORM</h4>
<?php
echo "<h1 style='background-color:red'> This is the  we passed from our previous page <br>" . $gsm . "</h1>";
?>

  <strong>1. Name :-</strong><input  type="name" name="name"   value=" <?php echo $row['name'];?>">
 <strong>2. Contact Address  :- </strong> <input  type="name" name="present"   value=" <?php echo $row['present'];?>"><br>
<strong>3. Tel. (G.S.M)  :-</strong>  <input  type="name" name="gsm"   value=" <?php echo $row['gsm'];?>">

 <strong>4. Name of place of work  :-</strong>  <input  type="name" name="work"   value="<?php echo $row['work'];?>">
  <strong>5. Office Address    :-</strong>  <input  type="name" name="office"   value="<?php echo $row['office'];?>">
  <strong>6. Home town Address   :-</strong>  <input  type="name" name="home"   value="<?php echo $row['home'];?>">

 <strong>7. State :-</strong>  <input  type="name" name="home"   value=" <?php echo $row['state'];?>">
  <strong>8. Local Gov. Area   :-</strong>  <input  type="name" name="home"   value=" <?php echo $row['lga'];?>">
  <strong>9. Town  :-</strong>  <input  type="name" name="home"   value="<?php echo $row['town'];?>">
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
   
</form>
<?php

}
}



?>





<html>

<body>
	
<form action="" method="POST">

<input type="search" name="gsm" placeholder="seach data by ID"><br>	
<input type="submit" name="submit" placeholder="search data" value="search">






</form>



<style>
	
	input{
width: 35%;
height: 4%;
border: 10px;
border-radius: 05px;
padding: 8px 15px 8px 15px;
margin: 10px 0px 15px 0px;
box-shadow: 1px 1px 2px 1px green;
font-size: 1rem;


	}


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
     

     .age{
      margin-left:20px 
     }
     h1{
color: black;
text-align: center;
font-size: 40px;
margin-top: 2px;
     }
     h2{
      color: black;
text-align: center;
font-size: 25px;
margin-top: -25px;
     }
     h3{
      color: green;
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
</style>



</body>






 




</html>


















