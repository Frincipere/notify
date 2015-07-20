<?php
if(isset($_POST['submit']))
{
  
  $status=0;          // means submit is pressed
  if(!empty($_POST['title'])&&
      !empty($_POST['discription'])&&
      !empty($_POST['from'])&&
      !empty($_POST['for1']))
        {
          $id=1;
          $connection=mysqli_connect("localhost","root","7838773560","notify");
          $title=$_POST['title'];
          $discription=$_POST['discription'];
          if(isset($_FILES['coverimage']))
          {
              $name2=$_FILES['coverimage']['name'];
              $mime2=$_FILES['coverimage']['type'];
              $data2=file_get_contents($_FILES['coverimage']['tmp_name']);
              $namec=mysqli_real_escape_string($connection,$name2);
              $mimec=mysqli_real_escape_string($connection,$mime2);
              $datac=mysqli_real_escape_string($connection,$data2);
              $sizec=intval($_FILES['coverimage']['size']);
          }
          
          if(isset($_FILES['attachment']))
          {   $name1=$_FILES['attachment']['name'];
              $mime1=$_FILES['attachment']['type'];
              $data1=file_get_contents($_FILES['attachment']['tmp_name']);
              $namea=mysqli_real_escape_string($connection,$name1);
              $mimea=mysqli_real_escape_string($connection,$mime1);
              $dataa=mysqli_real_escape_string($connection,$data1);
              $sizea=intval($_FILES['attachment']['size']);
            
          }
          
         
          $validity=$_POST['validity'];
          $from=$_POST['from'];
          $for1=$_POST['for1'];
         if(!empty($_POST['for2']))
          {
            $for2=$_POST['for2'];
          }
          else
          {
            $for2="all";
          }
      
          if(!empty($_POST['for3']))
          {
            $for3=$_POST['for3'];
          }
          else
          {
            $for3="all";
          }
      
          $query="INSERT INTO `notice`(`title`, `discription`, `id`, `namec`, `mimec`, `sizec`, `datac`, `namea`, `mimea`, `sizea`, `dataa`, `created`, `validity`, `from`, `for1`, `for2`, `for3`) VALUES ('$title','$discription','$id','$namec','$mimec','$sizec','$datac','$namea','$mimea','$sizea','$dataa',NOW() ,'$validity','$from','$for1','$for2','$for3')";
          $result=mysqli_query($connection,$query);
            

              if($result)           
            { 
              
                $status=1;
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script>
function populate(level1,level2,level3)
{
    
     var z=document.getElementById('level1');    
    var x=document.getElementById('level2');
    var y=document.getElementById('level3');     
    if(z.value!='all')
     {
        document.getElementById("level2").removeAttribute("disabled");
        document.getElementById("level3").removeAttribute("disabled");
    }
}

function rem(){
    document.getElementById('title').removeAttribute('placeholder');
}
function add()
{
   var x= document.getElementById('title');
       x.placeholder="Enter title of notification";
}

 function populate1(level2,level3,level1)
{
  
    var z=document.getElementById('level1');    
    var x=document.getElementById('level2');
    var y=document.getElementById('level3');     
    if(z.value=='student')
     {
        
       y.innerHTML="";
       if(x.value=="btech"){

        document.getElementById("level3").removeAttribute("disabled");
        var optionArray=["|","all|all student","cse|COMPUTER SCIENCE","me|MECHANICAL","ce|CIVIL","ee|ELECTRICAL","ece|ELECTRONICS AND COMMUNICATION" ];
        
       }
       if(x.value=="pgdm"){
         document.getElementById('level3').setAttribute("disabled","true");
        
       }
      
        if(x.value=="bba"){
            document.getElementById("level3").removeAttribute("disabled");
        var optionArray=["|","all|all students","general|GENERAL","industry|INDUSTRY INTEGRATED"];
        
       }
       if(x.value=="all"){

        document.getElementById('level3').setAttribute("disabled","true");
        
       }
       
       
        for(var option in optionArray){
            var pair=optionArray[option].split("|");
            var newop=document.createElement("option");
            newop.value=pair[0];
            newop.innerHTML=pair[1];
            
            y.options.add(newop);
        
       
        }
    }
    if(z.value=='staff')
     {
        
       y.innerHTML="";
       if(x.value=="btech"){

        document.getElementById("level3").removeAttribute("disabled");
        var optionArray=["|","all|all staff","cse|COMPUTER SCIENCE","me|MECHANICAL","ce|CIVIL","ee|ELECTRICAL","ece|ELECTRONICS AND COMMUNICATION" ];
        
       }
       if(x.value=="pgdm"){
         document.getElementById('level3').setAttribute("disabled","true");
        
       }
      
        if(x.value=="bba"){
            document.getElementById("level3").removeAttribute("disabled");
        var optionArray=["|","all|all staff","general|GENERAL","industry|INDUSTRY INTEGRATED"];
        
       }
       
       
        for(var option in optionArray){
            var pair=optionArray[option].split("|");
            var newop=document.createElement("option");
            newop.value=pair[0];
            newop.innerHTML=pair[1];
            
            y.options.add(newop);
        
       
        }
    }

  }

</script>

</head>


<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle POST grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-tarPOST="#bs-example-navbar-collapse-1">
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
  <li style="margin:10px" ><a href="adminp.php">home</a></li>
  <li style="margin:10px" class="active" style="overflow:hidden"><a href="newnotification.php" name="new" style="overflow:hidden">add notification</a></li>
   <li style="margin:10px"><a href="allnotification.php" name="old">all notification</a></li> 
   <li style="margin:10px" ><a href="deletenotification.php">delete notification</a></li> 
</ul>
</div></div>
<div class="container">
<div class="row">

    <div style="margin-top:2%">
      <div class="col-lg-offset-2 col-lg-8 col-lg-offset-2 col-md-offset-2 col-md-8 col-md-offset-2 col-sm-offset-2 col-sm-8 col-sm-offset-2">
          <?php
if(isset($_POST['submit']))
{
  if($status==0)
  {
    echo '<div class="alert alert-danger">Error ! Fill all mandatory fields (marked with *).</div>';
  
  }
  if($status==1)
  {
    echo '<div class="alert alert-success">Success! Well done its submitted.</div>';
  }}
  ?>
          <h2> Enter Details</h2>
          <form class="form-horizontal" role="form" method="POST" action="newnotification.php" enctype="multipart/form-data"> 
            <div class="form-group"> 
                <label for="title" class="col-sm-2 control-label">Title *
                </label> 
                    <div class="col-sm-10 col-xs-10">
                        <input type="text" class="form-control" id="title" placeholder="Enter title of notification"  onclick="rem();" onblur="add();" name="title">
                    </div>
            </div>
            <div class="form-group"> 
                <label for="discription" class="col-sm-2 control-label ">Discription *
                </label> 
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="3" placeholder="discription if any*" name="discription"></textarea>
                    </div>
            </div>
              <div class="form-group"> 
                <label for="coverimage" class="col-sm-2 control-label">Cover image</label> 
                    <div class="col-sm-10">
                       <input type="file" multiple accept='image/*' class="form-control" placeholder="images if any*" value="images" name="coverimage">
                    </div>
                    
              </div>
                <div class="form-group"> 
                  <label for="file" class="col-sm-2 control-label">Attachment
                  </label> 
                  <div class="col-sm-10">
                        <input type="file" multiple  class="form-control" placeholder="attachments if any*" value="files" name="attachment">
                  </div>
                </div>
                 
                 <div class="form-group">
                 <label for="datelast" class="col-sm-2 control-label">Validity</label> 
                    <div class="col-sm-4">
                        <select class="form-control" id="validity" name="validity"  onclick="onl()">
                        <script>
                        var val=1;
                        function onl()
                        {
                        var q=document.getElementById("validity");
                        if(val==1)
                        {
                        for(i=1;i<=30;i++)
                        {
                        
                        var x=document.createElement("option");
                        x.setAttribute("value",i);
                        var t=document.createTextNode(i);
                        x.appendChild(t);
                       q.appendChild(x);
                       val=2;
                        }}}
                        </script></select>
                    </div>  
                    </div>
                  <div class="form-group"> 
                        <label for="authority" class="col-sm-2 control-label">from department *</label> 
                        <div class="col-sm-10">
                          <select  class="form-control" id="authority" name="from">
                            <option value="accounts">accounts</option> 
                            <option value="cse">cse</option>
                            <option value="me">me</option>
                            <option value="ce">ce</option>
                             <option value="ece">ece</option>
                              <option value="ee">ee</option>
                               <option value="bba">bba</option>
                                <option value="pgdm">pgdm</option>
                                <option value="admin">administration</option>
                                <option value="library">library</option>
                                </select>
                        </div>
                  </div>
                  <div class="form-group"> 
                        <label for="people" class="col-sm-2 control-label">for *</label> 
                        <div class="col-sm-10">
                          <select  class="form-control" id="level1" name="for1" onchange="populate(this.id,'level2','level3')">
                             <option value="all">both students and staff</option>
                            <option value="staff">staff</option> 
                            <option value="student">students</option>
                            </select>
                        </div>
                  </div>
                  <div class="form-group"> 
                        <label for="people1" class="col-sm-2 control-label">level2 </label> 
                        <div class="col-sm-10">
                          <select  class="form-control" id="level2" name="for2" onchange="populate1('level2','level3','level1') " disabled="true" >
                         <option value="all"> all students</option>
                          <option value="btech">B.Tech</option>
                          <option value="bba">BBA</option>  
                          <option value="pgdm">PGDM</option> 
                          </select>
                          </div>
                    </div>
                  <div class="form-group"> 
                        <label for="people2" class="col-sm-2 control-label">level 3</label> 
                        <div class="col-sm-10">
                          <select  class="form-control" id="level3" name="for3" disabled="true">
                          
                            </select>
                        </div>
                  </div>
                  <div class="form-group">
                  <input type="submit" class="btn btn-primary btn-lg" name="submit">
                  </div>
          </form>
      </div>
      </div>
    </div>
                            

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
