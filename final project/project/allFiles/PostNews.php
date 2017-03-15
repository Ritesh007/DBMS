<html>
    <head>
        <script language="javascript">
	function valid_news(news1)
	{
		var err="";
		err+=valid_newss(news1.news);
		err+=valid_date(news1.date);

		if(err!="")
		{
			window.alert(err);
			return false;
		}
		else
			return true;
	}
	function valid_newss(news)
	{
		var err="";
		if(news.value=="")
		{
			news.style.background="yellow";
			err="Please enter news \n";
		}
		else
		{
			news.style.background="white";
		}
		return err;
	}
        function valid_date(date)
	{
		var err="";
		if(date.value=="")
		{
			date.style.background="yellow";
			err="Please enter date \n";
		}
		else
		{
			date.style.background="white";
		}
		return err;
	}

        </script>
    </head>
    <body bgcolor="">
      <center><h3><font color="green">Enter news here....</font></h3>
      <form name="news" action="PostNewsAction.php" method="post" onsubmit="return valid_news(this)">
       <font color="white"> news:</font><input type="text" name="news"><br/><font color="white">
           &nbsp&nbspdate:</font><input type="text" name="date" value="yyyy-mm-dd"><br/>
        <input type="submit" value="send">&nbsp&nbsp<input type="reset" value="cancel">
      </form></center>
      </body>
</html>