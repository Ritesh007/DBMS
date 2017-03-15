<html>
 <head>
	<script language="javascript">
	function valid_func(register)
	{
		var err="";
		err+=valid_name(register.uname);
		err+=valid_pass(register.upass);
                err+=valid_mail(register.mail);
		err+=valid_adrs(register.address);
		err+=valid_city(register.city);
		err+=valid_state(register.state);
		err+=valid_country(register.country);
		err+=valid_phno(register.phno);

		
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
        function valid_name(name)
	{
		var err="";
 		var reg=/^[a-z A-Z 0-9]*$/;

		if(name.value=="")
		{
			name.style.background="yellow";
			err="Please enter your name \n";
		}
                else if((name.value.length<5)||(name.value.lenght>15))
		{
			name.style.background="yellow";
			err="Your user name should contain min of 5 and max of 15 chars \n";
		}
                else if(!reg.test(name.value))
		{
			mail.style.background="yellow";
			err="Your name is invalid \n"
		}

		else
		{
			name.style.background="white";
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
  <body bgcolor=""><center><font color="green" size='5'>REGISTRATION FORM</font></center>
	<form name="register" action='RegisterAction.php' onsubmit='return valid_func(this)' method='post'>
	<table align="center">

		<tr><td><font color="white">Username</font></td> <td><input type="text" name="uname" /></td></tr>

		<tr><td><font color="white">Password</font></td> <td><input type="password" name="upass"/></td></tr>
		
		<tr><td><font color="white">Email id</font></td> <td><input type="text" name="mail"/></td></tr>

                <tr><td><font color="white">Address</font></td> <td><input type="text" name="address" /></td></tr>
		
		<tr><td><font color="white">City</font></td> <td><input type="text" name="city" /></td></tr>
		
		<tr><td><font color="white">State</font></td> <td><input type="text" name="state" /></td></tr>
		
		<tr><td><font color="white">Country</font></td> <td><input type="text" name="country" /></td></tr>
																									
		<tr><td><font color="white">Ph.No</font></td> <td><input type="text" name="phno" /></td></tr>
																					

		<tr><td><font color="white">SecurityQ</font></td> <td>
									<select name="securityq">
										<option value="select">select</option>
										<option value="What is ur School Name">What is ur School Name</option>
										<option value="What is ur Pet Name">What is ur Pet Name</option>
										<option value="What is ur fav thing">What is ur fav thing</option>
										<option value="What is ur fav food">What is ur fav food</option>
										<option value="What is ur class teacher name">What is ur class teacher name</option>
									</select>
								</td></tr>

		<tr><td><font color="white">Answer</font></td> <td><input type="text" name="answer"></td></tr>

		<tr></tr>

	</table>
		
	<table align="center">
	
		<tr><td><input type="submit" value="Register" /></td> <td><input type="reset" value="Cancel"/></td></tr>

	</table>
	
	</form>
 </body>
</html>