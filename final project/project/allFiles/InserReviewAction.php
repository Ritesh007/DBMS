<?php
           $con= mysql_connect('localhost', 'root','');
           if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
            mysql_select_db('movietable') or die(mysql_error());

 $num=$_COOKIE['cust'];




$movie=$_REQUEST["movie"];

$date=$_REQUEST["date"];
$review=$_REQUEST["review"];


$qry="INSERT INTO `movietable`.`review` (`uname`, `movie`, `date`, `review`) VALUES ('$num', '$movie', '$date', '$review');";
if (!mysql_query($qry))
  {
  die("<font color='white'>try again ");
  }?>
<font color='yellow'>YOUR SUCCESSFULLY added <br/>
    

<?php
mysql_close($con)
?>



