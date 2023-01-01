<body background=back.jpg>
<?php

$a=$_POST["t1"];

include("myconnection.php");

$q=mysql_query("select * from shop where category='$a'");

$n=mysql_num_rows($q);

if($n==0)
{
echo 'Sorry Not Found';
}
else
{
echo 'Searching result for <font color=red><b>','$c','</b></font><p>';
while($r=mysql_fetch_row($q))
{

echo '<img src=',$r[13],' height=100 width=150><p>';
echo 'Category: ',$r[2],'<p>';
echo 'Address: ',$r[3],'<p>';
echo 'Location: ',$r[4],'<p>';s
echo 'Phone No. : ',$r[5],'<p>';
echo 'Mobile No. : ',$r[6],'<p>';
echo 'Email Address : ',$r[7],'<p>';
echo 'Timing ',$r[8],' to ', $r[9],'<p>';
echo 'Emergency Contact No. : ',$r[10],'<p>';
echo 'About category : ',$r[11],'<p>';
echo  ' enterprise name:,'$r[12],'<p>';
echo   '<hr>';
}
}
?>
<p>
<a href=category2.html>Back to Search Page</a>