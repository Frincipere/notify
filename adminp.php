<?php
session_start();
if($_SESSION['username'])
{
$username=$_SESSION['username'];
$who=$_SESSION['who'];
if($who=='admin')
{
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>S.D.I.E.T</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>


<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="#">Satyug Darshan Institute Of Engineering And Technology
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
                <ul class="nav navbar-nav navbar-right">
                    <li>
                      <a href="profile.php"> profile</a>
                    </li>
                    <li>
                     <button class="btn btn-link" style="background:blue"<a href="about.php">logout</a></button>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<div class="intro-header-modi">
<div class="wrapper">
<div class="sidebar-wrapper">
<ul class="nav nav-pills nav-stacked">
  <li style="margin:10px" class="active"><a href="adminp.php">home</a></li>
  <li style="margin:10px"><a href="newnotification.php" name="new">add notification</a></li>
   
   <li style="margin:10px"><a href="deletenotification.php">delete notification</a></li> 
   <li style="margin:10px"><a href="allnotification.php" name="old">all notification</a></li> 
</ul>
</div></div>


 



   

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
<?php
}

if($who=='student')
                    {
                        
                        header("refresh:0.1; url=userp.php");
                    }
if($who=='teacher')
                    {
                       
                        header("refresh:0.1; url=teacherp.php");
                    }}
else {
                        header("refresh:0.1;url=index.php");
                    }                    
?>
