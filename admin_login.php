<body background=back.jpg>
<?php

$a=$_POST["t1"];
$b=$_POST["t2"];

if($a==='tushar' && $b==='jmieti')
{
echo 'Welcome Admin<p>';
?>
<a href=new_shop.html>Add New Shop</a>
<p>
<a href=display_for_edit.php>Edit Shop Detail</a>
<p>
<a href=req.php>Display All Requests</a>
<?php
}
else
{
echo 'Sorry Wrong User Id or Password';
include("admin.html");
}
?>