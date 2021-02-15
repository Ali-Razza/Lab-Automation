<?php
include ("DB_connection.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


<?php
$sql = "Update testing set Status = 'Verified' WHERE P_id='$_GET[id]'";

if (mysqli_query($con,$sql))
{
echo "<script>alert('Test Verified!')</script>";
 header("Refresh:1; url=testingdetails.php");
}
 else
 {
 echo "Error!";
}
    
$sql2 = "select * from productdetails where P_id='$_GET[id]'";
$r2 = $con->query($sql2);
if($r2->num_rows > 0) 
{
	
while($row2=$r2->fetch_array())
{
	?>
	<input type="hidden" name="pname" value="<?php $row2['P_name'] ?>">
<?php
}
}
?>






</body>
</html>