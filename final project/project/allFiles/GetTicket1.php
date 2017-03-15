<html>    <head>
	<script language="javascript">
	function valid_func(register)
	{
		var err="";
		err+=valid_name(register.uname);
		err+=valid_number(register.number);
		err+=valid_pin(register.pin);
		err+=valid_type(register.type);
		if(err!="")
		{
			window.alert(err);
			return false;
		}
		else
			return true;
	}
	function valid_name(name)
	{
		var err="";
		if(name.value=="")
		{
			name.style.background="yellow";
			err="Please enter your user name \n";
		}

		else
		{
			name.style.background="white";
		}
		return err;
	}
	function valid_number(number)
	{
		var err="";
                if(number.value=="")
		{
			number.style.background="yellow";
			err="Please enter your card number \n";
		}
        	else
		{
			number.style.background="white";
		}
		return err;
	}
	function valid_pin(pin)
	{
		var err="";
		if(pin.value=="")
		{
			pin.style.background="yellow";
			err="Please enter your card pin number... \n";
		}
		else
		{
			pin.style.background="white";
		}
		return err;
	}
	function valid_type(type)
	{
		var err="";
		if(type.value=="")
		{
			type.style.background="yellow";
			err="Please enter your card type... \n";
		}
        	else
		{
			type.style.background="white";
		}
		return err;
	}

	</script>
  </head>
<body>
<?php
           $con= mysql_connect('localhost', 'root','');
           if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
            mysql_select_db('movietable') or die(mysql_error());


            

   //message
                        $msg=$_REQUEST['message'];
                        setcookie('message',$msg);
//count
                        $i=$_REQUEST['count'];
                        setcookie('count',$i);
                        $num=$i;


$j=0;
$tagname[$j] = strtok($msg,'/');
echo $tagname[$j];
echo "<font color='white'>you have selected... ";

while($i>0)
{
    $j++;
    $tagname[$j] = strtok('/');
    echo ','.$tagname[$j];
    $i--;
}
echo'</font>';


/*
while($k>=0)
{
    echo $tagname[$k].'<br/>';
    $sql=mysql_query("UPDATE `movietable`.`$thrticket` SET `$tagname[$k]` = '0' WHERE `$thrticket`.`date` = '$date' AND `$thrticket`.`time` = '$time'");
echo "hi";

          $k--;
}*/
//echo "hi";

$thr=$_COOKIE['theatre'];

  $result = mysql_query("SELECT * FROM movies WHERE theater='$thr'");

  $row = mysql_fetch_array($result);

 $payment= $row['fare']*$num;



echo "<center><h3><font color='green'>Enter your credit card details...</center></h3>";
echo "<form name='credit' action='ViewTicket1.php' method='post' onsubmit='return valid_func(this)' target='_blank'>";
echo "<table align='center'>";

echo "<tr><td><font color='white'>Username</td> <td><input type='text' name='uname' /></td></tr>";

echo "<tr><td><font color='white'>card number</td> <td><input type='text' name='number'/></td></tr>";

echo "<tr><td><font color='white'>pin</td> <td><input type='password' name='pin' /></td></tr>";

echo "<tr><td><font color='white'>type</td> <td><input type='text' name='type' /></td></tr>";

echo "<tr><td><font color='white'>amount</td> <td bgcolor='yellow'>".$payment."</td></tr>";


echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";

echo "<tr><td><input type='submit' value='Enter' /></td><td><input type='reset' value='Cancel'></td></tr></table>";















?>
</body>
</html>