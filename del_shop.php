<?php

$a=$_GET["sn"];

include("myconnection.php");

$q=mysql_query("delete from shop where name='$a'");

include("display_for_edit.php");

?>