<body background=back.jpg>
<?php

include("myconnection.php");

$q=mysql_query("select * from request_for_admin");

$n=mysql_num_rows($q);

if($n==0)
{
echo 'Sorry No Request Is There';
}
else
{
while($r=mysql_fetch_row($q))
{

echo '<img src=',$r[12],' height=100 width=150><p>';
echo 'Enterprise Name: ',$r[0],'<p>';
echo 'Owner Name: ',$r[1],'<p>';
echo 'Category: ',$r[2],'<p>';
echo 'Address: ',$r[3],'<p>';
echo 'Phone No. : ',$r[5],'<p>';
echo 'Mobile No. : ',$r[6],'<p>';
echo 'Email Address : ',$r[7],'<p>';
echo 'Timing ',$r[8],' to ', $r[9],'<p>';
echo 'Emergency Contact No. : ',$r[10],'<p>';
echo 'About request1 : ',$r[11],'<p>';
echo '<a href="accept.php?en=',$r[0],'">Accept The Request</a>  &nbsp&nbsp&nbsp&nbsp  <a href="reject.php?en=',$r[0],'">Reject The Request</a>';
echo '<hr>';
}
}

?><p><p>
<a href=bottom.php>back to home page</a>&nbsp&nbsp<a href=login_admin.html>back to admin</a>