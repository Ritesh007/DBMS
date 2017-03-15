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
		 echo "<tr><th><font color='white'>DATE</th><th></th><th></th><th></th><th></th><th></th><th><font color='white'>News</th><th></th></tr>";
<?php
    while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td></td>";
  echo "<td></td>";
  echo "<td></td>";
  echo "<td bgcolor=''><font color='white'>" . $row['date'] . "</font></td><td></td><td></td>";
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