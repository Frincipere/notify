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
  <li style="margin:10px"><a href="userp.php">home</a></li>
  <li style="margin:10px" class="active"><a href="unread.php">unread notification</a></li>
   <li style="margin:10px"><a href="visitednotification.php">visited notification</a></li> 
   <li style="margin:10px"><a href="allnotificationn.php">all notification</a></li> 
</ul>
</div></div>


<!-- Modal -->
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog">
  <div class="modal-content"> 
<div class="modal-body"> <div class="form-group">
                                            <input type="text" placeholder="Title" class="form-control" name="title">
                                             <div class="form-group"> <textarea class="form-control" rows="3" placeholder="Discription"></textarea> </div>
                                            <div class="form-group"> <input type="file" multiple accept='image/*' class="form-control" placeholder="images if any*" value="images"></div>
                                             <select  class="form-control" id="branch" name="branch"  >
       
                                             
                                             <option value="no">please select one</option>
                                             <option value="all">both student and staff</option> 
                                             <option value="student">student</option>
                                              <option value="staff">staff</option>
                                              </select>
                                             <select  class="form-control" id="branch2" name="branch2"   onchange="populate1('branch2','branch3')"> 
                                             </select>
                                             <select  class="form-control" id="branch3" name="branch3" onchange="populate2('branch2')"> 
                                             </select>
                                             <input type="text" placeholder="college roll no." class="form-control" id="roll" disabled>
                                             <input type="text" placeholder="class roll no." class="form-control">

                                             
                                             <input type="email" placeholder="Email id" class="form-control">
                                             <input type="password" placeholder="Password" class="form-control">
                                            </div> 
                                             <div class="form-inline  row-fluid">
                                             <input type="submit" class="btn btn-default" value="register me!" name="submit">
                                           </div>
                                           
                                            </form></div> 
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close </button>
   <button type="button" class="btn btn-primary"> Submit changes </button> 
   </div> 
   </div><!-- /.modal-content --> 
   </div><!-- /.modal -->
</div>



   

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
