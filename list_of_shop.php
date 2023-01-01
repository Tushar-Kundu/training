<body background=back.jpg>
<?php

$a=$_GET["cat"];

include("myconnection.php");

$q=mysql_query("select * from shop where category='$a'");

$n=mysql_num_rows($q);
echo 'Searching result for <font color=red><b>',$a,'</b></font><p>';
if($n==0)
{
echo 'Sorry Not Found';
}
else
{

while($r=mysql_fetch_row($q))
{
echo '<a href="get_detail.php?t1=',$r[0],'"><b>',$r[0],'</b></a>, &nbsp&nbsp';
echo $r[3],', &nbsp&nbsp';
echo $r[4],', &nbsp&nbsp';
echo $r[5],' &nbsp&nbsp';
echo '<hr>';
}
}

?>
<p>
<a href=search.html>Back to Search Page</a>