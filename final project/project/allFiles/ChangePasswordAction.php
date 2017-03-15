<?php
           $con= mysql_connect('localhost', 'root','');
           if (!$con)
           {
                        die('Could not connect: ' . mysql_error());
            }
            mysql_select_db('movietable') or die(mysql_error());

  $num=$_COOKIE['cust'];
$curr=$_REQUEST['curr'];
$newp=$_REQUEST['newp'];
$i=0;
$result2 = mysql_query("SELECT upass FROM members where uname='$num'");
if($result2)
{
 $row = mysql_fetch_array($result2);
            
                if ($row['upass']==$curr)
                {
                  mysql_query("UPDATE members SET upass = '$newp'
WHERE uname = '$num' ");
                
                   header ('Location: CustomerHomeSec2.php');
                }
                else
                {
             header ('Location: CustomerHomeSec.php');

                }

            
}
else
{
    echo "enter correct details...";
}

?>
