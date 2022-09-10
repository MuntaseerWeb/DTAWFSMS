<?php
require('dbconn.php');
?>

<?php 
if ($_SESSION['PhoneNo']) {
    ?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Delta Team Animal Welfare Foundation(DTAWF)</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php">Delta Team Animal Welfare Foundation(DTAWF) </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav pull-right">
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.php">Your Profile</a></li>
                                    <!--li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li-->
                                    <li class="divider"></li>
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                          <li class="active"><a href="index.php"><i class="menu-icon icon-home"></i>Home
                                </a></li>
                                <li><a href="message.php"><i class="menu-icon icon-inbox"></i>Messages</a>
                                </li>
                                <li><a href="user.php"><i class="menu-icon icon-user"></i>Manage Users </a>
                                </li>
                                <li><a href="animal.php"><i class="menu-icon icon-book"></i>All Animals </a></li>
                                <li><a href="addanimal.php"><i class="menu-icon icon-edit"></i>Add Animal </a></li>
                                <li><a href="requests.php"><i class="menu-icon icon-tasks"></i>Issue/Return Requests </a></li>
                                <li><a href="recommendations.php"><i class="menu-icon icon-list"></i>Animal Recommendations and Message </a></li>
                                <li><a href="current.php"><i class="menu-icon icon-list"></i>Currently Issued Treatments of Animals </a></li>
                            </ul>
                            <ul class="widget widget-menu unstyled">
                                <li><a href="logout.php"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <!--/.span9-->
                    <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Add Animal</h3>
                            </div>
                            <div class="module-body">

                                    
                                    <br >

                                    <form class="form-horizontal row-fluid" action="addanimal.php" method="post">
                                        <div class="control-group">
                                            <label class="control-label" for="Title"><b>Animal Name</b></label>
                                            <div class="controls">
                                                <input type="text" id="title" name="title" placeholder="Name" class="span8" required>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="Rescuer"><b>Rescuer</b></label>
                                            <div class="controls">
                                                <input type="text" id="rescuer1" name="rescuer1" class="span8" required>
                                                <input type="text" id="rescuer2" name="rescuer2" class="span8">
                                                <input type="text" id="rescuer3" name="rescuer3" class="span8">

                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="Owner"><b>Owner</b></label>
                                            <div class="controls">
                                                <input type="text" id="owner" name="owner" placeholder="Owner" class="span8" required>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="Year"><b>Rescued Date</b></label>
                                            <div class="controls">
                                                <input type="text" id="year" name="year" placeholder="Rescued Date" class="span8" required>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="Availability"><b>Number of Animals</b></label>
                                            <div class="controls">
                                                <input type="text" id="availability" name="availability" placeholder="Number of Animals" class="span8" required>
                                            </div>
                                        </div>
                                        

                                        <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" name="submit"class="btn">Add To The Listing</button>
                                            </div>
                                        </div>
                                    </form>
                            </div>
                        </div>

                        
                        
                    </div><!--/.content-->
                </div>

                </div>
            </div>
            <!--/.container-->

        </div>


<div class="footer">
            <div class="container">
            <b class="copyright">&copy; 2021 Delta Team Shelter Management System  </b>All rights reserved.
                <h1><p>Make Your Payment or Donation To Delta Team Welfare Fund <a class="underline" href="https://www.bkash.com/bn/user">Click Here</a></p></h1>
            </div>
        </div>
        
        <!--/.wrapper-->
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>

<?php
if(isset($_POST['submit']))
{
    $title=$_POST['title'];
    $rescuer1=$_POST['rescuer1'];
    $rescuer2=$_POST['rescuer2'];
    $rescuer3=$_POST['rescuer3'];
    $owner=$_POST['owner'];
    $year=$_POST['year'];
    $availability=$_POST['availability'];

$sql1="insert into LMS.animal (Title,Owner,Year,Availability) values ('$title','$owner','$year','$availability')";

if($conn->query($sql1) === TRUE){
$sql2="select max(AnimalId) as x from LMS.animal";
$result=$conn->query($sql2);
$row=$result->fetch_assoc();
$x=$row['x'];
$sql3="insert into LMS.rescuer values ('$x','$rescuer1')";
$result=$conn->query($sql3);
if(!empty($rescuer2))
{ $sql4="insert into LMS.rescuer values('$x','$rescuer2')";
  $result=$conn->query($sql4);}
if(!empty($rescuer3))
{ $sql5="insert into LMS.rescuer values('$x','$rescuer3')";
  $result=$conn->query($sql5);}

echo "<script type='text/javascript'>alert('Success')</script>";
}
else
{//echo $conn->error;
echo "<script type='text/javascript'>alert('Error')</script>";
}
    
}
?>
      
    </body>

</html>


<?php }
else {
    echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
} ?>