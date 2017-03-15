<html>
    <head>
        <script language="javascript">
	function valid_search2(srch)
	{
		var err="";
		err+=valid_search(srch.trname);

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

     <center> <form name="searchtheatre" action="SearchTheatre.php" method="post" onsubmit="return valid_search2(this)">

        <font color='white'><br/><br/><br/>Enter theatre name:<input type="text" name="trname">&nbsp&nbsp
        <input type="submit" value="search" name="sub">
      </form></center>
<?php
           $con= mysql_connect('localhost', 'root','');
           if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  if(isSet($_REQUEST['sub']))
  {
            mysql_select_db('movietable') or die(mysql_error());

            $theatre=$_REQUEST['trname'];
            setcookie('book2',$theatre);
            $result = mysql_query("SELECT * FROM movies where theater='$theatre'");
            $num_results = mysql_num_rows($result);

            if($num_results>0)
            {
                echo "<h3>The movie in ".$theatre." is...</h3>";
                echo "<table border='1' align='center'>";
				echo "<tr><th><font color='white'>MOVIE</th><th></th><th><font color='white'>AREA</th><th></th><th><font color='white'>FARE</th></tr>";
               // $row = mysql_fetch_array($result);
                 while($row = mysql_fetch_array($result))
                {
                echo "<tr>";
                
                echo "<td><font color='white'>".$row['movie']."</td>";
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
                echo "<font color='white'>No theatre on that name...</font>";
             }
  
  }
?>
            </body></html>

