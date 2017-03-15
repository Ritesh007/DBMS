<html>
    <head>
        <script language="javascript">
	function valid_movies(mve)
	{
		var err="";
		err+=valid_theatre(mve.theatre);

		if(err!="")
		{
			window.alert(err);
			return false;
		}
		else
			return true;
	}

        function valid_theatre(theatre)
	{
		var err="";
		if(theatre.value=="")
		{
			theatre.style.background="yellow";
			err="Please enter theatre name \n";
		}
		else
		{
			theatre.style.background="white";
		}
		return err;
	}


        </script>
    </head>
    <body bgcolor="">
      <center><h3>Enter here....</h3></center>
      <form name="delet" action="DeleteTheatreAction.php" method="post" onsubmit="return valid_movies(this)">
        <table align="center">
            <tr><td><font color="white">THEATRE NAME TO DELETE:</td><td><input type="text" name="theatre"></td></tr>
       
       <tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp<input type="submit" value="ok"></td><td><input type="reset" value="cancel"></td></tr>
</table>
      </form>
      </body>
</html>