<?php
           $con= mysql_connect('localhost', 'root','');
           if (!$con)
           {
                        die('Could not connect: ' . mysql_error());
           }
            mysql_select_db('movietable') or die(mysql_error());

            $news=$_REQUEST["news"];
            $date=$_REQUEST["date"];

            $qry="INSERT INTO `movietable`.`news` (`date`,`news`)
VALUES ('$date','$news')";
if (!mysql_query($qry))
  {
  die('try once more... ');
  }
  else
  {?><center>
<font color='yellow'>YOUR SUCCESSFULLY ENTERED</font></center>


<?php
  }
mysql_close($con)
?>
