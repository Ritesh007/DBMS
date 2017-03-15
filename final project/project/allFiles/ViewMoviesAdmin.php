<html><body bgcolor="green">
<?php
           $con= mysql_connect('localhost', 'root','');
           if (!$con){
  die('Could not connect: ' . mysql_error());
  }
   mysql_select_db('mtrs') or die(mysql_error());

                        $result=mysql_query("SELECT theatre,movie,area FROM movies");
   echo" <table border='0'><th>MOVIE</th><th></th><th>THEATRE</th><th></th><th>AREA</th></tr>";


    while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td >" . $row['movie'] . "</td>";
  echo "<td></td>";
  echo "<td >" . $row['theatre'] . "</td>";
  echo "<td></td>";
  echo "<td >" . $row['area'] . "</td>";
  echo "</tr>";
  echo "<tr></tr>";
    echo "<tr></tr>";
  echo "<tr></tr>";
  echo "<tr></tr>";

  }
 echo "<a href='Update.php' target='rest'>Update</a>";
echo "</table></body><html>";

mysql_close($con);
?>
</body></html>

  
