<html>
  <head>
	<script language="javascript">
	function valid_login(check)
	{	
		var err="";
		err+=valid_name(check.uname);
		err+=valid_sq(check.securityq);
		err+=valid_ans(check.answer);
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

		else
		{
			ans.style.background="white";
		}
		return err;
	}
	</script>
  </head>
  <body bgcolor="">
	<center><font color="green" size="4"><u>Get your password here...</u></font></center>
	 <form name="check" onsubmit="return valid_login(this)" action="ShowPass.php" method="post">
		<table align="center">
			<tr><td><font color="white">User Name</font></td><td><input type="text" name="uname"></td></tr>
			<tr><td><font color="white">SecurityQ</font></td><td>
					<select name="securityq">
						<option value="select">select</option>
						<option value="What is ur School Name">What is ur School Name</option>
						<option value="What is ur Pet Name">What is ur Pet Name</option>
						<option value="What is ur fav thing">What is ur fav thing</option>
						<option value="What is ur fav food">What is ur fav food</option>
                                                <option value="my name is">my name is</option>
						<option value="What is ur class teacher name">What is ur class teacher name</option>
					</select></td></tr>
			<tr><td><font color="white">Answer</font></td><td><input type="text" name="answer"></td></tr>
		</table>

		<table align="center">
			<tr><td><input type="submit" value="GetPW" /></td> <td><input type="reset" value="Cancel"/></td></tr>
		</table>
	</form>
  </body>
</html>