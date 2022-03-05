<?php
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($con,"DBS");
if(mysqli_connect_error($con))
{
	die("Failed to connect");
}

$hni=$_POST["hni"];

$date=$_POST["<script>document.getElementbyId(\"date\").value</script>"];

$time=$_POST["time"]

$query="insert into hni values (".$date.",".$time.") ;";
$status=mysqli_query($conn,$query);

$num_rows = mysqli_num_rows($status);
if($num_rows != 0)
{
	$rows = mysqli_fetch_assoc($query);
    
    echo "<script>alert(\"Logged In Successfully!!\")</script>"

	echo "<script>window.location.replace(\"http://localhost/\");</script>";
}
else{
	echo "No such user";
    echo "Try Again";
}
if(!($query))
{
	echo mysqli_error($con);
}
?>