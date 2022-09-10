<?php
require('dbconn.php');

$animalid=$_GET['id1'];
$phoneno=$_GET['id2'];
$dues=$_GET['id3'];

$sql="select Category from LMS.user where PhoneNo='$phoneno'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();

$category=$row['Category'];




$sql1="update LMS.record set Date_of_Return=curdate(),Dues='$dues' where AnimalId='$animalid' and PhoneNo='$phoneno'";
 
if($conn->query($sql1) === TRUE)
{$sql3="update LMS.animal set Availability=Availability+1 where AnimalId='$animalid'";
 $result=$conn->query($sql3);
 $sql4="delete from LMS.return where AnimalId='$animalid' and PhoneNo='$phoneno'";
 $result=$conn->query($sql4);
 $sql6="delete from LMS.renew where AnimalId='$animalid' and PhoneNo='$phoneno'";
 $result=$conn->query($sql6);
 $sql5="insert into LMS.message (PhoneNo,Msg,Date,Time) values ('$phoneno','Your request for return of AnimalId: $animalid  has been accepted',curdate(),curtime())";
 $result=$conn->query($sql5);
echo "<script type='text/javascript'>alert('Success')</script>";
header( "Refresh:0.01; url=return_requests.php", true, 303);
}
else
{
	echo "<script type='text/javascript'>alert('Error')</script>";
    header( "Refresh:1; url=return_requests.php", true, 303);

}





?>