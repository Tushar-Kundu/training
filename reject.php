<?php

include("myconnection.php");

$a=$_GET["en"];

$q=mysql_query("delete from request_for_admin where name='$a'");

include("req.php");

?>