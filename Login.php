
<?php
include("DB_connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Account Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

    <style>
    
    </style>

</head>
    
<?php

if (isset($_POST['btn']))
{
if (empty($_POST['username']) || empty($_POST['pass'])) 
{

echo "<script>alert('The fileds are required.')</script>";
}

else
{
$username = $_POST['username'];
$password = $_POST['pass'];
    $radio = $_POST['rd'];
    if($radio == "manf")
    {


$query = mysqli_query($con, "select * from manufacture where Username='$username' AND Password='$password'");

$rows = mysqli_num_rows($query);


if($rows > 0)
{
	
echo "<script>alert('Login Successfull!')</script>";
$_SESSION['login_user'] = $username;
header("location: Manufacturer/index.php"); 
} 

else 
{
echo "<script>alert('Username or Password is invalid!')</script>";
}
mysqli_close($con); 


}
    else if($radio == "tester")
    {
        
$query = mysqli_query($con, "select * from tester where Username='$username' AND Password='$password'");

$rows = mysqli_num_rows($query);


if($rows > 0)
{
	
echo "<script>alert('Login Successfull!')</script>";
$_SESSION['login_user'] = $username;
header("location: Tester/index.php"); 
} 

else 
{
echo "<script>alert('Username or Password is invalid!')</script>";
}
mysqli_close($con); 

}
    }
}
?>

    
<body >
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form class="login100-form validate-form" action="" method="post">
					<span class="login100-form-title p-b-33">
						Account Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid username is required:xyz">
						<input class="input100" type="text" name="username" placeholder="Enter Your Username">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass" placeholder="Enter Your Password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
                   <br>
                    <div class="form-inline col-md-12">
                    <div class="col-md-9 ">    
                    <input type="radio" name="rd" required="true" value="manf">Manufacture
                    </div>
                        <div class="col-md-3">
                        <input type="radio" name="rd" required="true" value="tester">Tester
                        </div>
                    </div>
					<div class="container-login100-form-btn m-t-20">
						<button type="submit" name="btn" class="login100-form-btn" style="background-color: #FF7E00">
							Sign in
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>