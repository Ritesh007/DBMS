<?php
          $con= mysql_connect('localhost', 'root','');
           if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
            mysql_select_db('movietable') or die(mysql_error());


            $num=$_COOKIE['cust'];

       ?>
<html>
	<head>

		<title>Movie Ticket Reservation System</title>


	</head>

	<body background="images/starsglow1.gif">
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td>
										<table width="100%">
												<tr>

													<td valign="top" width="200" align="left">
														<img src="db7/db1.jfif" style="border: 0px none;"
															width="211" height="90" />
													</td>


													<td valign="top" align="center">
													<font color="red" size='18'>ONLINE MOVIE TICKETS</font>
													</td>

													<td valign="top" width="34" align="left">
														&nbsp;
													</td>

													<td valign="top" align="left">

														<a href="CustomerHome.php"><font color=yellow>Home</font></a>
														<img src="images/top-link-div.gif" width="1" height="12"
															hspace="5" /><br/>


														<font color="pink">Welcome:<?php echo "&nbsp<font color='green'>".$num."</font>";?></font>


														<br/>


													</td>

												</tr>
										</table>
					</td>
				</tr>
				<tr>
					<td valign="top" align="left">
						<table width="100%">
			<!--starts here-->
									<tr>
											<td valign="top" align="center">

														<?php include('CustomerOptions.php')?>
											</td>
									</tr>
						</table>
					</td>
				</tr>
			</table>





		<div style=position:absolute;left:102;top:435>

		<img src="db7/db20.jfif" width="150" height="105"></div>

		<div style="position:absolute;left:260;top:135;z-index:5">

		<iframe  src='welcome.php' name="rest" width=700 height=295 frameborder="0">
		</iframe></div>

		<div style=position:absolute;left:250;top:435>
		<table><td>
		<marquee behavior="ALTERNATE" WIDTH=722 scrollamount="5" onmouseover="this.stop()" onmouseout="this.start()">
				<img src="db7/db2.jpg" width="150" height="120">
				<img src="db7/db3.jfif" width="150" height="120">
				<img src="db7/db4.jfif" width="150" height="120">
				<img src="db7/db5.jfif" width="150" height="120">
				<img src="db7/db6.jfif" width="150" height="120">
				<img src="db7/db8.jfif" width="150" height="120">
				<img src="db7/db9.jfif" width="150" height="120">
				<img src="db7/db10.jfif" width="150" height="120">
				<img src="db7/db11.jfif" width="150" height="120">
				<img src="db7/db12.jfif" width="150" height="120">
		</marquee></td>
		</table>
		</div>
		<div style=position:absolute;left:980;top:100>
			<a href="MFC.html">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="db7/db15.jfif"/><br/>
				<blink><font color="white" size='10'>online movies</blink></font></a><br/><br/>
			<div id="fb-root"></div><script
src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
<fb:like-box
href="http://www.facebook.com/pages/Emovies/203349243047289"
width="252" colorscheme="dark" show_faces="true" border_color=""
stream="false" header="true"></fb:like-box>



		</div>
	</body>
</html>








