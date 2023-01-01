<html>
<head>
</head>
<body background=back.jpg>

<?php

$a=$_GET["sn"];

include("myconnection.php");

$q=mysql_query("select * from shop where name='$a'");

while($r=mysql_fetch_row($q))
{

?>
<form method=post action=shop_update.php>

Name of enterprise: <input type=text name=t1 value="<?php echo $r[0];?>" readonly><p>
Owner name: <input type=text name=t2 value="<?php echo $r[1];?>"><p>

Address: <input type=text name=t4 value="<?php echo $r[3];?>"><p>
Location: <input type=tex name=t5 value="<?php echo $r[4];?>"><p>
Phone No.:<input type=text name=t6 value="<?php echo $r[5];?>"><p>
Mobile No.:<input type=text name=t7 value="<?php echo $r[6];?>"><p>
Email Address: <input type=text name=t8 value="<?php echo $r[7];?>"><p>
Open Time: <input type=text name=t9 value="<?php echo $r[8];?>"> &nbsp
Close Time: <input type=text name=t10 value="<?php echo $r[9];?>"><p>
Emergency Contact No.: <input type=text name=t11 value="<?php echo $r[10];?>"><p>
Other Detailt: <input type=text name=t12 value="<?php echo $r[11];?>"><p>
<input type=submit value=Update> <input type=reset value=reset>
</form>
<?php
}
?>
</html>
