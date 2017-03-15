<?php
           $con= mysql_connect('localhost', 'root','');
           if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
            mysql_select_db('movietable') or die(mysql_error());





$name=$_COOKIE["cust"];
$upass=$_REQUEST["upass"];

$mail=$_REQUEST["mail"];
$address=$_REQUEST["address"];
$city=$_REQUEST["city"];
$state=$_REQUEST["state"];
$country=$_REQUEST["country"];
$phno=$_REQUEST["phno"];

$qry =" UPDATE `movietable`.`members` SET `upass` = '$upass',`mail` ='$mail',
`address` = '$address',`city` = '$city',`state` = '$state',
`country` = '$country',`phoneno` = '$phno' WHERE `members`.`uname` = '$name'";

if (!mysql_query($qry))
  {
  die("<font color='white'>try again ");
  }
  else
  {
      die("<br/><br/><br/><center><a href='ViewCustomersPersonal.php'><font color='white'>see your profile...</font></a></center>");
  }?>
<?php
mysql_close($con)
?>



