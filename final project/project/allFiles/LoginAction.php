<?php
           $con= mysql_connect('localhost', 'root','');
           if (!$con)
           {
                        die('Could not connect: ' . mysql_error());
            }
            mysql_select_db('movietable') or die(mysql_error());

            $i=0;
            $unametemp=$_REQUEST['uname'];
            $upasstemp=$_REQUEST['upass'];
            $result = mysql_query("SELECT uname,upass FROM members");

            while($row = mysql_fetch_array($result))
            {
                if (($row['uname']==$unametemp ) && ($row['upass']==$upasstemp))
                {
                    if ($row['uname']=="admin")
                    {
                        setcookie('admin',$unametemp);
                        header ('Location: AdminHome.php');
                    }
                    else
                    {
                       setcookie('cust',$unametemp);
                       header ('Location: CustomerHome.php');

                    }
                    $i=1;
                    break;

                }
                else {
                        $i=0;
                    }


            }
                if ($i==0)
                {
                         
                    header ('Location: index1.php');
                }

?>