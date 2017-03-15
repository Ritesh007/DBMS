<?php
           $con= mysql_connect('localhost', 'root','');
           if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
            mysql_select_db('movietable') or die(mysql_error());

            $name=$_COOKIE["admin"];
            $result3 = mysql_query("SELECT * FROM members where uname='$name'");

            echo '<html><body bgcolor="">';
            echo "<table align='center'>";
            $row = mysql_fetch_array($result3);

            echo "<tr>"."<td><font color='white'>"."NAME:"."</td><td><font color='white'>".$row['uname']."</td></tr>";
            echo "<tr>"."<td><font color='white'>"."PASSWORD:"."</td><td><font color='white'>".$row['upass']."</td></tr>";
            echo "<tr>"."<td><font color='white'>"."ADDRESS:"."</td><td><font color='white'>".$row['address']."</td></tr>";
            echo "<tr>"."<td><font color='white'>"."CITY:"."</td><td><font color='white'>".$row['city']."</td></tr>";
            echo "<tr>"."<td><font color='white'>"."STATE:"."</td><td><font color='white'>".$row['state']."</td></tr>";
            echo "<tr>"."<td><font color='white'>"."COUNTRY:"."</td><td><font color='white'>".$row['country']."</td></tr>";
            echo "<tr>"."<td><font color='white'>"."PHONE no:"."</td><td><font color='white'>".$row['phoneno']."</td></tr>";

            echo "<tr>"."<td><font color='white'>"."SECURITY Q:"."</td><td><font color='white'>".$row['securityQ']."</td></tr>";
            echo "<tr>"."<td><font color='white'>"."ANSWER:"."</td><td><font color='white'>".$row['ans']."</td></tr>";

                      echo "<tr><td><form name='viewdetails' action='Register3.php'>
                          <input type='submit' value='EditDetails' name='edit'></form></td>";

            echo "</table>";






?>