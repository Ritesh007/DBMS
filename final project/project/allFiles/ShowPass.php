<html><body bgcolor="">
<?php
           $con= mysql_connect('localhost', 'root','');
           if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
            mysql_select_db('movietable') or die(mysql_error());





$uname=$_REQUEST["uname"];
$securityq=$_REQUEST["securityq"];
$answer=$_REQUEST["answer"];
$i=0;
echo "<center><h3><br/><br/><br/>";

 $result = mysql_query("SELECT securityQ,ans,upass FROM members where uname='$uname'");
 if($result)
 {
            $row = mysql_fetch_array($result);
            
              
                if (($row['securityQ']==$securityq) && ($row['ans']==$answer))
                {
                  
                echo "<font color='white'>your password is :  </font><font color='red' size='10'>".$row['upass']."</font>";
                }
                else
                {
                    echo "<font color='white'>your q and answer is not matching...</font>";
                }
}
else
{
     echo "<font color='white'>there is no user name like that...</font>";

}
echo "</h3></center>";

?>
</body></html>