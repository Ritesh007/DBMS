<?php
setcookie("cust", "", time()-3600);
setcookie("admin", "", time()-3600);
header('Location:index.php');
?>
