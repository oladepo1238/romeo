

<?php
require 'server.php';
// session_start();
$result="select * from romeo ";

$result=mysqli_query($conn,$result);





?>
<?php







?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>beulah ra association </title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- DATATABLE STYLE  -->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">

                    <img src="assets/.png" />
                </a>

            </div>

            <div class="right-div">
                
                <a href="index2.php" class="btn btn-info pull-right">LOG OUT</a>
              
                
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="index.php" >DASHBOARD</a></li>
                            
                            <li><a href="index.php">Home</a></li>
                           <li>
                                
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="contact.php">Contact </a></li>
                                     <li role="presentation">REGISTER<a role="menuitem" tabindex="-1" href="table.php"></a></li>
                                </ul>
                            </li>
                            <li><a href="index.php" > ABOUT US</a></li>
                             <li><a href="contact_us.php" >CONTACT</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
     <!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">RECORD</h4>
                
                            </div>

        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          ROMEO AND JULIET MATCHMAKER
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <td>id</td>
<td>Name</td>
<td>phone</td>
<td>location</td>

<td>Church</td>
<td>Age</td>
<td>Email</td>
<td>Qualification </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      
                                                                          <?php
$counter=0;

while($row=mysqli_fetch_assoc($result))
{
$counter+=  1;
?>
<td><?php echo $counter?></td>
<td><?php echo $row['name'];?> </td>
<td><?php echo $row['gsm'];?> </td>

<td><?php echo $row['present'];?> </td>
<td><?php echo $row['religion'];?> </td>

<td><?php echo $row['age'];?> </td>
<td><?php echo $row['email'];?> </td>
<td><?php echo $row['qualification'];?> </td>
     </td>

</tr>

<?php


}



                    ?>
                                      
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
            <!--  -->
    </section>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- DATATABLE SCRIPTS  -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
