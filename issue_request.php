<?php
require('dbconn.php');

$id=$_GET['id'];

$phone=$_SESSION['PhoneNo'];

$sql="insert into LMS.record (PhoneNo,AnimalId,Time) values ('$phone','$id', curtime())";

if($conn->query($sql) === TRUE)
{
echo "<script type='text/javascript'>alert('Request Sent to Admin.')</script>";
header( "Refresh:0.01; url=animal.php", true, 303);
}
else
{
	echo "<script type='text/javascript'>alert('Request Already Sent.')</script>";
    header( "Refresh:0.01; url=animal.php", true, 303);

}




?>