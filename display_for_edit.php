<body background=back.jpg>
<?php

include("myconnection.php");

$q=mysql_query("select * from shop order by location");

while($r=mysql_fetch_row($q))
{
echo 'Enterprise Name: ',$r[0],' &nbsp&nbsp&nbsp';
echo 'Address: ',$r[3],',',$r[4],'<p>';
echo '<a href="del_shop.php?sn=',$r[0],'">Delete The Record</a>  <a href="update_shop.php?sn=',$r[0],'">Update The Record</a>';
echo '<hr>';
}

?>
<p><p><p>
<a href=bottom.php>back to home page</a>&nbsp&nbsp<a href=login_admin.html>back to admin</a>