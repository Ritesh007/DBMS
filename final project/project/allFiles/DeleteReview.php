<html>
    <head>
        <script language="javascript">
		function valid_review(review)
		{
			var err="";
		if(review.value=="")
		{
			review.style.background="yellow";
			err="Please enter theatre name \n";
		}
		else
		{
			review.style.background="white";
		}
		return err;
		}
		
	function valid_movies(movie)
	{
		var err="";
		err+=valid_review(review.movie);

		if(err!="")
		{
			window.alert(err);
			return false;
		}
		else
			return true;
	}
	</script>
		<body bgcolor="">
      <center><h3>look for review here....</h3></center>
	  <form name="delete" action="DeleteReviewAction.php" method="post" onsubmit="return valid_review(this)">
        <table align="center">
            <tr><td><font color="white">enter the movie name</td><td><input type="text" name="movie"></td></tr>
       
       <tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp<input type="submit" value="ok"></td><td>
		<input type="reset" value="cancel"></td></tr>
</table>
      </form>
      </body>
</html
	