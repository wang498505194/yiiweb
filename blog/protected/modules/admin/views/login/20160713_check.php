<?php

$con=mysql_connect("localhost","root","498505194");
if(!$con)
{
die('Could not connect: ' . mysql_error());

}
else
{
echo 'Mysql Connect Success!';
echo '<br/>';
}

mysql_select_db("loginid",$con);

$result=mysql_query("SELECT * from loginid
WHERE id='$_POST[id]' ");

if($row=mysql_fetch_array($result))
{
if ($_POST['password']== $row['password'])
{
echo "Login Successfully!";
}
else
{
echo "Wrong password!";
}

echo "<br/>";
}
else
{
echo "Id doesn't exist";
}
mysql_clos($con);
?>
