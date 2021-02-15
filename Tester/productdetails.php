
<?php
include ("DB_connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Products details</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.php">
                            <img src="images/logo.jpg" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="productdetails.php">
                                <i class="far fa-check-square"></i>Products Details</a>
                        </li>
                          <li>
                            <a href="testingdetails.php">
                                <i class="fas fa-bell"></i>Testing Details</a>
                        </li>
                           <li>
                            <a href="contactdetails.php">
                                <i class="fas fa-calendar"></i>Contact Details</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="index.php">
                    <img src="images/logo.jpg" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="active">
                            <a href="productdetails.php">
                                <i class="far fa-bookmark"></i>Products Details</a>
                        </li>
                           <li>
                            <a href="testingdetails.php">
                                <i class="fas fa-bell"></i>Testing Details</a>
                        </li>
                           <li>
                            <a href="contactdetails.php">
                                <i class="fas fa-calendar"></i>Contact Details</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
         <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                 <div class="account-dropdown__footer">
                                 <a href="Login.php"><i class="zmdi zmdi-power"></i>Logout</a>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                <div class="container-fluid">
                <div class="card-title">
                <h3 class="text-center title-2">Product Details</h3>
                </div>
              <hr>
        
    <center>
   <form action="" method="post">
    <div class="form-group col-md-7">
   <label class="control-label mb-1">Product Name</label>
   <input name="product" type="text" class="form-control">
    
     </div>
<button id="payment-button" type="submit" name="btn" class="btn btn-lg btn-info btn-block col-md-5">ADD</button>
            </form>
          </center>  
                    
                    
<?php

if(isset($_POST['btn']))
{

$pn = $_POST['product'];
$pc = 111;
$ee = 'EE';
$mc = '22';
$rc = 101;
$mcode= $ee.$mc; //EE111
$concat = $pc.$mcode.$rc; // EE11122000


$fetch = "select * from productdetails";
$run = $con->query($fetch);

$result = $run->fetch_array();

if($result==0)
{
$sql = "Insert into productdetails(P_name, P_code, M_code, R_code, P_id) values('$pn', '$pc', '$mcode','$rc','$concat')";

if($con->query($sql)==true)
{

	echo "<script>alert('1 row Inserted!');</script>";
}
else

{
	echo "<script>alert('Error!');</script>";
}


}
else
{

$query1 = "select P_code from productdetails where Id in(select max(Id) from productdetails)";

$run2 = $con->query($query1);

while($result2 = $run2->fetch_array())
{
	$a = $result2['P_code'];
	
}



$max_new = $a + 1;


$concat2 = $max_new.$mcode.$rc;

$sql = "Insert into productdetails (P_name, P_code, M_code, R_code, P_id) values( '$pn', '$max_new', '$mcode','$rc','$concat2')";
if($con->query($sql)==true)
{

	echo "<script>alert('1 row Inserted!');</script>";
}

else
{
	echo "<script>alert('Error!');</script>";
	}

}


}
?>
     <br>
    
    <div  class="table-responsive m-b-40">
  <table class="table table-borderless table-data3">
  
<thead>
	<tr>
		<th>Product Name</th>
		<th>Product Code</th>
        <th>Manufacture Code</th>
        <th>Revise Code</th>
        <th>Product Id</th>
	</tr>
</thead>


  <tbody>
<?php


$sql2 = "Select * from productdetails";

$result1 = $con->query($sql2);



if($result1->num_rows > 0) 
{
	
while($row2=$result1->fetch_array())
{
	echo "<tr>";
	echo "<td>" . $row2['P_name'] . "</td>";
	echo "<td>" . $row2['P_code'] . "</td>";
	echo "<td>" . $row2['M_code'] .  "</td>";
	echo "<td>" . $row2['R_code'] . "</td>";
	echo "<td>" . $row2['P_id'] . "</td>";
	echo "</tr>";
}
}


else
{
	echo "<script>alert('Record Empty!');</script>";
}

?>
  </tbody>
</table>
</div>
                    
                        <br><br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
