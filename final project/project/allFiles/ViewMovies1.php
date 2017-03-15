<html><body bgcolor="">
<?php
           $con= mysql_connect('localhost', 'root','');
           if (!$con){
  die('Could not connect: ' . mysql_error());
  }
   mysql_select_db('movietable') or die(mysql_error());

                        $result=mysql_query("SELECT theater,movie,area FROM movies");
   echo" <table border='1' align='center'><tr><th><font color='white'>MOVIE</font></th><th></th><th><font color='white'>THEATRE</font></th><th></th><th><font color='white'>AREA</font></th></font></tr>";


    while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td ><font color='white'>" . $row['movie'] . "</td>";
  echo "<td></td>";
  echo "<td ><font color='white'>" . $row['theater'] . "</td>";
  echo "<td></td>";
  echo "<td ><font color='white'>" . $row['area'] . "</td>";
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

  
