<?php
           $con= mysql_connect('localhost', 'root','');
           if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
            mysql_select_db('movietable') or die(mysql_error());

$movie=$_REQUEST["movie"];
$theatre=$_REQUEST["theatre"];

$qry1="SELECT * FROM movies where theater='$theatre'";

if(mysql_query($qry1))
{
    $qry="UPDATE `movietable`.`movies` SET `movie` = '$movie' WHERE `movies`.`theater` = '$theatre'";
    if (!mysql_query($qry))
    {
        die('<center><br/><br/><font color="white">try once again... ');
    }
    else
    {
        echo "<center><br/><br/><font color='white' size='6'>updated";
    }
}
else
{
        echo "<center><br/><br/><font color='white'>no theatre with that name...";

}

mysql_close($con)
?>



