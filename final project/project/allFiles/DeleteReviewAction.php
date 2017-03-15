<?php
           $con= mysql_connect('localhost', 'root','');
           if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
            mysql_select_db('movietable') or die(mysql_error());
			$num=$_COOKIE['cust'];
			$movie=$_REQUEST['movie'];
			//$theatre=$_REQUEST["theatre"];
    //$table=$theatre."ticket";

	$qry="DELETE FROM `movietable`.`review` WHERE `review`.`movie`='$movie' and `review`.`uname`='$num'";
   // $qry1="DROP TABLE $table";
   $sy=mysql_num_rows($qry);
    if (mysql_query($qry))
    {
        //if (mysql_query($qry1))
        //{
        echo"<center><br/><br/><font color='white'>Deleted... </font></center>";
        //}
    }
    else
    {
        echo "<center><br/><br/><font color='white' size='6'>try once again...$num $movie $sy ";
    }


mysql_close($con)
?>