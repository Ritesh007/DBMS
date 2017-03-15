<?php
           $con= mysql_connect('localhost', 'root','');
           if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
            mysql_select_db('movietable') or die(mysql_error());





$uname=$_REQUEST["uname"];
$upass=$_REQUEST["upass"];

$mail=$_REQUEST["mail"];
$address=$_REQUEST["address"];
$city=$_REQUEST["city"];
$state=$_REQUEST["state"];
$country=$_REQUEST["country"];
$phno=$_REQUEST["phno"];
$securityq=$_REQUEST["securityq"];
$answer=$_REQUEST["answer"];
$fil="cust";
$qry="INSERT INTO `movietable`.`members` (`uname`, `upass`, `mail`, `address`, `city`, `state`, `country`, `phoneno`, `securityQ`, `ans`, `type`) VALUES ('$uname', '$upass', '$mail', '$address', '$city', '$state', '$country', '$phno', '$securityq', '$answer', '$fil');";
if (!mysql_query($qry))
  {
  die("<font color='white'>try new user ");
  }?>
<font color='yellow'>YOUR SUCCESSFULLY REGISTERED <br/>
   

<?php
mysql_close($con)
?>



