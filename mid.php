<?php

if(isset($_POST['submit']))
{ 
    if($_POST['radio']=='student')
    {
       
        if
            (!empty($_POST['fname'])&&
            !empty($_POST['lname'])&&
            !empty($_POST['branch'])&&
            !empty($_POST['branch2'])&&
            !empty($_POST['coroll'])&&
            !empty($_POST['clroll'])&&
            !empty($_POST['mail'])&&
            !empty($_POST['pass']))
        
        { 

            $status=0;
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $course=$_POST['branch'];
            $branch=$_POST['branch2'];
            $college=$_POST['coroll'];
            $classr=$_POST['clroll'];
            $mail=$_POST['mail'];
            $password=$_POST['pass'];
            $who='student';
         
            $connection=mysqli_connect("localhost","root","7838773560","notify");
            $query2="SELECT * FROM `user-db` ";
            $result2=mysqli_query($connection,$query2);
            if($result2)
                {
      
                    while($row=mysqli_fetch_array($result2,MYSQLI_NUM))
                        {
                                                              
                            if(($row[4]==$college)||($row[5]==$classr)||($row[6]==$mail))
                                {
                                   
                                    $status=1;                       // states that roll no is already registered
                                }  
                                                                  
                        }
                }  
            if($status==0)
                {
                    
                   $query="INSERT INTO `user-db`(`fname`, `lname`, `course`, `branch`, `colleger`, `class-roll`, `email`, `pass`, `who`) VALUES ('$fname','$lname','$course','$branch','$college','$classr','$mail','$password','$who')";
                    $result=mysqli_query($connection,$query);

                    if($result)
                    {
                       
                        $status=2;
        
                    }
                 
                }
        }
    }

if($_POST['radio']=='teacher')
    {
        
         if
            (!empty($_POST['fname'])&&
            !empty($_POST['lname'])&&
            !empty($_POST['mail'])&&
            !empty($_POST['pass']))
        
        {
            $status=0;
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $mail=$_POST['mail'];
            $password=$_POST['pass'];
            $who='teacher';
            $college="thr-10/".rand(500,999);
            $connection=mysqli_connect("localhost","root","7838773560","notify");
            $query2="SELECT * FROM `user-db` ";
            $result2=mysqli_query($connection,$query2);
            if($result2)
                {
      
                    while($row=mysqli_fetch_array($result2,MYSQLI_NUM))
                        {
                                                              
                            if($row[6]==$mail)
                                {
                
                                    $status=1;                       // states that roll no is already registered
                                }                                   
                        }
                }  
            if($status==0)
                {
                    $query= "INSERT INTO `user-db`(`fname`, `lname`, `colleger`, `email`, `pass`, `who`) VALUES ('$fname','$lname','$college','$mail','$password','$who')";
                    $result=mysqli_query($connection,$query);

                    if($result)
                        {
                            $status=2;
                        }
                     
                }
        }
    }
}


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
</head>

<body>
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
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="index.php">Log In</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
    
    <div class="intro-header-modi">
       
  <?php          
if(isset($_POST['submit']))
{ 
   
            if($status==2)
            {
                echo '<script> alert("Welcome you are registered now!! ,CHECK your email for login instructions"); </script>';
                header("refresh:0.1; url=index.php");
            }
          
             if($status==1)
            {
                echo '<script> alert("College Roll-no/email-id/ class roll-no is already registered, try again or contact your administration "); </script>';
                header("refresh:0.1;url=caccount.php");
            }
    
        if($status==0)
        {
            echo '<script> alert("fill complete form please and  Try again"); </script>';
            header("refresh:0.1;url=caccount.php");
        }
} ?>




</div>
</body>
</html>