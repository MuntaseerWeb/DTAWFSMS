<?php
require('dbconn.php');

$id=$_GET['id'];

$phone=$_SESSION['PhoneNo'];

$sql="insert into LMS.return (PhoneNo,AnimalId) values ('$phone','$id')";

if($conn->query($sql) === TRUE)
{
echo "<script type='text/javascript'>alert('Request Sent to Admin.')</script>";
header( "Refresh:0.01; url=current.php", true, 303);
}
else
{
	echo "<script type='text/javascript'>alert('Request Already Sent.')</script>";
    header( "Refresh:0.01; url=current.php", true, 303);

}




?>