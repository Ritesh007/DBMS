<html>
    <head>
        <script language="javascript">
	function valid_search1(srch)
	{
		var err="";
		err+=valid_search(srch.mvname);

		if(err!="")
		{
			window.alert(err);
			return false;
		}
		else
			return true;
	}

        function valid_search(search)
	{
		var err="";
		if(search.value=="")
		{
			search.style.background="yellow";
			err="Please enter movie name \n";
		}
		else
		{
			search.style.background="white";
		}
		return err;
	}

        </script>
    </head>
    <body bgcolor="">
        <br/><br/><br/>
      <center><form name="searchmovie" action="SearchMovie.php" method="post" onsubmit="return valid_search1(this)" method="post">
          
      <font color='white'>  Enter movie name:<input type="text" name="mvname">&nbsp&nbsp
        <input type="submit" value="search" name="sub">
      </form></center>


        <?php
           $con= mysql_connect('localhost', 'root','');
           if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
            mysql_select_db('movietable') or die(mysql_error());
         if(isSet($_REQUEST['sub']))
         {
            $movie=$_REQUEST['mvname'];
            $result = mysql_query("SELECT * FROM movies where movie='$movie'");
            $num_results = mysql_num_rows($result);
            $i=1;
            if($num_results>0)
            {
                echo "<table align='center' border='1'>";
                echo "<tr><th><font color='white'>THEATRE</th><th></th><th><font color='white'>AREA</th><th></th><th><font color='white'>FARE</th></tr>";

                while($row = mysql_fetch_array($result))
                {
                echo "<tr>";
                $x=$row['theater'];

                echo "<td><a href='TempForBook.php?&thr=$x'>".$row['theater']."</a></td>";
                echo "<td></td>";
                echo "<td><font color='white'>".$row['area']."</td>";
                echo "<td></td>";
                echo "<td><font color='white'>".$row['fare']."</td>";
                echo "</tr>";
                echo "<tr></tr>";
                echo "<tr></tr>";
                echo "<tr></tr>";
                echo "<tr></tr>";
                }
             echo "</table>";
            }
            else
            {
                echo "There is no movie like ".$movie;
            }
         }
?>
      </body>
</html>