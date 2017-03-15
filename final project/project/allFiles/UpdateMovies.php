<html>
    <head>
        <script language="javascript">
	function valid_movies(mve)
	{
		var err="";
		err+=valid_movie(mve.movie);
		err+=valid_theatre(mve.theatre);
    
		if(err!="")
		{
			window.alert(err);
			return false;
		}
		else
			return true;
	}
	function valid_movie(movie)
	{
		var err="";
		if(movie.value=="")
		{
			movie.style.background="yellow";
			err="Please enter movie name \n";
		}
		else
		{
			movie.style.background="white";
		}
		return err;
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
      <form name="movies" action="UpdateMoviesAction.php" method="post" onsubmit="return valid_movies(this)">
        <table align="center">
            <tr><td><font color="white">THEATRE NAME:</td><td><input type="text" name="theatre"></td></tr>
            <tr><td><font color="white">MOVIE NAME:</td><td><input type="text" name="movie"></td></tr>
        </table>
       <center> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" value="enter">&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp<input type="reset" value="cancel"></center>

      </form>
      </body>
</html>