<?php
if(isset($_GET['submit']))
{
  echo '<script> alert("function 1");</script>';
  $status=0;          // means submit is pressed
  if(!empty($_GET['title'])&&
      !empty($_GET['discription'])&&
      !empty($_GET['dateissue'])&&
      !empty($_GET['from'])&&
      !empty($_GET['for1']))
        {
          echo '<script> alert("function 2");</script>';
          $title=$_GET['title'];
          $discription=$_GET['discription'];
          $coverimage=$_GET['coverimage'];
          $attachment=$_GET['attachment'];
          $dateissue=$_GET['dateissue'];
          $timeissue=$_GET['timeissue'];
          $validity=$_GET['validity'];
          $from=$_GET['from'];
          $for1=$_GET['for1'];
          $for2=$_GET['for2'];
          $for3=$_GET['for3'];
          $connection=mysqli_connect("localhost","root","7838773560","notify");
          $query="INSERT INTO `notice`(`title`, `discription`, `cover`, `attachment`, `dateissue`, `timeissue`, `validity`, `from`, `for1`, `for2`, `for3`) VALUES ('$title','$discription','$coverimage','$attachment','$dateissue','$timeissue','$validity','$from','$for1','$for2','$for3')";
          $result=mysqli_query($connection,$query);
            if($result)
            { 
              echo '<script> alert("function 3");</script>';
                $status=1;

            }
            if(!mysqli_query($connection,$query))
                    {
                      echo '<script> alert("function 4");</script>';
                        printf("\nerrormessage:%s\n",mysqli_error($connection));
                    }
        

        } 
        else
        {
          echo '<script> alert("some are empty");</script>';
        }

}else
{
  echo '<script> alert("submit is not pressed");</script>';
}


?>