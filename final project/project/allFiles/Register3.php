<html>
 <head>
	<script language="javascript">
	function valid_func(register)
	{
		var err="";
		err+=valid_pass(register.upass);
                err+=valid_mail(register.mail);
		err+=valid_adrs(register.address);
		err+=valid_city(register.city);
		err+=valid_state(register.state);
		err+=valid_country(register.country);
		err+=valid_phno(register.phno);


	if(err!="")
		{
			window.alert(err);
			return false;
		}
		else
			return true;
	}
	function valid_mail(mail)
	{
		var err="";
		var reg=/^[a-zA-Z0-9]+(\.[a-zA-Z0-9])*[@a-zA-Z0-9]+(\.[a-zA-Z0-9])*(\.[a-zA-Z0-9]+)$/;
		if(mail.value=="")
		{
			mail.style.background="yellow";
			err="Please enter your mail id \n";
		}

		else if(!reg.test(mail.value))
		{
			mail.style.background="yellow";
			err="Your mail id is invalid \n"
		}
		else
		{
			mail.style.background="white";
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



	</script>
  </head>
  <body bgcolor=""><center><font color="green" size='5'>Edit your detials</font></center>
	<form name="register" action='EditDetailsAdmin.php' onsubmit='return valid_func(this)' method='post'>
	<table align="center">

		<tr><td><font color="white">Password</font></td> <td><input type="password" name="upass"/></td></tr>

		<tr><td><font color="white">Email id</font></td> <td><input type="text" name="mail"/></td></tr>

                <tr><td><font color="white">Address</font></td> <td><input type="text" name="address" /></td></tr>

		<tr><td><font color="white">City</font></td> <td><input type="text" name="city" /></td></tr>

		<tr><td><font color="white">State</font></td> <td><input type="text" name="state" /></td></tr>

		<tr><td><font color="white">Country</font></td> <td><input type="text" name="country" /></td></tr>

		<tr><td><font color="white">Ph.No</font></td> <td><input type="text" name="phno" /></td></tr>


	</table>

	<table align="center">

            <tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" value="Save" /></td>
            <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="reset" value="Cancel"/></td>
           </tr>

	</table>

	</form>

        <center><a href="ViewAdminPersonalProfile1.php">Personal profile</a></center>
 </body>
</html>