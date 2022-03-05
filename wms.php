<?php
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($con,"DBS");
if(mysqli_connect_error($con))
{
	die("Failed to connect");
}

$wm=$_POST["wm"];

$date=$_POST["<script>document.getElementbyId(\"date\").value</script>"];

$time=$_POST["time"]

$query="insert into wms values (".$date.",".$time.") where wm=".$wm.";";
$status=mysqli_query($conn,$query);

if(!($status))
{
	echo mysqli_error($con);
}
else{
    echo "Booked!"
}
?>