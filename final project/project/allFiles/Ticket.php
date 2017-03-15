<body bgcolor="">
<?php
           $con= mysql_connect('localhost', 'root','');
           if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
            mysql_select_db('movietable') or die(mysql_error());
            //1

            if(isSet($_REQUEST['s1']))
            {
              $no=$_REQUEST['s1'];
              $result = mysql_query("SELECT status FROM ticket where no='$no'");
              $row = mysql_fetch_array($result);
                if ($row['status']=='no' )
                {
                    echo "<font color='white'>".$no." is not available";
                    include("BookMovie11.php");
                }
              else
              {
                    setcookie('s',$no);
                     echo "<center><font color='green'>To book ticket</br><a href='GetTicket.php?&no=$no'><h3><font color='blue'>CLICK ME</font></h3></a></center>";
           }
            }

            //2
            elseif(isSet($_REQUEST['s2']))
            {
              $no=$_REQUEST['s2'];
              $result = mysql_query("SELECT status FROM ticket where no='$no'");
              $row = mysql_fetch_array($result);
                if ($row['status']=='no' )
                {
                    echo "<font color='white'>".$no." is not available</font>";
                    include("BookMovie11.php");
                }
              else
              {
                    setcookie('s',$no);
                  echo "<center><font color='green'>To book ticket</br><a href='GetTicket.php?&no=$no'><h3>CLICK ME</h3></a></center>";
              }
            }

            //3
            elseif(isSet($_REQUEST['s3']))
            {
              $no=$_REQUEST['s3'];
              $result = mysql_query("SELECT status FROM ticket where no='$no'");
              $row = mysql_fetch_array($result);
                if ($row['status']=='no' )
                {
                    echo "<font color='white'>".$no." is not available";
                    include("BookMovie11.php");
                }
              else
              {
                    setcookie('s',$no);
                  echo "<center><font color='green'>To book ticket</font></br><a href='GetTicket.php?&no=$no'><h3>CLICK ME</h3></a></center>";
              }
            }

            //4
            elseif(isSet($_REQUEST['s4']))
            {
              $no=$_REQUEST['s4'];
              $result = mysql_query("SELECT status FROM ticket where no='$no'");
              $row = mysql_fetch_array($result);
                if ($row['status']=='no' )
                {
                    echo "<font color='white'>".$no." is not available";
                    include("BookMovie11.php");
                }
              else
              {
                    setcookie('s',$no);
                  echo "<center><font color='green'>To book ticket</br><a href='GetTicket.php?&no=$no'><h3>CLICK ME</h3></a></center>";
              }
            }

            //5
            elseif(isSet($_REQUEST['s5']))
            {
              $no=$_REQUEST['s5'];
              $result = mysql_query("SELECT status FROM ticket where no='$no'");
              $row = mysql_fetch_array($result);
                if ($row['status']=='no' )
                {
                    echo "<font color='white'>".$no." is not available";
                    include("BookMovie11.php");
                }
              else
              {
                    setcookie('s',$no);
                    echo "<center><font color='green'>To book ticket</br><a href='GetTicket.php?&no=$no'><h3>CLICK ME</h3></a></center>";
            }
            }

            //6
            elseif(isSet($_REQUEST['s6']))
            {
              $no=$_REQUEST['s6'];
              $result = mysql_query("SELECT status FROM ticket where no='$no'");
              $row = mysql_fetch_array($result);
                if ($row['status']=='no' )
                {
                    echo "<font color='white'>".$no." is not available";
                    include("BookMovie11.php");
                }
              else
              {
                    setcookie('s',$no);
                    echo "<center><font color='green'>To book ticket</br><a href='GetTicket.php?&no=$no'><h3>CLICK ME</h3></a></center>";
            }
            }


            //7
            elseif(isSet($_REQUEST['s7']))
            {
              $no=$_REQUEST['s7'];
              $result = mysql_query("SELECT status FROM ticket where no='$no'");
              $row = mysql_fetch_array($result);
                if ($row['status']=='no' )
                {
                    echo "<font color='white'>".$no." is not available";
                    include("BookMovie11.php");
                }
              else
              {
                    setcookie('s',$no);
                    echo "<center><font color='green'>To book ticket</br><a href='GetTicket.php?&no=$no'><h3>CLICK ME</h3></a></center>";
            }
            }


            //8
            elseif(isSet($_REQUEST['s8']))
            {
              $no=$_REQUEST['s8'];
              $result = mysql_query("SELECT status FROM ticket where no='$no'");
              $row = mysql_fetch_array($result);
                if ($row['status']=='no' )
                {
                    echo "<font color='white'>".$no." is not available";
                    include("BookMovie11.php");
                }
              else
              {
                    setcookie('s',$no);
                    echo "<center><font color='green'>To book ticket</br><a href='GetTicket.php?&no=$no'><h3>CLICK ME</h3></a></center>";
              }
            }


            //9
            elseif(isSet($_REQUEST['s9']))
            {
              $no=$_REQUEST['s9'];
              $result = mysql_query("SELECT status FROM ticket where no='$no'");
              $row = mysql_fetch_array($result);
                if ($row['status']=='no' )
                {
                    echo "<font color='white'>".$no." is not available";
                    include("BookMovie11.php");
                }
              else
              {
                    setcookie('s',$no);
                     echo "<center><font color='green'>To book ticket</br><a href='GetTicket.php?&no=$no'><h3>CLICK ME</h3></a></center>";
           }
            }


            //10
            elseif(isSet($_REQUEST['s10']))
            {
              $no=$_REQUEST['s10'];
              $result = mysql_query("SELECT status FROM ticket where no='$no'");
              $row = mysql_fetch_array($result);
                if ($row['status']=='no' )
                {
                    echo "<font color='white'>".$no." is not available";
                    include("BookMovie11.php");
                }
              else
              {
                    setcookie('s',$no);
                     echo "<center><font color='green'>To book ticket</br><a href='GetTicket.php?&no=$no'><h3>CLICK ME</h3></a></center>";
           }
            }

             else
             {
                    echo "<font color='white'>there is no number</font>";
             }
?>
</body>