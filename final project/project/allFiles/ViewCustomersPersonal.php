<html>

    <head>
	<script language="javascript">
	function valid_func(register)
	{
		var err="";
		err+=valid_name(register.uname);
		err+=valid_pass(register.upass);
		err+=valid_adrs(register.address);
		err+=valid_city(register.city);
		err+=valid_state(register.state);
		err+=valid_country(register.country);
		err+=valid_phno(register.phno);
		err+=valid_dob(register.dob);

		err+=valid_sq(register.securityq);
		err+=valid_ans(register.answer);
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
		var reg=/^[a-z A-Z 0-9]*$/;
		if(name.value=="")
		{
			name.style.background="yellow";
			err="Please enter your user name \n";
		}
		else if((name.value.length<5)||(name.value.lenght>15))
		{
			name.style.background="yellow";
			err="Your user name should contain min of 5 and max of 15 chars \n";
		}
		else if(!reg.test(name.value))
		{
			name.style.background="yellow";
			err="Your name is invalid \n"
		}
		else
		{
			name.style.background="white";
		}
		return err;
	}

	function valid_pass(pass)
	{
		var err="";
		if(pass.value=="")
		{
			pass.style.background="yellow";
			err="Please enter your pass word \n";
		}
		else if((pass.value.length<5)||(pass.value.lenght>15))
		{
			pass.style.background="yellow";
			err="Your pass word should contain min of 5 and max of 15 chars \n";
		}
		else
		{
			pass.style.background="white";
		}
		return err;
	}
	function valid_adrs(adrs)
	{
		var err="";
		if(adrs.value=="")
		{
			adrs.style.background="yellow";
			err="Plese enter your address \n";
		}
		else if((adrs.value.length<10)||(adrs.value.lenght>50))
		{
			adrs.style.background="yellow";
			err="Your address should contain min of 10 and max of 50 chars\n";
		}
		else
		{
			adrs.style.background="white";
		}
		return err;
	}
	function valid_city(city)
	{
		var err="";
		var reg=/^[a-z A-Z]+$/;
		if(city.value=="")
		{
			city.style.background="yellow";
			err="Please enter your city name \n";
		}
		else if((city.value.length<3)||(city.value.lenght>20))
		{
			adrs.style.background="yellow";
			err="Enter a valid city name \n";
		}
		else if(!reg.test(city.value))
		{
			city.style.background="yellow";
			err="Enter a valid city name\n"
		}
		else
		{
			city.style.background="white";
		}
		return err;
	}
	function valid_state(st)
	{
		var err="";
		var reg=/^[a-z A-Z]*$/;
		if(st.value=="")
		{
			st.style.background="yellow";
			err="Please enter your state name \n";
		}
		else if(!reg.test(st.value))
		{
			st.style.background="yellow";
			err="Enter a valid state name \n"
		}
		else if((st.value.length<3)||(st.value.lenght>20))
		{
			st.style.background="yellow";
			err="Enter a valid state name \n";
		}
		else
		{
			st.style.background="white";
		}
		return err;
	}
	function valid_country(cou)
	{
		var err="";
		var reg=/^[a-z A-Z]*$/;
		if(cou.value=="")
		{
			cou.style.background="yellow";
			err="Please enter your country name \n";
		}
		else if(!reg.test(cou.value))
		{
			cou.style.background="yellow";
			err="Enter a valid country name\n"
		}
		else if((cou.value.length<3)||(cou.value.lenght>20))
		{
			cou.style.background="yellow";
			err="Enter a valid country name \n";
		}
		else
		{
			cou.style.background="white";
		}
		return err;
	}
	function valid_phno(pno)
	{
		var err="";
		if(pno.value=="")
		{
			pno.style.background="yellow";
			err="Please enter your mobile no. \n";
		}
		else if(isNaN(parseInt(pno.value)))
		{
			pno.style.background="yellow";
			err="Enter a valid number\n"
		}
		else if(!(pno.value.length==10))
		{
			pno.style.background="yellow";
			err="Pno having wrong length\n"
		}
		else
		{
			pno.style.background="white";
		}
		return err;
	}
	function valid_dob(dob)
	{
		var err="";
		if(dob.value=="")
		{
			dob.style.background="yellow";
			err="Please enter your dob  \n";
		}
		else if(dob.value.length!=6)
		{
			dob.style.background="yellow";
			err="Your dob is invalid \n"
		}
		else
		{
			dob.style.background="white";
		}
		return err;
	}

	function valid_sq(sq)
	{
		var err="";
		if(sq.value=="select")
		{
			sq.style.background="yellow";
			err="Please select a security q \n";
		}
		else
		{
			sq.style.background="white";
		}
		return err;
	}
	function valid_ans(ans)
	{
		var err="";
		if(ans.value=="")
		{
			ans.style.background="yellow";
			err="Please enter your answer \n";
		}
		else if((ans.length<5)||(ans.length>20))
		{
			ans.style.background="yellow";
			err="Ans shold be between 5 to 20";
		}
		else
		{
			ans.style.background="white";
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

            $name=$_COOKIE["cust"];
            $result3 = mysql_query("SELECT * FROM members where uname='$name'");

            echo '<html><body bgcolor="">';

            echo "<table align='center' color='white' border='0'>";
            $row = mysql_fetch_array($result3);
             
            echo "<tr>"."<td><font color='white'>"."NAME:"."</td><td><font color='white'>".$row['uname']."</td></tr>";
            echo "<tr>"."<td><font color='white'>"."PASSWORD:"."</td><td><font color='white'>".$row['upass']."</td></tr>";
            echo "<tr>"."<td><font color='white'>"."EMAIL:"."</td><td><font color='white'>".$row['mail']."</td></tr>";
            echo "<tr>"."<td><font color='white'>"."ADDRESS:"."</td><td><font color='white'>".$row['address']."</td></tr>";
            echo "<tr>"."<td><font color='white'>"."CITY:"."</td><td><font color='white'>".$row['city']."</td></tr>";
            echo "<tr>"."<td><font color='white'>"."STATE:"."</td><td><font color='white'>".$row['state']."</td></tr>";
            echo "<tr>"."<td><font color='white'>"."COUNTRY:"."</td><td><font color='white'>".$row['country']."</td></tr>";
            echo "<tr>"."<td><font color='white'>"."PHONE no:"."</td><td><font color='white'>".$row['phoneno']."</td></tr>";
            echo "<tr>"."<td><font color='white'>"."SECURITY Q:"."</td><td><font color='white'>".$row['securityQ']."</td></tr>";
            echo "<tr>"."<td><font color='white'>"."ANSWER:"."</td><td><font color='white'>".$row['ans']."</td></tr>";
            echo "</table>";

            echo "<table align='center'><tr><td><form name='viewdetails' action='Register2.php' method='post'>
                <input type='submit' value='EditDetails' name='edit'></form></td></table>";
  




            

?>