<body background=back.jpg>
<?php

include("myconnection.php");

$a=$_POST["t1"];
$b=$_POST["t2"];
$c=$_POST["t3"];
$d=$_POST["t4"];
$e=$_POST["t5"];
$f=$_POST["t6"];
$g=$_POST["t7"];
$h=$_POST["t8"];
$i=$_POST["t9"];
$j=$_POST["t10"];
$k=$_POST["t11"];
$l=$_POST["t12"];
$m=trim($_FILES['t13']['name']);

$q=mysql_query("select * from request_for_admin where name='$a'");

$n=mysql_num_rows($q);

if($n==0)
{
if(move_uploaded_file($_FILES['t13']['tmp_name'],$m))
{
$q=mysql_query("insert into request_for_admin values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m')");
echo 'Record is saved<p>';
}
}
else
{
echo 'Sorry Shop is already Register';
}
?>
<p>
<a href=new_shop.html>For More Shops</a>