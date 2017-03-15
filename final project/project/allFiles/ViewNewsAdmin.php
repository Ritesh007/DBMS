<html><body>
<?php
           $con= mysql_connect('localhost', 'root','');
           if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
            mysql_select_db('movietable') or die(mysql_error());




			$result = mysql_query("SELECT * FROM news order by date desc");?>


        <table align="center" border="1" cellpadding="" cellspacing="3">
<?php
    while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td></td>";
  echo "<td></td>";
  echo "<td></td>";
  $temp=$row['date'];
  echo "<td bgcolor=''><a href='EditNews.php?&dte=$temp'><font color='white'>" . $row['date'] . "</font></a></td><td></td><td></td>";
  echo "<td bgcolor=''><font color='white'>" . $row['news'] . "</font></td>";
  echo "</tr>";
  echo "<tr></tr>";
    echo "<tr></tr>";
  echo "<tr></tr>";
  echo "<tr></tr>";

  }
echo "</table></body><html>";

mysql_close($con);
?>