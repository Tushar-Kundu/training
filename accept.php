<body background=back.jpg>
<?php

include("myconnection.php");

$a=$_GET["en"];

$q=mysql_query("select * from request_for_admin where name='$a'");

while($r=mysql_fetch_row($q))
{
$s=mysql_query("insert into shop values('$r[0]','$r[1]','$r[2]','$r[3]','$r[4]','$r[5]','$r[6]','$r[7]','$r[8]','$r[9]','$r[10]','$r[11]','$r[12]')");
}

$q=mysql_query("delete from request_for_admin where name='$a'");

include("req.php");

?>