 <html>
<head>
    <script language="javascript">
        d=1;
        msg="/ ";
        c=-1;
        num=1;
            	function valid_func(book)
	{
		var err="";
		err+=valid_count(book.count);
          	if(err!="")
		{
			window.alert(err);
			return false;
		}
		else
			return true;
	}
	function valid_count(count)
	{
		var err="";
		if(count.value=="")
		{
			count.style.background="yellow";
			err="Please enter number of tickets \n";
		}
		else
		{
			count.style.background="white";
		}
		return err;
	}

        function ticket(x)
        {
           c++;
           
          // alert(d);
           if(d==1)
               {
              //     alert("vacha");
               
            num=book.count.value;
            
//alert(num);
             d++;

            }
            else
            {

//alert("count"+c);
//alert("number"+num);
            if(c>num)
                {
                    book.message.value=msg;
                    window.alert("max selected, click submit");
                }
            else
                {
                  document.getElementById(x.value).style.backgroundColor="red";

  
                  msg+="/"+x.value;
                  book.message.value=msg;

                    //alert(msg);
                }





                }
  }
        

    </script>
</head>
     <body>

         <form name="book" action="GetTicket1.php" method="post" onsubmit="return valid_func(this)">
            <center>
                <font color="white">Enter no.of seats:</font>
                <input type="text" name="count" onblur="ticket(this)"></center>
                <input type="hidden" name="message">
                <br/><br>
                <?php
                           $con= mysql_connect('localhost', 'root','');
                        if (!$con)
                         {
                          die('Could not connect: ' . mysql_error());
                        }
                        mysql_select_db('movietable') or die(mysql_error());

                        $k=0;
                        $l=1;
//date
                        $date=$_REQUEST['date'];
                        setcookie('date',$date);
    //time
                        $time=$_REQUEST['time'];
                         setcookie('time',$time);

                         $tempt=$_COOKIE['theatre'];
                        
                        $thrticket=$tempt."ticket";
                        $result = mysql_query("SELECT * FROM $thrticket where date='$date'and time='$time'");
                        $row = mysql_fetch_row($result);
               
                        echo "<table border='1' align='center'>";
                        for($i=1;$i<=4;$i++)
                        {
                            echo "<tr>";
                            for($j=1;$j<=5;$j++)
                            {
                                $k++;
                                $l++;
                                if($row[$l]==1)
                                {
                                echo"<td id=$k><input type='button' value=$k  onClick='ticket(this)'></td>";

                                }
                                else
                                {
                                   echo"<td bgcolor='red'>".$k."</td>";

                                }

                            }
                            echo"</tr>";
                        }
                        echo "</table>";



                ?>
  





               <table align="center"><tr><td><input type="submit" value="submit"></td><td><input type="reset" value="cancel"></td>
             </tr>
             </table>
         </form>
     </body>
     </head>