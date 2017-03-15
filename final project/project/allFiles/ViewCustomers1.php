<html><body bgcolor="">
<?php
           $con= mysql_connect('localhost', 'root','');
           if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
            mysql_select_db('movietable') or die(mysql_error());



                        $i=0;
			$result = mysql_query("SELECT * FROM members ");?>
                        
    
    <table border="1">
<?php

  $num= mysql_num_rows($result);

  while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  $x=$row['uname'];
  echo "<td><a href='Edit.php?&unm=$x'><font color='white'>".$i++."</font></a></td>";
  echo "<td><font color='white'>" . $row['uname'] . "</td>";
  echo "<td><font color='white'>" . $row['mail'] . "</td>";
  echo "<td><font color='white'>" . $row['address'] . "</td>";
  echo "<td><font color='white'>" . $row['city'] . "</td>";
  echo "<td><font color='white'>" . $row['state'] . "</td>";
  echo "<td><font color='white'>" . $row['country'] . "</td>";
  echo "<td><font color='white'>" . $row['phoneno'] . "</td>";
  echo "</tr>";
  echo "<tr></tr>";
 

  }
echo "</table>";?>
</body><html>

<?php mysql_close($con);
?>