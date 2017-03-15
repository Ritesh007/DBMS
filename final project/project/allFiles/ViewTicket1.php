<html>
<?php
          $con= mysql_connect('localhost', 'root','');
           if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
            mysql_select_db('movietable') or die(mysql_error());


$msg=$_COOKIE['message'];
$i=$_COOKIE['count'];
$date=$_COOKIE['date'];
$tempt=$_COOKIE['theatre'];
$thrticket=$tempt."ticket";
$time=$_COOKIE['time'];
$num=$i;

$k=$i;
$j=0;
$tagname[$j] = strtok($msg,'/');
//echo $tagname[$j].'<br/>';

while($i>0)
{
    $j++;
    $tagname[$j] = strtok('/');
    //echo $tagname[$j].'<br/>';
    $i--;
}



while($k>=0)
{
    //echo $tagname[$k].'<br/>';
    $sql=mysql_query("UPDATE `movietable`.`$thrticket` SET `$tagname[$k]` = '0' WHERE `$thrticket`.`date` = '$date' AND `$thrticket`.`time` = '$time'");
//echo "hi";

          $k--;
}




$thr=$_COOKIE['theatre'];

  $result = mysql_query("SELECT * FROM movies WHERE theater='$thr'");

  $row = mysql_fetch_array($result);
  echo"<table align='center'>";

  echo "<br/><br/><br/><br/>";

  echo "<tr><td colspan='2'><center><h1>".$thr."</h1></center></td></tr>";

  echo "<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr><td>Moview Name:</td><td bgcolor='yellow'>" . $row['movie'] . "</td></tr>";

  echo "<tr><td>Address:</td><td>".$row['area']."</td></tr>";

   echo "<tr><td>NO.of seats:</td><td>" . $num . "</td></tr>";

  echo "<tr><td>SEAT NO.s:</td><td>" . $msg . "</td></tr>";

  $payment= $row['fare']*$num;

  echo "<tr><td>Fare:</td><td bgcolor='green'>" .$payment. "</td></tr>";

  echo "<tr><td>Date:</td><td bgcolor='cyan'>" . $date . "</td></tr>";

  echo "<tr><td>Time:</td><td bgcolor='cyan'>" . $time . "</td></tr>";

  echo "<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
      <tr></tr><tr><td colspan='2'></td></tr>";

  echo "<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>";

  echo "<tr><td colspan='2'>THANK YOU... </td></tr>";

  echo "<tr><td></td><td>---Visit again</td></tr>";


  echo "</table></body><html>";

  setcookie('date', '', time()-3600);

  setcookie('thtr', '', time()-3600);

  setcookie('time', '', time()-3600);

  setcookie('count', '', time()-3600);

  setcookie('message', '', time()-3600);

?>

        <div style=position:absolute;left:730;top:40>
                <a href='javascript:window.print()'><img src='db7/printer.png' width='32px' height='32px'></a>

        </div>
</body></html>