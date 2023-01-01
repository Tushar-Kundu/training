<body background=back.jpg>
<?php

$a=$_POST["t1"];

include("myconnection.php");

$q=mysql_query("select * from shop where name='$a'");

$n=mysql_num_rows($q);

if($n==0)
{
echo 'Sorry Not Found';
}
else
{
echo 'Searching result for <font color=red><b>',$a,'</b></font><p>';
while($r=mysql_fetch_row($q))
{

echo '<img src=',$r[12],' height=100 width=150><p>';
echo 'Owner Name: ',$r[1],'<p>';
echo 'Category: ',$r[2],'<p>';
echo 'Address: ',$r[3],'<p>';
echo 'Location: ',$r[4],'<p>';
echo 'Phone No. : ',$r[5],'<p>';
echo 'Mobile No. : ',$r[6],'<p>';
echo 'Email Address : ',$r[7],'<p>';
echo 'Timing ',$r[8],' to ', $r[9],'<p>';
echo 'Emergency Contact No. : ',$r[10],'<p>';
echo 'About Shop : ',$r[11],'<p>';
echo '<hr>';
}
}

?>
<p><p><p><p>
<font size=2><center><a href=search_by_loc.html target=f2>Search By Location</a> | &nbsp&nbsp&nbsp&nbsp<a href=search_by_cat.html target=f2>Search By Category</a> |&nbsp&nbsp&nbsp&nbsp<a href=search_by_catl.html target=f2>Search By category and Location</a>|&nbsp&nbsp&nbsp&nbsp<a href=bottom.php target=f2>Back To Home</a>
