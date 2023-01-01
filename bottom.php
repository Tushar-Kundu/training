<html>
<head>
<style>
a{color:red;text-decoration:none};
a:hover{color:blue;text-decoration:underline};
</style>
</haed>
<body background=back.jpg>
<?php

include("myconnection.php");

$q=mysql_query("select * from category");

echo '<table width=100%><tr>';
$i=0;
while($r=mysql_fetch_row($q))
{
echo '<td><center><a href="list_of_shop.php?cat=',$r[0],'"><img src=',$r[1],' height=100 width=200></a><br><center><b><font color=blue>',$r[0],'</font><br><center>',$r[2],'</td>';
$i=$i+1;
if($i%4==0)
{
echo '<tr><td colspan=3><hr><td></tr><tr>';
}
}

?>
</table>
<p><p>
<font size=2><center><a href=search_by_loc.html target=f2>Search By Location</a> | &nbsp&nbsp&nbsp&nbsp<a href=search_by_cat.html target=f2>Search By Category</a> |&nbsp&nbsp&nbsp&nbsp<a href=search_by_shop.html target=f2>Search By Name</a> |&nbsp&nbsp&nbsp&nbsp<a href=search_by_catl.html target=f2>Search By category and Location</a> |&nbsp&nbsp&nbsp&nbsp<a href=request.html target=f2> request for new shop</a>
<p><p>
<a href=login_admin.html>Designed By:B-Tech 4th Year Student(JMIETI, Radaur)</a>.