<?php
           $con= mysql_connect('localhost', 'root','');
           if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
            mysql_select_db('movietable') or die(mysql_error());
$num=$_COOKIE['cust'];
$movie=$_REQUEST["movie"];
$review=$_REQUEST["review"];
$date=$_REQUEST["date"];


    $qry="UPDATE `movietable`.`review` SET `movie` = '$movie',`review`.`date`='$date',`review`.`review` = '$review' WHERE uname = '$num'";
    if (!mysql_query($qry))
  {
  die("<font color='white'>try again ");
  }
  else
  {
      die("<br/><br/><br/><center><a href='ViewReview.php'><font color='white'>see your changes...</font></a></center>");
  }?>
<?php
mysql_close($con)
?>




