<?php
	if(isset($_POST['submit']))
	{
		if(!empty($_POST['roll'])&&(!empty($_POST['password'])))
		{
			$uid=$_POST['roll'];
			$password=$_POST['password'];
			$connection=mysqli_connect('localhost','root','','notify');
			$query="SELECT * FROM `user-db` WHERE colleger='$uid'";
			$result=mysqli_query($connection,$query);
			if($result)
			{
				while($row=mysqli_fetch_array($result,MYSQLI_NUM))
				{
				if($password==$row[7])
				{
					echo '<script> alert "congratulations!!! you are logged in successfully" ;</script>';
					if($row[8]=='teacher')
					{
						session_start();
						$_SESSION['username']=$row[0];
						$_SESSION['who']=$row[8];
						header("refresh:0.1; url=teacherp.php");
					}
					if($row[8]=='student')
					{
						session_start();
						$_SESSION['username']=$row[0];
						$_SESSION['who']=$row[8];
						header("refresh:0.1; url=userp.php");
					}
					if($row[8]=='admin')
					{
						session_start();
						$_SESSION['username']=$row[0];
						$_SESSION['who']=$row[8];
						header("refresh:0.1; url=adminp.php");
					}
				}
				}
			}
			
		}
	}
?>