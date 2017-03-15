<?php
           $con= mysql_connect('localhost', 'root','');
           if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
            mysql_select_db('movietable') or die(mysql_error());






    $theatre=$_REQUEST["theatre"];
    $table=$theatre."ticket";


    $qry="DELETE FROM `movietable`.`movies` WHERE `movies`.`theater` = '$theatre'";
    $qry1="DROP TABLE $table";
    if (mysql_query($qry))
    {
        if (mysql_query($qry1))
        {
        echo"<center><br/><br/><font color='white'>Deleted... </font></center>";
        }
    }
    else
    {
        echo "<center><br/><br/><font color='white' size='6'>try once again...";
    }


mysql_close($con)
?>



s