<body background=back.jpg>
<?php

include("myconnection.php");

$a=$_POST["t1"];
$b=$_POST["t2"];
$d=$_POST["t4"];
$e=$_POST["t5"];
$f=$_POST["t6"];
$g=$_POST["t7"];
$h=$_POST["t8"];
$i=$_POST["t9"];
$j=$_POST["t10"];
$k=$_POST["t11"];
$l=$_POST["t12"];

$q=mysql_query("update shop set owner='$b',address='$d',location='$e',phone='$f',mobile='$g',email='$h',opent='$i',closet='$j',emergency='$k',others='$l' where name='$a'");

include("display_for_edit.php");

?>