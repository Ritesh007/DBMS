<html>
    <head>
        	<script language="javascript">
	function valid_change(login)
	{
		var err="";
		err+=valid_curr(login.curr);
		err+=valid_newp(login.newp);
  
		if(err!="")
		{
			window.alert(err);
			return false;
		}
		else
			return true;
	}
	function valid_curr(curr)
	{
		var err="";
		if(curr.value=="")
		{
			curr.style.background="yellow";
			err="Please enter your current password \n";
		}
		else
		{
			curr.style.background="white";
		}
		return err;
	}
	function valid_newp(newp)
	{
		var err="";
		if(newp.value=="")
		{
			newp.style.background="yellow";
			err="Please enter your new password\n";
		}
		else
		{
			newp.style.background="white";
		}
		return err;
	}
 	</script>





    </head>
    <body bgcolor="">
<form name="change" action="ChangePasswordAction.php"  onsubmit="return valid_change(this)" method="post">
<table align="center">
 
    <tr>
        <td><font color='white'>Enter current password:</td>
        <td><input type="password" name="curr"></td>
    </tr>
    <tr>
        <td><font color='white'>Enter new password:</td>
        <td><input type="password" name="newp"></td>
    </tr>
</table>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <input type="submit" value="change">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
<input type="reset" value="cancel">
</form>

</body>
</html>