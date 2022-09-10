<?php
require('dbconn.php');

$animalid=$_GET['id1'];

$phoneno=$_GET['id2'];

$sql="delete from LMS.record where PhoneNo='$phoneno' and AnimalId='$animalid'";

if($conn->query($sql) === TRUE)
{
	$sql1="insert into LMS.message (PhoneNo,Msg,Date,Time) values ('$phoneno','Your request for issue of AnimalId: $animalid  has been rejected',curdate(),curtime())";
 $result=$conn->query($sql1);
echo "<script type='text/javascript'>alert('Success')</script>";
header( "Refresh:0.01; url=issue_requests.php", true, 303);
}
else
{
	echo "<script type='text/javascript'>alert('Error')</script>";
    header( "Refresh:0.01; url=issue_requests.php", true, 303);

}




?>