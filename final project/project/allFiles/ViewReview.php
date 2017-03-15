<html><body bgcolor="">
<?php
           $con= mysql_connect('localhost', 'root','');
           if (!$con){
  die('Could not connect: ' . mysql_error());
  }
   mysql_select_db('movietable') or die(mysql_error());
   $num=$_COOKIE['cust'];

                        $result=mysql_query("SELECT * FROM review where uname='$num'");
   echo" <table border='1' align='center'><tr><th><font color='white'>Date</th><th></th><th><font color='white'>MOVIE</th><th></th><th><font color='white'>Uname</th><th></th><th><font color='white'>Review</th></tr>";


    while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td ><font color='white'>" . $row['date'] . "</td>";
  echo "<td></td>";
  echo "<td ><font color='white'>" . $row['movie'] . "</td>";
  echo "<td></td>";
  echo "<td ><font color='white'>" . $row['uname'] . "</td>";
  echo "<td></td>";
  echo "<td ><font color='white'>" . $row['review'] . "</td>";
  echo "</tr>";
  echo "<tr></tr>";
    echo "<tr></tr>";
  echo "<tr></tr>";
  echo "<tr></tr>";

  }
echo "</table></body><html>";

mysql_close($con);
?>
</body></html>
                       
  