

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
    <script>
    function populate(branch,branch2)
    {
        
       var x=document.getElementById('branch');
       var y=document.getElementById('branch2');
       
       y.innerHTML="";
       if(x.value=="B.Tech"){
        var optionArray=["|","please select one|please select one","cse|CSE","ece|ECE","ee|EE","civil|CIVIL","mechanical|MECANICAL"];
        
       }
       if(x.value=="BBA"){
        var optionArray=["|","please select one|please select one","industry integrated|INDUSTRY INTEGRATED","simple|SIMPLE"];}
         
        if(x.value=="PGDM"){
            var optionArray=["|","pgdm|pgdm"];

        }
       
        for(var option in optionArray){
            var pair=optionArray[option].split("|");
            var newop=document.createElement("option");
            newop.value=pair[0];
            newop.innerHTML=pair[1];
            
            y.options.add(newop);
        
       
        }}
        function placing(branch2)
        {
        var y=document.getElementById('branch2');
     
    

        if(y.value=="cse")
        {
             var dyn=document.getElementById("roll");
             dyn.placeholder="cse-year/class roll";
        }
         if(y.value=="ee")
        {
            var dyn=document.getElementById("roll");
             dyn.placeholder="ee-year/class roll";
        }
         if(y.value=="ece")
        {
            var dyn=document.getElementById("roll");
             dyn.placeholder="ece-year/class roll";
        }
         if(y.value=="civil")
        {
            var dyn=document.getElementById("roll");
             dyn.placeholder="civil-year/class roll";
        }
         if(y.value=="mechanical")
        {
            var dyn=document.getElementById("roll");
             dyn.placeholder="mechanical-year/class roll";
        }
         if(y.value=="industry integrated")
        {
            var dyn=document.getElementById("roll");
             dyn.placeholder="bba-year/class roll";
        }
         if(y.value=="simple")
        {
            var dyn=document.getElementById("roll");
             dyn.placeholder="bba-year/class roll";
        }
         if(y.value=="pgdm")
        {
            var dyn=document.getElementById("roll");
             dyn.placeholder="pgdm-year/class roll";
        }
        document.getElementById("roll").removeAttribute("disabled");
        
        
       }
    </script>

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
    <div id="myCarousel" class="carousel slide"> 
       <!-- Carousel indicators -->
            <ol class="carousel-indicators"> 
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li> 
                <li data-target="#myCarousel" data-slide-to="1"></li>
                 <li data-target="#myCarousel" data-slide-to="2"></li> 
             </ol> 
             <!-- Carousel items --> 
             <div class="carousel-inner">
                <div class="item active"> 
                    <iframe src="frame1.php" height="100%" width="100%">
                </div>
                 <div class="item "> 
                    <iframe src="frame1.php" height="100%" width="100%">
                </div>
                 <div class="item"> 
                    <iframe src="frame1.php" height="100%" width="100%">
                </div>

            
            </div> 
                <!-- Carousel nav -->
                 <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a> 
                 <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
        </div>
        <div class="container">

            <div class="row">
            
                <div class="col-lg-12">
                    <div class="intro-message">
            <h1>Notification - Center</h1>
                        <h3>Registration </h3>
                        <hr class="intro-divider">
                        <div class="kri-login">
                        <form role="form" action="mid.php" method="POST">
                        <!-- progress bar
                          <div class="progress progress-striped active"> 
                          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                           <span class="sr-only">40% Complete</span>
                            </div> 
                            </div>-->
                                            <div class="form-group" >
                                            <input type="text" placeholder="first name" class="form-control" name="fname">
                                             <input type="text" placeholder="last name" class="form-control" name="lname">
                                             <select  class="form-control" id="branch" name="branch"   onchange="populate('branch','branch2')"> 
                                             <option value="no">please select one</option>
                                             <option value="B.Tech">B.Tech</option> 
                                             <option value="BBA">BBA</option>
                                              <option value="PGDM">PGDM</option>
                                              </select>
                                             <select  class="form-control" id="branch2" name="branch2" onchange="placing(this.id)"> 
                                             </select>
                                             <input type="text" placeholder="college roll no." class="form-control" id="roll" disabled name="coroll"> 
                                             <input type="text" placeholder="class roll no." class="form-control" name="clroll">

                                             
                                             <input type="email" placeholder="Email id" class="form-control" name="mail">
                                             <input type="password" placeholder="Password" class="form-control" name="pass">
                                            </div> 
                                             <div class="form-inline  row-fluid">
                                             <input type="submit" class="btn btn-default" value="register me!" name="submit">
                                           </div>
                                           
                                            </form>
                        </div>
                     <!--   <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                            </li>
                            <li>
                                <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                            </li>
                        </ul>-->
                    </div>
                </div>
            </div>

        </div>

        <!-- /.container -->


    </div>
    <!-- /.intro-header -->

   

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
