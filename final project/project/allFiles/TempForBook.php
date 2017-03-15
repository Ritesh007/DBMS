<html>
    <head>
        <script language="javascript">
            	function valid_func(book)
	{
		var err="";
		err+=valid_date(book.date);
		err+=valid_time(book.time);
        	if(err!="")
		{
			window.alert(err);
			return false;
		}
		else
			return true;
	}
	function valid_date(date)
	{
		var err="";
		if(date.value=="yyyy-mm-dd")
		{
			date.style.background="yellow";
			err="Please enter date\n";
		}

		else if(date.value=="")
		{
			date.style.background="yellow";
			err="Please enter date\n";
		}
	
		else
		{
			date.style.background="white";
		}
		return err;
	}

	function valid_time(time)
	{
		var err="";
		if(time.value=="select")
		{
			time.style.background="yellow";
			err="Please select a show time q \n";
		}
		else
		{
			time.style.background="white";
		}
		return err;
	}

	</script>
    </head>
    <body bgcolor="">
        <form name="form1" action="BookTicket.php" method="post" onsubmit="return valid_func(this)">
            <table align="center">
                <tr><td><font color="white">Enter date<br/>(2014-04-28 to 2014-04-30):</font></td>
                <td><input type="text" name="date" value="yyyy-mm-dd"></td></tr>
                <tr><td><font color="white">Enter show time:</font></td>
                       <td>
			<select name="time">
				<option value="select">select</option>
                                <option value="11">11</option>
				<option value="2">2</option>
				<option value="6">6</option>
 				<option value="9">9</option>
                        </select>
                    </td>
                   </tr>
                    <tr><td><input type="submit" value="submit"></td><td><input type="reset" value="cancel"></td>
             </tr>
             </table>

<?php
           $temp=$_REQUEST['thr'];

 setcookie('theatre',$temp);
?>


        </form>
    </body>
</html>